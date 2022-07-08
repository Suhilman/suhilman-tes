<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

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

//Route::get('/', function () {return view('welcome');});

Route::get('/',[EmployeController::class,'index'])->name('pegawai');
Route::get('/authors', 'App\Http\Controllers\AuthorsController@index');

Route::get('/tambahpegawai',[EmployeController::class,'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata',[EmployeController::class,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[EmployeController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeController::class,'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[EmployeController::class,'delete'])->name('delete');

Route::get('/exportexcel',[EmployeController::class,'exportexcel'])->name('exportexcel');