<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class GHNController extends Controller
{
    public function createShippingOrder()
    {
        $data = array(
            "pick_province" => "Hà Nội",
            "pick_district" => "Quận Hai Bà Trưng",
            "province" => "Hà nội",
            "district" => "Quận Cầu Giấy",
            "address" => "P.503 tòa nhà Auu Việt, số 1 Lê Đức Thọ",
            "weight" => 1000,
            "value" => 3000000,
            "transport" => "fly",
            "deliver_option" => "xteam",
            "tags"  => [1]
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/fee?" . http_build_query($data),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => array(
                "Token: df348f3044bbc338f399f0844a1c336a3c7e48c9",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        dd($response);
        // return 'Response: ' . $response;
    }

    public function getProvinces()
    {
        $apiUrl = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
        $apiKey = env('API_GHN');
        $client = new Client();


        $response = $client->get($apiUrl, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Token' => $apiKey,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        // dd($data);
        // Handle the data here
        if (isset($data['data']) && is_array($data['data'])) {
            $provinceIds = [];

            foreach ($data['data'] as $item) {
                if (isset($item['ProvinceID']) && is_numeric($item['ProvinceID'])) {
                    $provinceIds[] = (int) $item['ProvinceID'];
                }
            }
        }
        return view('text', compact('provinceIds', 'data'));
    }

    public function getDistricts($provinceIds)
    {
        $apiUrl = "https://online-gateway.ghn.vn/shiip/public-api/master-data/district";
        $apiKey = env('API_GHN');
        $client = new Client();

        try {
            // Assuming you want to query for districts of all provinces
            $response = $client->get($apiUrl, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Token' => $apiKey,
                ],
                'query' => [
                    'province_id' =>  $provinceIds
                ],

            ]);

            $data = json_decode($response->getBody(), true);

            // Handle the district data here
            return response()->json($data);
        } catch (\Exception $e) {
            // Handle errors
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}