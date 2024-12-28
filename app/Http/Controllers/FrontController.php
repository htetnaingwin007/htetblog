<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;



class FrontController extends Controller
{
    public function blogHome()
    {
        // $posts = Post::orderBy('id','DESC')->skip(1)->paginate(4);
        $latest_post = Post::orderBy('id','DESC')->limit(1)->first();
        $posts = Post::where('id', '!=',$latest_post->id)->orderBy('id','DESC')->paginate(4);
       

        // var_dump($posts);
        return view('front.blog-home',compact('posts','latest_post'));
    }

    public function blogPost($id)
    {
        $post = post::find($id);
        // var_dump($post);
        return view('front.blog-post',compact('post'));
    }

    public function postCategory($category_id){
        $posts = Post::Where('category_id',$category_id)->orderBy('id','DESC')->paginate(8);
        return view('front.post-category',compact('posts'));
    }
}

