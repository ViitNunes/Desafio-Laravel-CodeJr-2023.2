<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\http\Controllers\UserController; 
use App\http\Controllers\OwnerController;
use App\http\Controllers\EmailController;
use App\http\Controllers\ConsultationController;
use App\http\Controllers\PdfController;
use App\mail\EmailParaProprietario;

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

//Users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Pets
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');
Route::post('/pets', [PetController::class, 'store'])->name('pets.store');
Route::put('/pets/{pet}', [PetController::class, 'update'])->name('pets.update');
Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');

//Owners
Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
Route::get('/owners/{owner}/edit', [OwnerController::class, 'edit'])->name('owners.edit');
Route::get('/owners/{owner}', [OwnerController::class, 'show'])->name('owners.show');
Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
Route::put('/owners/{owner}', [OwnerController::class, 'update'])->name('owners.update');
Route::delete('/owners/{owner}', [OwnerController::class, 'destroy'])->name('owners.destroy');

//Consultations
Route::get('/consultations', [ConsultationController::class, 'index'])->name('consultations.index');
Route::get('/consultations/create', [ConsultationController::class, 'create'])->name('consultations.create');
Route::get('/consultations/{consultation}/edit', [ConsultationController::class, 'edit'])->name('consultations.edit');
Route::get('/consultations/{consultation}', [ConsultationController::class, 'show'])->name('consultations.show');
Route::post('/consultations', [ConsultationController::class, 'store'])->name('consultations.store');
Route::put('/consultations/{consultation}', [ConsultationController::class, 'update'])->name('consultations.update');
Route::delete('/consultations/{consultation}', [ConsultationController::class, 'destroy'])->name('consultations.destroy');


Route::get('/email', [EmailController::class, 'index'])->name('email.index');
Route::post('/email', [EmailController::class, 'store'])->name('email.store');

Route::get('/pdf', [PdfController::class, 'geraPdf'])->name('pdf.gera');

// Route::get('/mostra', function () {
//     return new \App\mail\EmailParaProprietario(
//         assunto:'assunto do email',
//         mensagem: 'mensagem (corpo) email'
//     );
// });


require __DIR__.'/auth.php';
