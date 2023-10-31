<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\backend\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blogCategory.index',[
            'blogCategories' => BlogCategory::all()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogCategory.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BlogCategory::updateOrCreateBlogCategory($request);
        return back()->with('success','Blog category created successfully');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'hi';
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.blogCategory.edit',[
            'blogCategory' => BlogCategory::find($id)
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BlogCategory::updateOrCreateBlogCategory($request,$id);
        return redirect()->route('blogCategory.index')->with('success','Blog category created successfully');
        //
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::find($id)->delete();
        return back()->with('success','Blog category deleted Successfully');
        //
    }
}
