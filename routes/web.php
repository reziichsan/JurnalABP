<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReziController;

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
 
Route::get('/tokoobat', 'TokoobatController@index');
Route::get('/tokoobat/tambah', 'TokoobatController@tambah');
Route::post('/tokoobat', 'TokoobatController@');
Route::get('/tokoobat/edit/{Kode}', 'TokoobatController@edit');
Route::get('/tokoobat/hapus/{Kode}', 'TokoobatController@delete');