<?php

use App\Http\Controllers\PersonagemController;
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

Route::get('/', function () {
    return view('welcome');

});

Route::get('/criar',[PersonagemController::class,'create']);

Route::post('/criar',[PersonagemController::class,'store'])->name('cadastrar_personagems');

Route::get('/ver/{id}',[PersonagemController::class,'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
