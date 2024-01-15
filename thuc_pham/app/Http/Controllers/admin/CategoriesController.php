<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|min:3|max:100|string",
        ], [
            'required' => 'This field cannot be left blank',
            'min' => ':attribute must be at least :min characters',
            'max' => ':attribute must not exceed :max characters',
        ], [
            'name' => 'Category',
        ]);

        $category = new Category;
        $category->name = $request->name;

        if ($category->save()) {
            return redirect()->route('admin.categories.create')->with('success', 'New category added successfully');
        } else {
            return redirect()->route('admin.categories.create')->with('error', 'Failed to add category')->withInput();
        }
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
        $categories = Category::findOrFail($id);
        return view('admin.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => "required|min:3|max:100|string",
        ], [
            'required' => 'This field cannot be left blank',
            'min' => ':attribute must be at least :min characters',
            'max' => ':attribute must not exceed :max characters',
        ], [
            'name' => 'Category',
        ]);
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        // Cập nhật các thuộc tính khác của danh mục tại đây

        if ($category->save()) {
            return redirect()->route('admin.categories.create')
                ->with('success', 'Cập nhật thành công thành công');
        } else {
            return redirect()->route('admin.categories.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if ($category->delete($id)) {
            return redirect()->route('admin.categories.list')
                ->with('success', 'Deleted successfully');
        } else {
            return redirect()->route('admin.categories.list',)->with('error', 'Lỗi');
        }
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $categories = Category::where('name', 'LIKE', '%' . $searchTerm . '%')->paginate(5);
        return view("admin.category.list", compact("categories"));
    }
}
