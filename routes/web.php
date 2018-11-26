<?php

use Illuminate\Http\Request;

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
    return view('home');
});
/*
Route::get('akun', function() {
  return view('akun');
});
*/
Route::get('/pendaftaran', function() {
  return view('pendaftaran');
});

Route::get('/login', function(){
  return view('admin/login');
});

Route::get('/kelolaregistrasi', function()
{
  return view('admin/kelolaregistrasi');
});

Route::get('/tampilan', function()
{
  return view('layout/tampilan');
});
Route::get('/kelolanilai', function()
{
  return view('admin/kelolanilai');
});

Route::get('/masterdata', function()
{
  return view('admin/masterdata');
});

//user
Route::get('/users', 'Users\UserController@index');
Route::post('/users', 'Users\UserController@store');

Route::post('/testing', 'TestingController@store');

Route::delete('/users{nik}/delete', 'Users\UserController@delete');
Route::put('/users{nik}', 'Users\UserController@update');

// admin
Route::get('/admin', 'Admins\KelolanilaiController@index');
Route::post('/admin', 'Admins\KelolanilaiController@store');