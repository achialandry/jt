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
    return view('index');
});

Route::get('/projects', 'JtabcController@projects')->name('home');

//routes for contact form
Route::get('/contacts', 'ContactUsController@create')->name('contact.create');
Route::post('/contacts', 'ContactUsController@store')->name('contact.store');

//routes for client authentication
Auth::routes();

//routes for client back-end
Route::get('/home', 'HomeController@index')->name('home');

//File upload routes
Route::get('fileupload',['as'=>'file.upload','uses'=>'FileUploadController@fileUpload']);

Route::post('fileupload',['as'=>'file.upload.post','uses'=>'FileUploadController@fileUploadPost']);
