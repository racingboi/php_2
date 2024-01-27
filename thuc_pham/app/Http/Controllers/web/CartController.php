<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;

class CartController extends Controller
{
    function cart()
    {
        $products = Products::with(['category', 'subcategory', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $category = Category::with(['subcategories'])->get();
        $user_id = auth()->id();
        $cart = OrderDetail::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.orderDetails', 'product.image_features'])
            ->get();
        $groupedCart = $cart->groupBy('product.id');
        return view('web.cart', compact('products', 'category', 'groupedCart'));
    }
    public function addCart($productId, $quantity)
    {

        $product = Products::findOrFail($productId);
        if (!$product) {
            abort(404, 'Không tìm thấy sản phẩm');
        }
        $order = Order::firstOrCreate([
            'users_id' => auth()->id(),
            'status' => 'chưa chọn phương thức thanh toán',
        ], [
            'order_date' => now(),
            'total' => 0,
        ]);

        $orderDetail = new OrderDetail([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price
        ]);
        $order->orderDetails()->save($orderDetail);
        $order->update([
            'total' => $product->price * $quantity,
        ]);

        return redirect()->route('home')->with('success', 'Thêm sản phẩm thành công');
        // return response()->json(['success' => true]);
    }
    public function deleteCartItem($orderDetailId)
    {
        $orderDetail = OrderDetail::find($orderDetailId);
        if (!$orderDetail) {
            return response()->json(['message' => 'Item not found'], 404);
        }
        $orderDetail->delete($orderDetailId);
        session()->flash('success', 'Xóa thành công');
        return redirect()->route('cart.list');
    }
    public function updateCartItem(Request $request)
    {
        $request->validate([
            'updatedQuantities' => 'required|array',
            'updatedQuantities.*.productId' => 'required|exists:products,id',
            'updatedQuantities.*.quantity' => 'required|integer|min:0',
        ]);
        foreach ($request->input('updatedQuantities') as $updatedQuantity) {
            $productId = $updatedQuantity['productId'];
            $quantity = $updatedQuantity['quantity'];
            $orderDetail = OrderDetail::where('product_id', $productId)->first();
            $product = Products::where('id', $productId)->first();
            if ($orderDetail) {
                $orderDetail->update(['quantity' => $quantity]);
            }
        }
        $orderId = $orderDetail->order_id;
        $order = Order::find($orderId);
        if ($order) {
            $order->update(['total' => $product->price]);
        }
        return response()->json(['success' => 'Cập nhật giỏ hàng thành công']);
    }
    public function deleteTC(Request $request)
    {
        $orderIds = $request->input('ids');

        foreach ($orderIds as $orderId) {
            // Delete related order details first
            OrderDetail::where('id', $orderId)->delete();

            // // Then, delete the orders
            // Order::where('id', $orderId)->delete();
        }

        session()->flash('success', 'Xóa đơn hàng thành công');
        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        // Nhận dữ liệu từ AJAX
        $cartData = $request->input('cartData');

        // Xử lý dữ liệu, ví dụ cập nhật giỏ hàng trong CSDL
        foreach ($cartData as $item) {
            $productId = $item['id'];
            $quantity = $item['quantity'];

            // Thực hiện các thao tác cập nhật giỏ hàng tại đây
            // Ví dụ: Cart::update($productId, $quantity);
        }

        // Phản hồi về trình duyệt
        return response()->json(['success' => true]);
    }
    function detail_add(Request $request)
    {
        $id = $request->productId;
        $quantity = $request->quantity;
        $product = Products::findOrFail($id);
        $order = Order::firstOrCreate([
            'users_id' => auth()->id(),
            'status' => 'chưa chọn phương thức thanh toán',
        ], [
            'order_date' => now(),
            'total' => 0,
        ]);

        $orderDetail = new OrderDetail([
            'product_id' => $id,
            'quantity' => $quantity,
            'price' => $product->price
        ]);
        $order->orderDetails()->save($orderDetail);
        $order->update([
            'total' => $product->price * $quantity,
        ]);
        return redirect()->route('cart.list')->with('success', 'Thêm sản phẩm thành công');
    }
}
