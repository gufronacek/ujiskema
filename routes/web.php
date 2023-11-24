<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PemilihController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    Route::middleware('guest:user,pemilih')->group(function(){
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);

    });


    Route::middleware('auth:user')->group(function(){

        Route::get('/user',[MasterController::class, 'index'])->middleware('auth:user,pemilih');

        Route::get('/dasboard',[MasterController::class, 'dasboard']);

        Route::get('/admin',[MasterController::class, 'admin']);
        Route::get('/tambah/admin',[MasterController::class, 'tambah']);
        Route::post('/insert/admin',[MasterController::class, 'insert']);
        Route::get('/edit/admin/{id}',[MasterController::class, 'edit']);
        Route::get('/update/admin/{id}',[MasterController::class, 'update']);
        Route::get('/delete/admin/{id}',[MasterController::class, 'delete']);

        Route::get('/pemilihan', [PemilihController::class, 'index']);
        Route::get('/tambah/pemilihan', [PemilihController::class, 'tambah']);
        Route::post('/insert/pemilihan', [PemilihController::class, 'insert']);
        Route::get('/edit/pemilihan/{id}', [PemilihController::class, 'edit']);
        Route::post('/update/pemilihan/{id}', [PemilihController::class, 'update']);
        Route::get('/delete/pemilihan/{id}', [PemilihController::class, 'delete']);

        Route::get('/kandidat', [KandidatController::class, 'index']);
        Route::get('/tambah/kandidat', [KandidatController::class, 'tambah']);
        Route::post('/insert/kandidat', [KandidatController::class, 'insert']);
        Route::get('/edit/kandidat/{id}', [KandidatController::class, 'edit']);
        Route::post('/update/kandidat/{id}', [KandidatController::class, 'update']);
        Route::get('/delete/kandidat/{id}', [KandidatController::class, 'delete']);

        Route::get('/hasil', [HasilController::class, 'index']);
    });

    // Route::get('/user',[HasilController::class, 'index'])->middleware('auth:user,pemilih');
    // Route::get('/pemilih',[HasilController::class, 'pemilih'])->middleware('auth:user,pemilih');

Route::middleware('auth:user,pemilih')->group(function(){
    Route::get('/logout', [LoginController::class, 'logout']);

});
Route::middleware('auth:pemilih')->group(function(){
    Route::get('/vote/{id}', [HasilController::class, 'vote']);
    Route::get('/pemilih',[MasterController::class, 'pemilih'])->middleware('auth:pemilih');
});


















    // route::get('/pemilih', [MasterController::class, 'index']);


