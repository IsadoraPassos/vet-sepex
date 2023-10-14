<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\TratamentoController;
use App\Models\Consulta;
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
    return view('index');
})->name('home');

Route::resource('animais', AnimalController::class);
Route::resource('tratamentos', TratamentoController::class);
Route::resource('consultas', ConsultaController::class);

//Se não utilizar a nomenclatura padrão do resource precisa definir a rota dessa maneira:
//Route::get('/animais', [AnimalController::class, 'index'])->name('consulta.index');
