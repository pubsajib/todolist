<?php
Route::get('/', 'TodosController@index')->name('home');
Auth::routes();
Route::resource('todo', 'TodosController');
