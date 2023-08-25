<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryFormRequest;
 use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();
        $category = new Category;
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];

        $uploadPath = 'uploads/category/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/category/', $filename);
            $category->image =  $uploadPath.$filename;
        }

        $category->save();

        return redirect('admin/category')->with('message', 'Category added successfully');

    }
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }


    public function update(CategoryFormRequest $request, $category)
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($category);



        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {

        $uploadPath = 'uploads/category/';
        $path='uploads/category/'. $category->image;


        if(File::exists( $path)){
          File::delete( $path);
        }
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/category/', $filename);
            $category->image =  $uploadPath.$filename;
        }

        $category->update();

        return redirect('admin/category')->with('message', 'Category update successfully');

    }

}
