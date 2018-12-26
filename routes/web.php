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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@wlc')->name('home');

Route::get('/post/', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('post/{post}','PostController@show')->name('post.show');
Route::get('post/{post}/edit','PostController@edit')->name('post.edit');
Route::patch('post/{post}/edit','PostController@update')->name('post.update');
// Route::delete('post/{post}/delete', 'PostController@destroy')->name('post.destroy');
Route::get('post/{post}/delete', 'PostController@destroy')->name('post.destroy');
Route::post('post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');
Route::get('query', 'CariController@search')->name('post.result');
Route::get('/galeri/','PostController@galeri')->name('konten.galeri');
Route::get('user/{id}', 'ProfileController@profile')->name('post.profile');
Route::get('kangphoto/{user_id}', 'ProfileController@photoprofile')->name('post.pp');
Route::post('post/pesan', 'PesanController@pesan')->name('post.pesan');
Route::get('konten/filter', function(){
    return view('konten.filter');
});
//admin routes
Route::get('/register/admin', 'AdminController@create');
Route::get('/login/admin', 'AdminController@loginAdmin');
Route::post('/register/admin', 'AdminController@registerAdmin')->name('register.admin');
Route::post('/login/admin', 'AdminController@adminAuth')->name('login.admin');

//admin routes we want protected 
Route::group(['middleware'=>'auth:admin'], function(){
Route::get('/home/admin', 'AdminController@home');
Route::post('/logout/admin', 'AdminController@logout')->name('logout.admin');
});
Route::post('pesan/sukses', 'PesanController@sukses')->name('pesan.sukses');