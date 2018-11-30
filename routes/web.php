<?php
// Home Page Route
Route::get('/', 'HomeController@index'); // home page view
Route::get("/view-all/{slug}", 'CategoryController@index');  // home page view
Route::get("/{subcategory}", 'SubcategoryController@index')->name('subcategory');  // home page view
Route::get("/{subcategory}/{post}", 'PostController@index')->name('post');  // home page view
