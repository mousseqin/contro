<?php

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
    return view('welcome');
});


//use App\Http\Controllers\UserController;
//Route::get('/user', [UserController::class, 'index']);

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

//Route::match(['get', 'post'], '/', function () {
//    //
//});
//
//Route::any('/', function () {
//    //
//});

//Route::redirect('/here', '/there');
//Route::redirect('/here', '/there', 301);
//Route::permanentRedirect('/here', '/there');

//Route::view('/welcome', 'welcome');
//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});
//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//    //
//});
