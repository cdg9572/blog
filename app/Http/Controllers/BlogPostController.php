<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return BlogPost::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save_data= [
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ];    

        $creatged_blog = BlogPost::create($save_data);

        return redirect("/blog/{$creatged_blog->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {
        //
        return $blogPost;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($blog_post_id)
    {
        $blogPost = BlogPost::find($blog_post_id);
        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
