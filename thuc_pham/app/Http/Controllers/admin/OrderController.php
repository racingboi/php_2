<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Category;
use App\Models\Order;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = OrderDetail::whereHas('order')
            ->with(['order.orderDetails', 'product.image_features', 'order.user'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $users = User::all();
        $order_detail = OrderDetail::all();
        $orders = Order::all();

        return view("admin.orders.list", compact("cart", "groupedCart", "orders", "order_detail", "users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    function show(string $id)
    {
        $cart = OrderDetail::whereHas('order')
            ->with(['order.orderDetails', 'product.image_features', 'order.user'])
            ->findOrFail($id);

        return view("admin.orders.show", compact('cart'));
    }
    function Status(string $id)
    {
        $status = Order::findOrFail($id)->update(['status' => 1]);
        // $cart = OrderDetail::whereHas('order')
        // ->with(['order.orderDetails', 'product.image_features', 'order.user'])
        // ->findOrFail($id);
        return redirect()->back()->with(['success' => 'Đã xác nhận đơn hàng']);
    } /**
      * Show the form for editing the specified resource.
      */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
