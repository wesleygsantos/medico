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


Route::get('/areatrabalho/{id?}',function ($id = null) {

    $busca = request('busca');

    return view('areatrabalho', ['id' => $id, 'busca' => $busca]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
