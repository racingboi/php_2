<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'password' => 'required',
                'address' => 'required',
                'phone' => 'required|numeric|digits:10',
                'email' => 'required|email',
                'role' => 'required',
            ],
            [
                'required' => 'The :attribute field is required.',
                'numeric' => 'The :attribute must be a number.',
                'digits' => 'The :attribute must have :digits digits.',
                'email' => 'The :attribute must be a valid email address.',
            ],
            [
                'name' => 'Name',
                'password' => 'Password',
                'address' => 'Address',
                'phone' => 'Phone',
                'email' => 'Email',
                'role' => 'Role',
            ]
        );
        $input = $request->all();

        // Map role names to numerical values
        $roleMappings = [
            'admin' => 0,
            'users' => 1,
        ];

        // Assign the numerical value to the 'role' field
        $input['role'] = $roleMappings[$request->input('role')];

        $user = User::create($input);
        return redirect()->route('admin.users.create')
            ->with('success', 'User has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.show', compact('users'));
    }

    public function Status(string $id)
    {
        $users = User::find($id);

        if ($users) {
            // Đảo ngược trạng thái
            $users->status = $users->status == 1 ? 0 : 1;
            $users->save();

            return redirect()->back()->with(['success' => 'Status update successful!']);
        }

        return redirect()->back()->with(['error' => 'User not found']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Kiểm tra sự tồn tại của người dùng
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('admin.users.list')->with(['error' => 'Người dùng không tồn tại']);
        }

        // Kiểm tra trường mật khẩu trùng khớp
        if ($request->filled('password_confirmation') && $request->password !== $request->password_confirmation) {
            return redirect()->back()->with(['error' => 'Mật khẩu xác nhận không khớp']);
        }

        // Kiểm tra trường email đã tồn tại
        $existingUser = User::where('email', $request->email)->where('id', '!=', $id)->first();
        if ($existingUser) {
            return redirect()->back()->with(['error' => 'Email đã tồn tại']);
        }

        // Cập nhật thông tin người dùng
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = ($request->role === 'admin') ? 1 : 0;

        // Kiểm tra và cập nhật mật khẩu nếu trường mật khẩu không trống
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Chuyển hướng về trang index
        return redirect()->route('admin.users.list')->with(['success' => 'Cập nhật thành công']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin.users.list', compact('user'))->with('success', 'User has successfully deleted !');
        } else {
            return redirect()->route('admin.users.list', compact('user'))->with('error', 'User not found !');
        }
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $users = User::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        return view("admin.users.list", compact("users"));
    }
}
