<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.coupons.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupons.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'value' => 'required|numeric',
                'expiry_date' => 'required|date|after_or_equal:now',
                'type' => 'required|string',
            ],
            [
                'name.required' => 'Tên phiếu giảm giá không được để trống',
                'name.string' => 'Tên phiếu giảm giá phải là chuỗi',
                'name.max' => 'Tên phiếu giảm giá không được vượt quá :max ký tự',

                'value.required' => 'Số lượng không được để trống',
                'value.numeric' => 'Số lượng phải là một số',

                'expiry_date.required' => 'Ngày kết thúc không được để trống',
                'expiry_date.date' => 'Ngày kết thúc phải là một ngày hợp lệ',
                'expiry_date.after_or_equal' => 'Ngày kết thúc phải lớn hơn hoặc bằng ngày hiện tại',

                'type.required' => 'Sự miêu tả không được để trống',
                'type.string' => 'Sự miêu tả phải là chuỗi',
            ],
            [
                'name' => 'Tên phiếu giảm giá',
                'value' => 'Số lượng',
                'expiry_date' => 'Ngày kết thúc',
                'type' => 'Sự miêu tả'
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
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
