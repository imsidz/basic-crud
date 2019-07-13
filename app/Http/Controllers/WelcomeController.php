<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class WelcomeController extends Controller
{
    public function index ()
    {   
        $blogs = Blog::get();
        return view('home.vishal', compact('blogs'));
    }

    public function post(Request $req)
    {   
        $blog = new Blog;
        $blog->title = $req->title;
        $blog->description = $req->description;
        $blog->save();
        
        return back();
    }

    public function editForm($id)
    {   
        $blog = Blog::where('id', $id)->firstorfail();
        
        return view('home.edit', compact('blog'));
    }

    public function editPost(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return back();
    }

    public function deletePost($id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->delete();

        return back();
    }
}
