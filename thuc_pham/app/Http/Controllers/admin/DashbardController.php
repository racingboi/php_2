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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashbardController extends Controller
{
    function index()
    {
        $products = Products::with('image_features')->orderBy('created_at', 'desc')->get();
        // $suppliersCount = Suppliers::distinct('name')->count();
        $users = User::distinct('name')->count();
        $order = Order::distinct('id')->count();
        // return view('dashboard', compact('products', 'suppliersCount', 'users', 'order'));
        return view('admin.dashboard', compact('products', 'users', 'order'));
    }
    function getData()
    {
        $ngayHienTai = Carbon::now();
        $mangNgay = [];
        $mangDemOrders = [];
        $ngayTruoc7Ngay = $ngayHienTai->subDays(7);
        // Lặp 7 lần để tạo mảng chứa 7 ngày gần nhất
        for ($i = 0; $i < 7; $i++) {
            $ngay = $ngayTruoc7Ngay->clone()->addDays($i);
            $mangNgay[] = $ngay->format('m-d');
        }


        // Đảo ngược mảng để có thứ tự từ gần nhất đến xa nhất

        // Truy vấn cơ sở dữ liệu
        foreach ($mangNgay as $key => $ngay) {
            $soLuongOrders = DB::table('Orders')
                ->whereDate('order_date', Carbon::createFromFormat('m-d', $ngay)->format('Y-m-d'))
                ->count();

            // Thêm vào mảng đếm
            $mangDemOrders[$key] = $soLuongOrders;
        }
        $data = [
            'chartLine' => [
                'label' => $mangNgay,
                'data' => $mangDemOrders
            ]
        ];
        return response()->json($data, 200);
    }
}
