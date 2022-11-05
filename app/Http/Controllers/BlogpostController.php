<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::join('categories', 'blogs.id_category', 'categories.id_category')->get();
        return view('blogpost/listblog', [
            'pageTitle' => 'List Blog',
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = Blog::join('categories', 'blogs.id_category', 'categories.id_category')->get();
        $category = Category::all();
        return view('blogpost.create', [
            'pageTitle' => 'Create New Blog',
            'blogs' => $blogs,
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogpostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->id_category = $request->id_category;
        $blog->author = $request->user()->name;
        $blog->content = $request->content;
        $blog->images = "default.jpg";
        $blog->save();

        if(!is_null($blog)) {
            return back()->with("success", "Success! Post created");
        }

        else {
            return back()->with("failed", "Failed! Post not created");
        }
    }

    public function upload(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('storage/images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::join('categories', 'blogs.id_category', 'categories.id_category')->find($id);
        $category = Category::all();
        return view ('blogpost.edit', [
            'pageTitle' => 'Edit Blog Post',
            'blog' => $blog,
            'category' => $category,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogpostRequest  $request
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->id_category = $request->id_category;
        $blog->author = $request->user()->name;
        $blog->content = $request->content;
        $blog->images = "default.jpg";
        $blog->update();

        if(!is_null($blog->content)){
            $blog->content = "empty";
        }

        if(!is_null($blog)) {
            return back()->with("success", "Success! Post Updated");
        }

        else {
            return back()->with("failed", "Failed! Post not updated");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blogpost)
    {
        $blogpost->delete();
        return redirect('blogpost');
    }
}
