<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Coupon;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.coupons.list', compact('coupons'));
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
        $customAttributes = [
            'name' => 'Tên phiếu giảm giá',
            'value' => 'Số lượng',
            'expiry_date' => 'Ngày kết thúc',
            'start_date' => 'Ngày bắt đầu',
            'type' => 'Sự miêu tả',
        ];

        $customMessages = [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là chuỗi',
            'max' => ':attribute không được vượt quá :max ký tự',
            'numeric' => ':attribute phải là một số',
            'date' => ':attribute phải là một ngày hợp lệ',
            'after_or_equal' => ':attribute phải lớn hơn hoặc bằng :date',
            'before_or_equal' => ':attribute phải nhỏ hơn hoặc bằng :date',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'value' => 'required|numeric',
            'expiry_date' => 'required|date|after_or_equal:start_date',
            'start_date' => 'required|date|before_or_equal:expiry_date',
            'type' => 'required|string',
        ], $customMessages, $customAttributes);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Kiểm tra nếu expiry_date không lớn hơn hoặc bằng start_date
        $input = $request->all();
        if ($input['expiry_date'] <= $input['start_date']) {
            return redirect()->back()->withErrors(['expiry_date' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu'])->withInput();
        }

        // Kiểm tra xem ngày hiện tại có nằm trong khoảng thời gian của phiếu giảm giá hay không
        $currentDate = now();
        if ($input['start_date'] > $currentDate || $input['expiry_date'] < $currentDate) {
            return redirect()->back()->withErrors(['expiry_date' => 'Ngày hiện tại không nằm trong khoảng thời gian của phiếu giảm giá'])->withInput();
        }

        // Tạo mới phiếu giảm giá nếu kiểm tra thành công
        $coupons = Coupon::create($input);

        return redirect()->route("admin.coupons.create")->with('success', 'Thêm mới thành công!');
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
        $coupons = Coupon::findOrFail($id);
        return view('admin.coupons.edit', compact('coupons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customAttributes = [
            'name' => 'Tên phiếu giảm giá',
            'value' => 'Số lượng',
            'expiry_date' => 'Ngày kết thúc',
            'start_date' => 'Ngày bắt đầu',
            'type' => 'Sự miêu tả',
        ];

        $customMessages = [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là chuỗi',
            'max' => ':attribute không được vượt quá :max ký tự',
            'numeric' => ':attribute phải là một số',
            'date' => ':attribute phải là một ngày hợp lệ',
            'after_or_equal' => ':attribute phải lớn hơn hoặc bằng :date',
            'before_or_equal' => ':attribute phải nhỏ hơn hoặc bằng :date',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'value' => 'required|numeric',
            'expiry_date' => 'required|date|after_or_equal:start_date',
            'start_date' => 'required|date|before_or_equal:expiry_date',
            'type' => 'required|string',
        ], $customMessages, $customAttributes);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Kiểm tra nếu expiry_date không lớn hơn hoặc bằng start_date
        $input = $request->all();
        if ($input['expiry_date'] <= $input['start_date']) {
            return redirect()->back()->withErrors(['expiry_date' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu'])->withInput();
        }

        // Kiểm tra xem ngày hiện tại có nằm trong khoảng thời gian của phiếu giảm giá hay không
        $currentDate = now();
        if ($input['start_date'] > $currentDate || $input['expiry_date'] < $currentDate) {
            return redirect()->back()->withErrors(['expiry_date' => 'Ngày hiện tại không nằm trong khoảng thời gian của phiếu giảm giá'])->withInput();
        }

        $coupon = Coupon::findOrFail($id);
        $coupon->update($input);
        return redirect()->route("admin.coupons.list")->with('success', 'sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Coupon::find($id);


        if ($posts->delete($id)) {
            return redirect()->route('admin.coupons.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.coupons.list',)->with('error', 'Lỗi');
        }
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $coupons = Coupon::where('name', 'LIKE', '%' . $searchTerm . '%')->paginate(3);
        return view("admin.coupons.list", compact("coupons"));
    }
}
