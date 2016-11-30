<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  $data = ['name' => 'Simon'];
  return view('home.index', $data);
});

Route::get('about', ['as' => 'about.index', function(){
  //
}]);

Route::get('posts', ['as' => 'posts.index', function(){
  //
}]);

Route::get('hot', ['as' => 'posts.hot', function(){
  //
}]);

Route::post('posts', ['as' => 'posts.store', function(){
  //
}]);

Route::get('posts/create', ['as' => 'posts.create', function(){
  //
}]);

Route::delete('posts/{id}', ['as' => 'posts.destroy', function(){
  //
}]);

Route::patch('posts/{id}', ['as' => 'posts.update', function(){
  //
}]);

Route::get('posts/{id}', ['as' => 'posts.show', function(){
  //
}]);

Route::post('posts/{id}/comment', ['as' => 'posts.comment', function(){
  //
}]);

Route::get('posts/{id}/edit', ['as' => 'posts.edit', function(){
  //
}]);

Route::get('random', ['as' => 'posts.random', function(){
  //
}]);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
