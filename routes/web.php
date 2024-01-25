<?php

use Illuminate\Support\Facades\Route;
/* Meus controllers */
use App\Http\Controllers\AlunoController;

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

Route::get('/editaraluno', [AlunoController::class, 'editar'])->name('aluno.editar');
Route::get('/cadastraraluno', [AlunoController::class, 'cadastro'])->name('aluno.index');
Route::get('/', function () {
    return view('index');
});
