<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        /*$posts = new Post();
        $posts->title = 'Open Description';
        $posts->anons = 'Open is Theme';
        $posts->text = 'Open Legacy';
        $posts->save();*/

        //$posts = Post::all();

        //$posts=Post::find([1,2]);

        //$posts=Post::where('title','Open Legacy')->get();

        //$posts=Post::inRandomOrder()->get();
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index')->with('posts', $posts);
    }
}
