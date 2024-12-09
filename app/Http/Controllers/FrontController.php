<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class FrontController extends Controller
{
    public function blogHome()
    {
        $posts = Post::orderBy('id','DESC')->paginate(4);
        // var_dump($posts);
        return view('front.blog-home',compact('posts'));
    }

    public function blogPost($id)
    {
        $post = post::find($id);
        // var_dump($post);
        return view('front.blog-post',compact('post'));
    }
}
