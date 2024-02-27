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
use Illuminate\Support\Facades\Session;
class GHNController extends Controller
{
    public function getVNP(Request $request , $id)
    {
        $total = $request->total;
        // Session::put('total', $total);
        // // // $this->ReturnVNPay();
        // dd($total);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/return-vnpay";
        $vnp_TmnCode = "LUNOX45E"; //Mã website tại VNPAY
        $vnp_HashSecret = "NTFQKMOLJYQEICDFEZGCOAXQSTQBXKLL"; //Chuỗi bí mật
        $vnp_TxnRef = $id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo ='thanh toan text';
        $vnp_OrderType  = 'billpayment';
        $vnp_Amount = $total*100;
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
    public function ReturnVNPay(){
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


        // $inputData = array();
        // $returnData = array();
        // $vnp_HashSecret = "NTFQKMOLJYQEICDFEZGCOAXQSTQBXKLL";
        // foreach ($_GET as $key => $value) {
        //     if (substr($key, 0, 4) == "vnp_") {
        //         $inputData[$key] = $value;
        //     }
        // }

        // $vnp_SecureHash = $inputData['vnp_SecureHash'];
        // unset($inputData['vnp_SecureHash']);
        // ksort($inputData);
        // $i = 0;
        // $hashData = "";
        // foreach ($inputData as $key => $value) {
        //     if ($i == 1) {
        //         $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
        //     } else {
        //         $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
        //         $i = 1;
        //     }
        // }

        // $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        // $vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
        // $vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
        // $vnp_Amount = $inputData['vnp_Amount']; // Số tiền thanh toán VNPAY phản hồi
        // // dd($vnp_Amount);
        // $Status = 0; // Là trạng thái thanh toán của giao dịch chưa có IPN lưu tại hệ thống của merchant chiều khởi tạo URL thanh toán.
        // $orderId = $inputData['vnp_TxnRef'];
        // // dd($orderId);
        //     //Check Orderid
        //     //Kiểm tra checksum của dữ liệu
        //     if ($secureHash == $vnp_SecureHash) {
        //         //Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId
        //         //Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
        //         //Giả sử: $order = mysqli_fetch_assoc($result);
        //         $order = Order::find($orderId);
        //     // dd($order["total"]);
        //     // $order = NULL;
        //     // $total = Session::get('total');
        //     // dd($total);
        //         if ($order != NULL) {
        //             if ($order["total"]== $vnp_Amount) //Kiểm tra số tiền thanh toán của giao dịch: giả sử số tiền kiểm tra là đúng. //$order["Amount"] == $vnp_Amount
        //             {
        //                 if ($order["status"] == 0) {
        //                     if ($inputData['vnp_ResponseCode'] == '00' || $inputData['vnp_TransactionStatus'] == '00') {
        //                         $Status = 1; // Trạng thái thanh toán thành công
        //                         $order = Order::find($orderId)->update(['status' => 1]);
        //                 // dd(1);
        //                     } else {
        //                         $Status = 2; // Trạng thái thanh toán thất bại / lỗi
        //                         $order = Order::find($orderId)->update(['status' => 2]);
        //                     }
        //                     $returnData['RspCode'] = '00';
        //                     $returnData['Message'] = 'Confirm Success';
        //                 } else {
        //                     $returnData['RspCode'] = '02';
        //                     $returnData['Message'] = 'Order already confirmed';
        //                 }
        //             } else {
        //                 $returnData['RspCode'] = '04';
        //                 $returnData['Message'] = 'invalid amount';
        //             }
        //         } else {
        //             $returnData['RspCode'] = '01';
        //             $returnData['Message'] = 'Order not found';
        //         }
        //     } else {
        //         $returnData['RspCode'] = '97';
        //         $returnData['Message'] = 'Invalid signature';
        //     }
        //     // dd($returnData);
        // //Trả lại VNPAY theo định dạng JSON
        // echo json_encode($returnData);
        return view('web.VNP', compact('products', 'category', 'groupedCart'));
        }
    // function Momo(Request $request){
    // $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

    // $partnerCode = 'MOMOBKUN20180529';
    // $accessKey = 'klm05TvNBzhg7h7j';
    // $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
    // $orderInfo = "Thanh toán qua MoMo";
    // $amount = "10000";
    // $orderId = time() . "";
    // $redirectUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
    // $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
    // $extraData = "";

    // if ($request->isMethod('post')) {
    //     $partnerCode = $partnerCode;
    //     $accessKey = $accessKey;
    //     $serectkey = $secretKey;
    //     $orderId = $orderId;
    //     $orderInfo = $orderInfo;
    //     $amount = $amount;
    //     $ipnUrl = $ipnUrl;
    //     $redirectUrl = $redirectUrl;
    //     $extraData = $extraData;

    //     $requestId = time() . "";
    //     $requestType = "payWithATM";
    //     $extraData = ($request->input("extraData") ? $request->input("extraData") : "");

    //     $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    //     $signature = hash_hmac("sha256", $rawHash, $serectkey);

    //     $data = [
    //         'partnerCode' => $partnerCode,
    //         'partnerName' => "Test",
    //         "storeId" => "MomoTestStore",
    //         'requestId' => $requestId,
    //         'amount' => $amount,
    //         'orderId' => $orderId,
    //         'orderInfo' => $orderInfo,
    //         'redirectUrl' => $redirectUrl,
    //         'ipnUrl' => $ipnUrl,
    //         'lang' => 'vi',
    //         'extraData' => $extraData,
    //         'requestType' => $requestType,
    //         'signature' => $signature
    //     ];

    //     $result = $this->execPostRequest($endpoint, json_encode($data));
    //     $jsonResult = json_decode($result, true);

    //     return redirect($jsonResult['payUrl']);
    // }

    // // return view('text');
    // }
    // public function momoPayment(Request $request)
    // {
    //     $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

    //     $partnerCode = 'MOMOBKUN20180529';
    //     $accessKey = 'klm05TvNBzhg7h7j';
    //     $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
    //     $orderInfo = "Thanh toán qua MoMo";
    //     $amount = "10000";
    //     $orderId = 123;
    //     $redirectUrl = "http://127.0.0.1:8000/momo";
    //     $ipnUrl = "http://127.0.0.1:8000/momo";
    //     $extraData = "";

    //     if ($request->isMethod('post')) {
    //         $partnerCode = $partnerCode;
    //         $accessKey = $accessKey;
    //         $serectkey = $secretKey;
    //         $orderId = $orderId;
    //         $orderInfo = $orderInfo;
    //         $amount = $amount;
    //         $ipnUrl = $ipnUrl;
    //         $redirectUrl = $redirectUrl;
    //         $extraData = $extraData;

    //         $requestId = time() . "";
    //         $requestType = "payWithATM";
    //         $extraData = ($request->input("extraData") ? $request->input("extraData") : "");

    //         $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    //         $signature = hash_hmac("sha256", $rawHash, $serectkey);

    //         $data = [
    //             'partnerCode' => $partnerCode,
    //             'partnerName' => "Test",
    //             "storeId" => "MomoTestStore",
    //             'requestId' => $requestId,
    //             'amount' => $amount,
    //             'orderId' => $orderId,
    //             'orderInfo' => $orderInfo,
    //             'redirectUrl' => $redirectUrl,
    //             'ipnUrl' => $ipnUrl,
    //             'lang' => 'vi',
    //             'extraData' => $extraData,
    //             'requestType' => $requestType,
    //             'signature' => $signature
    //         ];

    //         $result = $this->execPostRequest($endpoint, $data);
    //         $jsonResult = json_decode($result, true);

    //         return redirect($jsonResult['payUrl']);
    //     }

    //     return view('text'); // Replace 'momo.payment_form' with the actual blade view path
    // }

    // private function execPostRequest($url, $data)
    // {
    //     $response = Http::withHeaders([
    //         'Content-Type' => 'application/json',
    //         'Content-Length' => strlen(json_encode($data)),
    //     ])->post($url, $data);

    //     return $response->body();
    // }
    public function momoPayment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = "10000";
        $orderId = time(); // Using current time as a dynamic order ID
        $redirectUrl = "http://127.0.0.1:8000/momo/redirect"; // Update the URL if needed
        $ipnUrl = "http://127.0.0.1:8000/momo/ipn"; // Update the URL if needed
        $extraData = "";

        if ($request->isMethod('post')) {
            $requestId = time() . "";
            $requestType = "payWithATM";
            $extraData = ($request->input("extraData") ? $request->input("extraData") : "");

            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);

            $data = [
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            ];

            $result = $this->execPostRequest($endpoint, $data);
            $jsonResult = json_decode($result, true);

            return redirect($jsonResult['payUrl']);
        }

        return view('text'); // Replace 'text' with the actual blade view path
    }

    }

