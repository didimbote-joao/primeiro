<?php

use App\Http\Controllers\ContaController;
use App\Http\Controllers\Teste;
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

// Route::get('/', function () {
//     return view('welcome');
//     //echo "Olá mundo.";
// });

// Route::get('/', function () {
//     return view('welcome');
//     //echo "Olá mundo.";
// });


// Rotas

Route::get('/', [Teste::class, 'index'])->name('inicio');
Route::get('/servicos', [Teste::class, 'servico'])->name('servicos');

Route::get('/contactos/{name}/{apel?}', [Teste::class, 'contacto'])->name('contactos');

Route::get('/galeria/{pag}', [Teste::class, 'galeria'])->name('galeria');

// Route::get('/teste', [Teste::class, 'index']);

// Contas 
// Route::get('/index-conta', [ContaController::class, 'index'])->name('conta.index');
// Route::get('/create-conta', [ContaController::class, 'create'])->name('conta.create');
// Route::post('/store-conta', [ContaController::class, 'store'])->name('conta.store');
// Route::get('/show-conta', [ContaController::class, 'show'])->name('conta.show');
// Route::get('/edit-conta', [ContaController::class, 'edit'])->name('conta.edit');
// Route::put('/update-conta', [ContaController::class, 'update'])->name('conta.update');
// Route::delete('/destroy-conta', [ContaController::class, 'destroy'])->name('conta.destroy');