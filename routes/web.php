<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);//->middleware('auth', 'verified')



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_views', [AdminController::class, 'addviews']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appoint']);

Route::get('/show_appointments', [AdminController::class, 'show_appointments']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

Route::get('/show_all_doctors', [AdminController::class, 'show_doctors']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);

Route::get('/service', [HomeController::class, 'service']);

Route::get('/doctors', [HomeController::class, 'doctors']);


Route::get('/contact', [HomeController::class, 'contact']);

