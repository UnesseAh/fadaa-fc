<?php

use App\Http\Controllers\admin\FormationController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SessionController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});


Route::get('register', [AuthController::class, 'showRegisterPage'])->name('register');
Route::get('login', [AuthController::class, 'showLoginPage'])->name('login');
Route::post('register-submit', [AuthController::class, 'register'])->name('register.submit');
Route::post('login-submit', [AuthController::class, 'login'])->name('login.submit');

Route::get('dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// Formations
Route::resource('formations', FormationController::class);
// Sessions
Route::resource('sessions', SessionController::class);

//Services
Route::get('services',[ServiceController::class, 'index'])->name('services');
Route::get('service',[ServiceController::class, 'getServices']);
Route::post('service',[ServiceController::class, 'store'])->name('services.store');
Route::get('service/{id}',[ServiceController::class, 'show'])->name('services.show');
Route::put('service/{id}',[ServiceController::class, 'update'])->name('services.update');
Route::delete('service/{id}',[ServiceController::class, 'destroy'])->name('service.destroy');

//Etudiants
Route::get('etudiants',[StudentController::class, 'index'])->name('etudiants');
Route::get('etudiant',[StudentController::class, 'getStudents']);
Route::post('etudiant',[StudentController::class, 'store'])->name('etudiants.store');
Route::get('etudiant/{id}',[StudentController::class, 'show'])->name('etudiants.show');
Route::put('etudiant/{id}',[StudentController::class, 'update'])->name('etudiants.update');
Route::delete('etudiant/{id}',[StudentController::class, 'destroy'])->name('etudiant.destroy');




