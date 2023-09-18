<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ViewController;

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
Route::get('/',[ViewController::class,'home']);
Route::get('/obat-view',[ObatController::class,'index_obat_tampil']);
Route::get('/obat-add',[ObatController::class,'index_obat_add']);
Route::get('/obat-edit/{id}',[ObatController::class,'index_obat_edit']);

//fungsi
Route::get('/add',[ObatController::class,'add_obat']);
Route::get('/edit',[ObatController::class,'edit_obat']);
Route::get('/delete/{id}',[ObatController::class,'del_obat']);

Route::get('/jual-view',[TransaksiController::class,'index_jual_tampil']);
Route::get('/jual-add',[TransaksiController::class,'index_jual_add']);
Route::get('/jual-edit/{id}',[TransaksiController::class,'index_jual_edit']);

//fungsi
Route::get('/add2',[TransaksiController::class,'add_jual']);
Route::get('/edit2',[TransaksiController::class,'edit_jual']);
Route::get('/del2/{id}',[TransaksiController::class,'del_jual']);





