<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class UBlogController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('created_at', 'DESC')->get();
        return view('dashboard.blog', compact('blog'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('dashboard.showblog', compact('blog'));
    }
}
