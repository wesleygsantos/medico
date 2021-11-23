<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\NovomedicoController;

Route::get('/', [NovomedicoController::class,'index']);
Route::get('/novomedico/create', [NovomedicoController::class,'create'])->middleware('auth');
Route::post('/novomedico', [NovomedicoController::class,'store']);
Route::delete('/novomedico/{id}',[NovomedicoController::class,'destroy'])->middleware('auth');
Route::get('/novomedico/edit/{id}',[NovomedicoController::class,'edit'])->middleware('auth');
Route::put('/novomedico/update/{id}',[NovomedicoController::class,'update'])->middleware('auth');
Route::get('/novousuario/registro',[NovomedicoController::class,'registro']);
Route::post('/novousuario', [NovomedicoController::class,'storeUsuario']);

Route::get('/dashboard',[NovomedicoController::class, 'dashboard'])->middleware('auth');
