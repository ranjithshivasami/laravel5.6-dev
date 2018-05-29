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

Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/test',function(){
      return App\Category::find(2)->posts;
  });


Route::group(['middleware' => 'auth'], function() {
    
     Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
     
    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);
    
    Route::get('/post/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);
     Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);
    
     Route::get('/post/delete/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);
    
    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);
    
    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);
    
    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);
    
    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);
    
    Route::get('/tags', [
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    
    Route::get('/tag/create', [
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    
    Route::get('/tag/edit/{id}', [
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    
     Route::get('/tag/delete/{id}', [
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);
    
    Route::post('/tag/store', [
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    
    Route::post('/tag/update/{id}', [
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    
    Route::get('/users', [
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    
    Route::get('user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    
    Route::post('user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    
    Route::get('user/edit/{id}', [
        'uses' => 'UsersController@edit',
        'as' => 'user.edit'
    ]);
    
       Route::get('user/delete/{id}', [
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);
    
    Route::post('user/update/{id}',[
        'uses' => 'UsersController@update',
        'as' => 'user.update'
    ]);
    
    Route::get('user/profile',[
       'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);
       Route::post('profile/update',[
       'uses' => 'ProfilesController@update',
        'as' => 'profile.update'
    ]);
     Route::get('user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ])->middleware('admin');
      Route::get('user/not-admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not-admin'
    ])->middleware('admin');
});

