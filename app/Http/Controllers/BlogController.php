<?php

namespace App\Http\Controllers;

use App\Models\backend\BlogCategory;
use App\Models\Blog;
use Illuminate\Http\Request;
use function Livewire\Features\SupportTesting\id;


class BlogController extends Controller
{
    protected $blogs =[], $blog;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blog.index',[
            'blogs' => Blog::all(),
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create',[
            'blogCategories'=>BlogCategory::where('status',1)->get(),
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::saveBlogs($request);
        return back()->with('success','Blog  created successfully');
        //
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
        return view('backend.blog.edit',[
            'blogCategories' => BlogCategory::where('status',1)->get(),
            'blog' =>Blog::find($id)
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::saveBlogs($request,$id);
        return redirect()->route('blog.index')->with('success','Blog updated successfully');
        //
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->blog = Blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return back()->with('success','Blog deleted Successfully');
        //
    }
}
