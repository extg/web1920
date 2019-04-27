<?php

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

use Illuminate\Http\Request;


Route::get('/', function () {
    $news = \App\News::paginate(5);

    return view('news', ['news' => $news]);
});

Route::get('/posts/{post}', function (App\News $post) {
    return view('post', ['post' => $post]);
});

Route::get('/posts/{postId}/delete', function ($postId) {
    \App\News::destroy($postId);

    return redirect('/');
});

Route::get('/add', function () {
    return view('add');
});

Route::post('/add', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'slug' => 'required|unique:news|max:255',
        'description' => 'required|max:100',
        'content' => 'required|max:1000',
    ]);

    $post = tap(new App\News($data))->save();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
