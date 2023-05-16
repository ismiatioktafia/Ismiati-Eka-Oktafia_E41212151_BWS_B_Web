<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
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

// Route::get('home', function () {
//     return view('home');
// });

//Route::resource('user', 'ManagementUserController');
Route::get('index', [ManagementUserController::class, 'index']);
Route::get('create', [ManagementUserController::class, 'create']);

Route::get('home', [HomeController::class, 'index'])->name('home');

// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/session/create', 'SessionController@create');
Route::get('/session/show', 'SessionController@show');
Route::get('/session/delete', 'SessionController@delete');

Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');