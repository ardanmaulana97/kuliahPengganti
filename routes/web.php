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
    return view('auth.login');
});

/*
Route::get('/admin', 'AdminController@index');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(["GET", "POST"], "/register", function(){
    return redirect("/login");
})->name("register"); 

Route::get('/jadwal', 'JadwalController@index');
Route::get('/jadwal/export_excel', 'JadwalController@export_excel');

Route::post('/jadwal/import_excel', 'JadwalController@import_excel');
Route::get('/laravel_google_chart', 'LaravelGoogleGraph@index');

Route::get('/matrixJadwal', 'MatrixJadwalController@index');