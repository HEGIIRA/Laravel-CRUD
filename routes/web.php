<?php

use App\Http\Controllers\BuahController;
use App\Http\Controllers\EnhaController;
use App\Http\Controllers\NamaController;
use App\Models\Enha;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(EnhaController::class)->group(function(){
    Route::get('/enha', 'index')->name('enha.index');
    Route::get('/enha/create', 'create')->name('enha.create');
    Route::post('/enha/store', 'store')->name('enha.store');
    Route::get('/enha/show/{id}', 'show')->name('enha.show');
    Route::get('/enha/edit/{id}', 'edit')->name('enha.edit');
    Route::put('/enha/update/{id}', 'update')->name('enha.update');
    Route::get('/enha/delete/{id}', 'destroy')->name('enha.destroy');
});

