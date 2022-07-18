<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            $posts = Post::select(
                "users.name AS author",
                "posts.id",
                "posts.subject",
                "posts.image",
                "posts.content",
                "posts.created_at")
            ->join("users", "posts.user_id", "=", "users.id")
            ->get()
        ;

        return view("dash.posts.index", ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dash.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $post_image = "";
       if($request->file("image")) {
           $ext = $request->file("image")->extension();
           $post_image = time() . "." . $ext;
           $request->file("image")->move(public_path("assets/uploads/post_images/"), $post_image);
       }

       $data = [
           'subject' => $request['subject'],
           'image' => $post_image,
           'user_id' => Auth::user()->id,
           'content' => $request['content']
       ];

       if($store = Post::create($data)) {
           return redirect()->route("posts.index")->with("success", "Post created");
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $one_post = Post::select(
            "users.name AS author",
            "posts.id",
            "posts.subject",
            "posts.image",
            "posts.content",
            "posts.created_at")
            ->join("users", "posts.user_id", "=", "users.id")
            ->where("posts.id", "=", $post['id'])
            ->get();
        $one_post = json_decode($one_post, true)[0];
        return view("dash.posts.show", ["one_post" => $one_post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $one_post = Post::select(
            "users.name AS author",
            "posts.id",
            "posts.subject",
            "posts.image",
            "posts.content",
            "posts.created_at")
            ->join("users", "posts.user_id", "=", "users.id")
            ->where("posts.id", "=", $post['id'])
            ->get();
        $one_post = json_decode($one_post, true)[0];
        return view("dash.posts.edit", ["one_post" => $one_post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
