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

// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/', function () {
     return view('welcome');
 });
 Route::group(['middleware' => ['auth']], function () {
   Route::get('/admin', function () {
      return view('home');
   });
 });
 Route::get('profil', function () {
    return view('profil');
});
Route::get('jurusan', function () {
    return view('jurusan');
});
Route::get('fasilitas', function () {
    return view('fasilitas');
});
Route::get('gallery', function () {
    return view('gallery');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
