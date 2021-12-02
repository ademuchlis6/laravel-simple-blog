<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'nama' => 'ade muchlis'
    ]);
});



Route::get('/blogs', function () {

    return view('blogs', [
        'title' => 'blogs',
        'posts' => Post::all()
    ]);
});

Route::get('/blogs/{e}', function ($e) {

    return view('blogpost', [
        'title' => 'blogpost',
        'itemPost' => Post::find($e)
    ]);
});
