<?php


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ebook/index', 'EbookController@index');
//Route::get('/ebook/create', 'EbookController@create');
Route::resource('/ebook', 'EbookController');
//Route::put('/ebook/{{$kd_buku}}/edit', 'EbookController@edit');
//Route::get('/ebook/{{$kd_buku}}/update', 'EbookController@update');
Route::get('/ebook/10/Matematika', 'FileEbookController@matematika10');
Route::get('/ebook/10/kimia', 'FileEbookController@kimia10');
Route::get('/ebook/11/fisika', 'FileEbookController@fisika11');
Route::get('/ebook/12/biologi', 'FileEbookController@biologi12');
Route::get('/ebook/12/english', 'FileEbookController@english12');

Route::resource('video','VideoController');

Route::get('/video/10/matematika', 'MapelVideoController@matematika10');
Route::get('/video/10/babmath', 'MathController@Bab1');
Route::get('/video/10/ListBabMath', 'MathController@Bab1');