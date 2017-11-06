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
//文章列表页
Route::get('/posts','PostController@index');
//文章详情页面 绑定模型posts
Route::get('/posts/{post}','PostController@show');
//文章创建页面
Route::get('/create','PostController@create');
Route::post('/posts','PostController@store');
//文章编辑修改页面
Route::get('/posts/{post}/edit','PostController@edit');
Route::put('/posts/{post}','PostController@update');
//文章删除页面
Route::get('/posts/{post}/delete','PostController@delete');
//图片上传
Route::post('posts/image/upload','PostController@imageUpload');


//登录
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');

//退出
Route::get('/logout','LoginController@logout');

//注册
Route::get('/register','RgisterController@index');
Route:post('/register','RgisterController@register');
