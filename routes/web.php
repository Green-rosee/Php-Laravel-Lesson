<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcomw');
//**********************************
Route::get('/homes', function () {
    return view('homes.index')->name('homes');
});
//------------------------------------------
/*
Route::get('/', function () {
    return view('static/home');
})->name('home');

Route::get('/about', function () {
    return view('static.about');
})->name('about');

Route::get('/contact', function () {
    return view('static.contact');
})->name('contact');

Route::post('/contact', function () {
    //dd(Request::all()); //вывести на странице
    return redirect('/contact')->withInput();
})->name('contact.post');

*/

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/about-us', [BasicController::class, 'about'])->name('about');

Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');



Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts{id}', [PostController::class, 'show'])->name('posts.one');

Route::get('/posts{id}/edit', [PostController::class, 'edit'])->name('posts.one.edit');
Route::get('/posts{id}/delete', [PostController::class, 'delete'])->name('posts.one.delete');



Route::post('/posts{id}/edit', [PostController::class, 'update'])->name('posts.edit');

/*
 *
 * */
Route::get('/users', [UserController::class, 'index'])->name('users.index');
