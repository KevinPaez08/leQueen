<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabaniaController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Route::get('cabanias', [CabaniaController::class, 'index'])->name('cabanias.index');

//Crear Registro
Route::get('cabanias/create', [CabaniaController::class, 'create'])->name('cabanias.create');
Route::post('cabanias', [CabaniaController::class, 'store'])->name('cabanias.store');

//Actualizar Registro
Route::get('cabanias/{cabania}/edit', [CabaniaController::class, 'edit'])->name('cabanias.edit');
Route::put('cabanias/{cabania}', [CabaniaController::class, 'update'])->name('cabanias.update');

//Eliminar Registro
Route::delete('cabanias/{cabania}', [CabaniaController::class, 'destroy'])->name('cabanias.destroy');



Route::get('users', [UserController::class, 'index'])->name('users.index');
//Crear Empleados
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');

//Actualizar empleados
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

//Eliminar Registro
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');