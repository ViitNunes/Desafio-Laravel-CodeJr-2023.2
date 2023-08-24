<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

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
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Pets
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');
Route::post('/pets', [PetController::class, 'store'])->name('pets.store');
Route::put('/pets/{pet}', [PetController::class, 'update'])->name('pets.update');
Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');

require __DIR__.'/auth.php';
