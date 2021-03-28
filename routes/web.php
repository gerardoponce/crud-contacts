<?php

use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::namespace('contacts')->prefix('/')->middleware('auth')->group(function () {

    $URL = 'contactos';

    Route::get("$URL", [UserController::class, 'index'])->name('contact.index');

    Route::get("$URL/crear", [UserController::class, 'create'])->name('contact.create');

    Route::post("$URL", [UserController::class, 'store'])->name('contact.store');

    Route::get("$URL/{user:id}", [UserController::class, 'show'])->name('contact.show');

    Route::get("$URL/{user:id}/editar", [UserController::class, 'edit'])->name('contact.edit');

    Route::put("$URL/{user:id}", [UserController::class, 'update'])->name('contact.update');

    Route::delete("$URL/{user:id}/eliminar", [UserController::class, 'destroy'])->name('contact.destroy');
});

require __DIR__.'/auth.php';
