<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id','Desc')->paginate(10);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.posts.create',compact('categories','users'));

       
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // dd($request);
        $posts = Post::create($request->all());

        $file_name = time().'.'.$request->image->extension();

        $upload = $request->image->move(public_path('images/posts/'),$file_name);
        if($upload){
            $posts->image = "/images/posts/".$file_name;
        }

        $posts->save();
    

        return redirect()->route('backendposts.index');

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
        $post = Post::find($id);
        $categories = Category::all();
        $users = User::all();

        return view('admin.posts.edit',compact('post','categories','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // echo "<h1>$id</h1>";
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('backendposts.index');
    }
}
