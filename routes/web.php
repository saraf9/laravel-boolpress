<?php

Route::get('/', 'HomeController@getLastFivePost')->name('home');
Route::get('/category/{category_name}', 'CategoryController@getAllPostsByCategoryName')->name('postbycategory');
Route::get('/post/{id}', 'PostController@getPostById')->name('postbyId');
Route::get('/admin/post/new', 'AdminController@createNewPost')->name('createnewpost');
Route::post('/admin/post/new', 'AdminController@saveNewPost')->name('savenewpost');
