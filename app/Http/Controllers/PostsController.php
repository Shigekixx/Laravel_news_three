<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use App\Models\Post; // Postモデルを使用するために追加

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.index', ['posts' => $posts]); // views/posts/index.blade.php を表示する
    }
    public function news(PostsRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->news = $request->news;
        $post->save();
        return redirect()->route('posts.index');

    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',['post'=>$post]);
    }
}