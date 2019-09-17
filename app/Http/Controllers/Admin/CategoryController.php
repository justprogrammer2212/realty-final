<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate('10');
        return view('admins.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admins.pages.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $category = Category::create($request->validated());

        if ($request->hasFile('image')) {
            $category->addMedia($request->image)->toMediaCollection('CategoryImage');
        }

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admins.pages.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->hasFile('image')) {
            if ($category->getFirstMedia('CategoryImage')) {
                $category->getFirstMedia('CategoryImage')->delete();
            }
            $category->addMedia($request->image)->toMediaCollection('CategoryImage');
        }

        $category->update($request->validated());

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}
