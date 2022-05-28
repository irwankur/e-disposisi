<?php

use Illuminate\Support\Facades\Route;

use App\User;
use App\Http\Controllers\LoginController;

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


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', 'LoginController@authenticate');

Route::get('/dashboard', 'DashboardController@index');


Route::get('/pengguna', 'PenggunaController@index');

Route::get('/tambah_pengguna', 'PenggunaController@tambah');

Route::post('/tambah_pengguna', 'PenggunaController@tambah_aksi');

Route::get('/ubah_pengguna/{user:id}', 'PenggunaController@ubah');

// Route::get('/dashboard', function () {
//     return view('kasubag.dashboard');
// });