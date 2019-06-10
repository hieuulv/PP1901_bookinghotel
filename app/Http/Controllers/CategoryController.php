<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index_category()
    {
        $categories = Category::all();
        return view('admin.category.index_category', compact('categories'));
    }

    //ADD CATEGORIES
    public function create()
    {
        return view('admin.category.add');
    }

    public function add(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $categories->save();
        return view('admin.category.add', compact('categories'));
    }


    //EDIT CATEGORIES
    public function update($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->name = $request->get('name');
        $categories->save();
        return view('admin.category.edit', compact('categories'));
    }

    public function remove($id){
        $categories = Category::destroy($id);
        return redirect('admin/category');
    }

}
