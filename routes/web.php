<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Proximity\Auth\LoginController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Teacher\TeacherController;
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

Route::get('/Prox-UI', function () {
    return view('Prøxïmïtÿ.PrøxïmïtyUI');
})->name('PrøxïmïtyUI');


Route::get('/login',[LoginController::class,'index'])->name('prox-login');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/student',[StudentController::class,'index'])->name('student');
Route::get('/student-choice',[StudentController::class,'studentChoice'])->name('student-choice');
Route::get('/subject',[SubjectController::class,'index'])->name('subject');
Route::get('/payment',[PaymentController::class,'index'])->name('payment');
Route::get('/teacher',[TeacherController::class,'index'])->name('teacher');
