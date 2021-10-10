<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(2);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/categories');

            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $path
            ]);

            return redirect()->route('admincategories.index')->with('message', 'Category created.');
            ;
        }
        dd('no image');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/categories');

            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $path
            ]);
            return redirect()->route('admin.categories.index')->with('message', 'Category updated with image.');
            ;
        } else {
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            return redirect()->route('admin.categories.index')->with('message', 'Category updated.');
            ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('message', 'Category Deleted.');
    }


    public function add_sub(Category $category)
    {
        return view('admin.categories.add_sub', compact('category'));
    }

    public function add_sub_store(Request $request, Category $category)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/subcategories');

            $category->sub_categories()->create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'category_id' => $category->id,
                'image' => $path
            ]);

            return redirect()->route('admin.categories.index')->with('message', 'Sub Category created.');
            ;
        }
        dd('no image');
    }
}
