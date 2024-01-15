<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;

class index extends Controller
{
    function home()
    {
        $products = Products::with(['category', 'subcategory', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $category = Category::with(['subcategories'])->get();
        // return view('web.index', compact('products', 'category', 'subcategory'));
        return view('web.index', compact('products', 'category'));
    }
    function detail($id)
    {
        $product = Products::with(['category', 'image_features'])->find($id);
        $products = Products::with(['category', 'subcategory', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $category = Category::with(['subcategories'])->get();
        return view('web.detail', compact('products', 'product', 'category'));
    }
}
