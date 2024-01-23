<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Orders;

class DashbardController extends Controller
{
    function index()
    {
        $products = Products::with('image_features')->orderBy('created_at', 'desc')->get();
        // $suppliersCount = Suppliers::distinct('name')->count();
        $users = User::distinct('name')->count();
        // $order = Orders::distinct('id')->count();
        // return view('dashboard', compact('products', 'suppliersCount', 'users', 'order'));
        return view('admin.dashboard', compact('products', 'users',));
    }
}
