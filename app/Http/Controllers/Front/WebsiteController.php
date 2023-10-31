<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\backend\BlogCategory;

class WebsiteController extends Controller
{
    protected $blogs=[],$blog;
    public function home()
    {
        return view('frontend.home.home');
    }
    public function categoryBlogs($id)
    {
        return view('frontend.blogs.category-blogs',[
            'blogs' => Blog::where ('blog_category_id',$id)->where('status',1)->get()
        ]);
    }
    public function blogDetails($id)
    {
        $this->blog =Blog::find($id);
        return view('frontend.blogs.details',[
            'blog' =>$this->blog,
        ]);
    }


    //
}
