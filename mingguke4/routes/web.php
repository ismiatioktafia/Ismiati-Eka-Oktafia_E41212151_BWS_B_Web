<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::group(['namespace'=> 'backend'], function () 
// {
//     Route::resource('dashboard' , 'DashboardController');
// });
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/upload', 'UploadController@upload')->name('upload');
Route::get('/uploud/proses', 'UploadController@proses_upload')->name('upload.proses');
Route::post('/upload/resize', 'UploadController@resize_upload')
->name('upload.resize');

Route::get('/dropzone', 'UploadController@dropzone')
->name('dropzone');
Route::post('/dropzone/store', 'UploadController@dropzone_store')
->name('dropzone.store');