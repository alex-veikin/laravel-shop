<?php

Route::get('/', 'ProductController@index')->name('home');

Route::get('search', 'ProductController@search')->name('search');

Route::group(['prefix'=>'products', 'as'=>'products.'], function (){
    Route::get('/', 'ProductController@all')->name('index');
    Route::get('{product}', 'ProductController@show')->name('show');
});

Route::group(['prefix'=>'categories', 'as'=>'categories.'], function (){
    Route::get('/', 'CategoryController@index')->name('index');
    Route::get('{category}', 'CategoryController@show')->name('show');
});
