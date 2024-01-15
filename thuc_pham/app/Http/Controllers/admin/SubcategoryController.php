<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::with('category')->paginate(5);
        return view('admin.subcategory.list', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $sub = Subcategory::create($input);
        return  redirect()->route('admin.subcategories.create')->with('success', 'Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $subcategories = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('subcategories', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $subcategories = Subcategory::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);
        // $categories = Category::all();
        $subcategories->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('admin.subcategories.list')->with('success', 'Subcategory updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Subcategory::find($id);
        if ($category->delete($id)) {
            return redirect()->route('admin.subcategories.list')
                ->with('success', 'Deleted successfully');
        } else {
            return redirect()->route('admin.subcategories.list',)->with('error', 'Lỗi');
        }
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $categories = Subcategory::where('name', 'LIKE', '%' . $searchTerm . '%')->paginate(5);
        return view("admin.category.list", compact("categories"));
    }
}
