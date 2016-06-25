<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
   'as'=>'home',
   'uses'=>'PagesController@home'
]);




Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('submitpost', [
'as'=> 'post_question',
'uses'=> 'ForumController@postQuestion'
	]);

Route::group(['prefix'=> 'question'], function()

{

Route::get('post', [
'as'=> 'get_post',
'uses'=> 'ForumController@getPost'
	]);



});