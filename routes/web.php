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

Route::get('/', 'Clients\HomeController@home')->name('home');
Route::get('/post/{type}', 'Clients\PostController@showPost')->name('post');

Route::get('/test', 'Clients\HomeController@test')->name('test');
Route::get('/contact', 'Clients\ContactController@showContactForm')->name('contact');
Route::post('/contact', 'Clients\ContactController@sendContactForm')->name('contact.send');

Route::get('/quotation', 'Clients\HomeController@showQuotation')->name('quotation');
Route::get('/upload-files', 'Clients\HomeController@showUploadFilesForm')->name('upload_files');
