<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PemasukanController;
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
    return view('login.index');
});



// Route::get('/', 'LoginController@getlogin');
// Route::post('/login/success', 'LoginController@postlogin');


// Route::get('/layout', function () {
//     return view('layout');
// });



// Route::get('daftars', ' App\Http\Controllers\DaftarController@index');
// Route::get('/listtanaman', [DaftarController::class, 'index']);
// Route::get('/', [LoginController::class, 'getlogin']);
// Route::post('/login/success', [LoginController::class, 'postlogin']);

// Route::get('/listtanaman/create', [DaftarController::class, 'create']);
// Route::get('/listtanaman', [DaftarController::class, 'store']);

Route::resource('listtanaman', DaftarController::class);
Route::resource('daftarpemesanan', PemesananController::class);
Route::resource('daftarpengeluaran', PengeluaranController::class);
Route::resource('daftarpemasukan', PemasukanController::class);