<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        /*
        $posts = new Post();
        $posts->title = 'Factory Apple';
        $posts->anons = 'Advanced smartphone technologies';
        $posts->text = 'For the entire world';
        $posts->save();*/

        //$posts = Post::all();

        //$posts=Post::find([1,2]);

        //$posts=Post::where('title','Open Legacy')->get();

        //$posts=Post::inRandomOrder()->get();
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index')->with('posts', $posts);
    }

    public function show($id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.show')->with('post', $post);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit')->with('post', $post);
    }

    public function update($id, Request $request)
    {
        // проверка введеных данных с формы при событии кнопки
        $data = $request->validate([
            'title' => 'required|min:5',
            'anons' => 'required|min:7',
            'text' => 'required|min:10',
        ]);

        //input('name'); данные с поля формы
        $post = Post::findOrFail($id);
        //
        $post->title = $data['title'];
        $post->anons = $data['anons'];
        $post->text = $data['text'];

        $post->save();

        return redirect()->route('posts.one', $id);

    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts');
    }

}
