<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;

class crawl_data extends Controller
{
    public function crawlDataProducts()
    {
        $client = new Client();
        $numberPage = 7;
        $products = [];
        $productModel = new Products(); // Assuming you have a Product model

        for ($i = 2; $i <= $numberPage; $i++) {
            $crawler = $client->request('GET', "https://vinffood.vn/collections/all?page=$i");
            $crawler->filter('.col-xs-6.col-sm-4.col-md-3.col-lg-3')->each(function ($node) use (&$products, $client, $productModel) {
                $product = new Products();

                // Extracting product name
                $name = $node->filter('.product-name a')->text();
                $product->name = $name;

                // Extracting image URL
                $imageUrl = $node->filter('.product-thumbnail img')->attr('data-src');
                $product->img = "https:" . $imageUrl;
                // Extracting price
                $price = $node->filter('.price.product-price')->text();
                $product->price = $price;
                // Constructing the product detail URL
                $productDetailUrl = $node->filter('.product-thumbnail a')->attr('href');
                $productDetailUrl = "https://vinffood.vn$productDetailUrl";

                // Requesting the product detail page
                $productDetailCrawler = $client->request('GET', $productDetailUrl);
                $imageUrls = $productDetailCrawler->filter('#gallery_02 .item a')->extract(['data-image']);
                $product->img = array_map(function ($imageUrl) {
                    return $imageUrl;
                }, $imageUrls);
                // dd($imageUrl);
                // Extracting description from the product detail page
                $descriptionNode = $productDetailCrawler->filter('.product-summary.product_description .rte-summary');
                $description = $descriptionNode->count() > 0 ? $descriptionNode->text() : 'Description not found';
                $product->description = $description;

                $products[] = $product;
            });
        }
        foreach ($products as $productData) {
            // Extract the numeric part from the price
            $matches = [];
            preg_match('/([\d,]+)/', $productData->price, $matches);
            $numericPart = isset($matches[1]) ? $matches[1] : null;
            $numericValue = $numericPart ? (int)str_replace(',', '', $numericPart) : null;

            // Extract the unit part from the price
            $unitMatches = [];
            preg_match('/\/([^\/]+)$/', $productData->price, $unitMatches);
            $unit = isset($unitMatches[1]) ? trim($unitMatches[1]) : 'DefaultUnit'; // Provide a default unit if not available

            // Create a new product record with the extracted numeric value and unit
            $product = Products::create([
                'name' => $productData->name,
                'price' => $numericValue,
                'description' => $productData->description,
                'quantity' => 5,
                'unit' => $unit,
                'category_id' => 2,
                'subcategory_id' => 3
            ]);

            // Handle images associated with the product
            if (!empty($productData->img)) {
                $imageNumber = 0; // Initialize the image number counter
                foreach ($productData->img as $imageUrl) {
                    // Assuming you have an `image_features` relationship in the `Products` model
                    $product->image_features()->create([
                        'url_img' => $imageUrl,
                        'alt_img' => '',
                        'number' => $imageNumber, // Use the current image number
                    ]);
                    $imageNumber++; // Increment the image number for the next image
                }
            }
        }
    }

    public function crawlDataCategory()
    {
        $client = new Client();
        $categories = [];

        // Assuming the URL contains the navigation menu
        $crawler = $client->request('GET', "https://vinffood.vn/");

        // Use the selector that targets the list items within the navigation menu
        $subcategoriesData = $crawler->filter('.nav-item > ul')->each(
            function ($subCategoryNode) use (&$categories) {
                $categoryName = $subCategoryNode->filter('.item_small > li > a')->each(
                    function ($categoryNameNode) {
                        return $categoryNameNode->text();
                    }
                );

                $subcategories = $subCategoryNode->filter('.item_small li ul li a')->each(
                    function ($subCategoryNode) {
                        return $subCategoryNode->text();
                    }
                );

                $categories[] = [
                    'categoryName' => $categoryName,
                    'subcategories' => $subcategories,
                ];
            }
        );

        foreach ($categories as $category) {
            // Tạo Categories cho tất cả các chỉ số trong $category['categoryName']
            foreach ($category['categoryName'] as $index => $name) {
                $createdCategory = Category::create([
                    'name' => $name
                ]);
            }
            // Tạo Subcategories
            foreach ($category['subcategories'] as $subcategory) {
                Subcategory::create([
                    'name' => $subcategory,
                    'category_id' => $createdCategory->id
                ]);
            }
        }
    }
}
