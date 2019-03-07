<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5'
        ]);
        $categories = new Category();
        $categories->name = $request->input('name');
        $categories->save();
        return redirect()->route('admin.categories.index')->with('info', 'Thêm mới danh mục, Tên mới là: ' . $request->input('name'));
    }

    public function edit($id)
    {
        $categories = Category::find($id)->toArray();
        return view('admin.categories.edit', compact('categories'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5'
        ]);
        $categories = Category::find($request->id);
        $categories->name = $request->input('name');

        $categories->save();
        return redirect()->route('admin.categories.index')->with('info', 'Chỉnh sửa danh mục, Tên mới là: ' . $request->input('name'));
    }

    public function delete($id)
    {
        $categories = Category::find($id)->delete();
        return redirect()->route('admin.categories.index')->with('info', 'Xóa danh mục thành công!');
    }

}
