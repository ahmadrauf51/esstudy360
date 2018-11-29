<?php
// Home Page Route
Route::get('/', 'HomeController@index'); // home page view
Route::get("/{category}/{id}", 'CategoryController@index')->name('all_categories');  // home page view
Route::get("/web-development/angular-4-js", 'SubcategoryController@index');  // home page view
