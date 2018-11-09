<?php

use Illuminate\Support\Facades\Route;
use App\Banner;

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
    return view('index')->with([
        'banners' => Banner::next()->get()
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/posts')->group(function(){
    Route::post('/files/upload', 'PostController@upload')->name('posts.file.upload');
});

Route::resources([
    'posts' => 'PostController',
    'banners' => 'BannerController',
]);

