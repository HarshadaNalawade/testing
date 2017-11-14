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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Admin\HomeController@index');
Route::get('/faq', 'Admin\FaqController@index');

Route::resource('/roles', 'Admin\RolesController');
Route::resource('/permissions', 'Admin\PermissionsController');
Route::resource('/faq', 'Admin\FaqController');
Route::resource('/static-pages', 'Admin\StaticPagesController');
Route::post('/static-pages/upload_content', 'Admin\StaticPagesController@upload_content');

Route::get('/about-us', function() {
    return redirect('static-pages/1');
});
Route::get('/privacy-policy', function() {
    return redirect('static-pages/2');
});
Route::get('/terms-conditions', function() {
    return redirect('static-pages/3');
});


Route::resource('/contact-us', 'Admin\ContactUsController');
Route::resource('/admin-users', 'Admin\AdminUsersController');