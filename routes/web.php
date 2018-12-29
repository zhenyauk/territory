<?php
Auth::routes();

//Congragation
Route::get('/', 'CongregationController@index');
Route::get('/add', 'CongregationController@add')->name('cong-add');
Route::get('/edit', 'CongregationController@edit')->name('cong-edit');
Route::post('/adm/congrigation', 'CongregationController@store');




