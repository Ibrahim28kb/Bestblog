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

Route::get('/','pagesController@index');
Route::get('/about','pagesController@about');
Route::get('/services','pagesController@services');


route::get('/posts','PostsController@index')->name('posts.index');


route::get('/posts/create','PostsController@create')->name('posts.create');
route::post('/posts','PostsController@store')->name('posts.store');
route::get('/posts/{id}','PostsController@show')->name('posts.show');

route::get('/posts/{id}/edit','PostsController@edit')->name('posts.edit');
route::put('/posts/{id}','PostsController@update')->name('posts.update');

route::delete('/posts/{id}','PostsController@destroy')->name('posts.destroy');








// Route::get('/', function () {
//     return "<h1>Home Page </h1>";
//     //return "Welcom";
//     //dd("ddddddddddd");
//         //return view("welcome ");
// });

// Route::get('/', function () {
//     return "<h1>Home Page </h1>";
// });
 
// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });

// Route::get('/posts/{id}/{author}', function ($id, $author) {
//     return "The post id " . $id . ' has author name ' .$author ;
// });




 

 
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
