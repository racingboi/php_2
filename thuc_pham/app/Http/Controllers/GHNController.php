<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Order;
use App\Models\OrderDetail;
class GHNController extends Controller
{
    function getVNP(Request $request , $id)
    {
        $total = $request->total;
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/return-vnpay";
        $vnp_TmnCode = "LUNOX45E"; //Mã website tại VNPAY
        $vnp_HashSecret = "NTFQKMOLJYQEICDFEZGCOAXQSTQBXKLL"; //Chuỗi bí mật
        $vnp_TxnRef = $_POST['order_id'] = $id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $_POST['order_desc'] = 'thanh toan text';
        $vnp_OrderType = $_POST['order_type'] = 'billpayment';
        $vnp_Amount = $_POST['amount'] = $total*100;
        $vnp_Locale = $_POST['language'] = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
// $vnp_ExpireDate = $_POST['txtexpire'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            // "vnp_ExpireDate"=>$vnp_ExpireDate
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            ,
            'message' => 'success'
            ,
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            return redirect()->away($vnp_Url);
            } else {
            // return $returnData;
            return redirect()->away($vnp_Url);
            }
        }
        function ReturnVNPay(){
        $products = Products::with(['category', 'subcategory', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $category = Category::with(['subcategories'])->get();
        // return view('web.index', compact('products', 'category', 'subcategory'));
        $user_id = auth()->id();
        $cart = OrderDetail::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.orderDetails', 'product.image_features'])
            ->get();
        $groupedCart = $cart->groupBy('product.id');
        return view('web.VNP', compact('products', 'category', 'groupedCart'));
        }
    }

