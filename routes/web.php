<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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
    $visits = Redis::incr('visits');
    // return view('welcome', ['visits' => $visits]);
    return view('welcome')->withVisits($visits);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-post', 'PostController@index')->name('create-post');
// Route::get('/create-post', function() {
//     return response('got vape?',200);
// })->name('create-post');
