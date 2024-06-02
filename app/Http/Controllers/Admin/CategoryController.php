<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stringable;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request) {
        $validateData = $request->validated();

        $category = new Category;
        $category->name         = $validateData['name'];
        $category->slug         = Str::slug($validateData['slug']);
        $category->description  = $validateData['description'];

       if($request->hasFile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        // custom downloaded file
        $fileName = time().'.'.$ext;

        $file->move('upload/category', $fileName);
        $category->image = $fileName;
       }

       $category->meta_title = $validateData['meta_title'];
       $category->meta_keyword = $validateData['meta_keyword'];
       $category->meta_description= $validateData['meta_description'];

       $category->status= $request->status == true ? '1': '0';
       $category->save();
       return redirect()->route('category')->with('message', 'Category Added Succesfully');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id) {
        $validateData = $request->validated();

        $category = Category::findOrfail($id);

        $category->name         = $validateData['name'];
        $category->slug         = Str::slug($validateData['slug']);
        $category->description  = $validateData['description'];

       if($request->hasFile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        // custom downloaded file
        $fileName = time().'.'.$ext;

        $file->move('upload/category', $fileName);
        $category->image = $fileName;
       }

       $category->meta_title = $validateData['meta_title'];
       $category->meta_keyword = $validateData['meta_keyword'];
       $category->meta_description= $validateData['meta_description'];

       $category->status= $request->status == true ? '1': '0';
       $category->update();
       return redirect()->route('category')->with('message', 'Category Added Succesfully');
    }
}
