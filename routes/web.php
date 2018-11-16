<?php

use Illuminate\Support\Facades\Route;
use App\Banner;
use App\Price;
use Carbon\Carbon;
use App\Classification;
use App\Currency;
use App\Http\Controllers\RoleController;
use App\Solution;

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
        'banners' => Banner::next()->get(),
        'classifications' => Classification::with(['prices' => function($query){
            $query->orderBy('created_at', 'DESC')->limit(3);
        }])->get(),
        'currencies' => Currency::with(['exchanges' => function($query){
            $query->orderBy('created_at', 'DESC')->limit(3);
        }])->get(),
        'solutions' => Solution::all()
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/posts')->group(function(){
    Route::post('/files/upload', 'PostController@upload')->name('posts.file.upload');
});

Route::resources([
    'roles' => 'RoleController',
    'privileges' => 'PrivilegeController',
    'posts' => 'PostController',
    'banners' => 'BannerController',
    'prices' => 'PriceController',
    'exchanges' => 'ExchangeController',
    'users' => 'UserController',
]);

