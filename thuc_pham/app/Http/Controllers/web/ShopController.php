<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Order;
use App\Models\OrderDetail;

class ShopController extends Controller
{
    function index()
    {
        $products = Products::with(['category', 'subcategory', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->paginate(9);
        $category = Category::with(['subcategories'])->get();
        // return view('web.index', compact('products', 'category', 'subcategory'));
        $user_id = auth()->id();
        $cart = OrderDetail::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.orderDetails', 'product.image_features'])
            ->get();
        $groupedCart = $cart->groupBy('product.id');
        return view('web.shop', compact('products', 'category', 'groupedCart'));
    }
    public function LocSp(Request $request)
    {
        $luaChonSapXep = $request->input('sorting_option');

        // Sắp xếp mặc định nếu không có lựa chọn
        $theoCot = 'ten';
        $huongSapXep = 'asc';

        switch ($luaChonSapXep) {
            case 1:
                $theoCot = 'price';
                break;
            case 2:
                $theoCot = 'unit';
                break;
            case 3:
                $theoCot = 'created_at';
                break;
            case 4:
                $theoCot = 'price';
                $huongSapXep = 'asc';
                break;
            case 5:
                $theoCot = 'price';
                $huongSapXep = 'desc';
                break;
                // Thêm các case khác nếu cần

            default:
                // Theo bảng chữ cái, A-Z (mặc định)
                $theoCot = 'name';
                $huongSapXep = 'asc';
                break;
        }
        $products = Products::orderBy($theoCot, $huongSapXep)->paginate(9);
        $category = Category::with(['subcategories'])->get();
        // return view('web.index', compact('products', 'category', 'subcategory'));
        $user_id = auth()->id();
        $cart = OrderDetail::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.orderDetails', 'product.image_features'])
            ->get();
        $groupedCart = $cart->groupBy('product.id');
        return view('web.shop', compact('products', 'category', 'groupedCart'));
    }
}
