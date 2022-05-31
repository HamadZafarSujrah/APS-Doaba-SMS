<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdmissionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('index');
});
Route::view('/profile','enrollement.profile');
//Route::view('/dashboard','dashboard');
// Route::view('/enrollment','enrollement_record');
Route::get('/login',[MainController::class,'login'])->name('auth.login');
Route::get('/register',[MainController::class,'register'])->name('auth.register');
Route::post('/save',[MainController::class,'save'])->name('auth.save');
Route::post('/check',[MainController::class,'check'])->name('auth.check');
Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[MainController::class,'logout'])->name('auth.logout');

// This secssion will be used for addmission


Route::get('/admission',[AdmissionController::class,'admission'])->name('admission');
Route::post('/admission',[AdmissionController::class,'save']);

Route::get('/enrollement',[AdmissionController::class,'fetch_data'])->name('enrollemrnt');
Route::get('/profile/{id}',[AdmissionController::class,'profile_data'])->name('profile');
Route::get('/edit_student/{id}',[AdmissionController::class,'edit_data'])->name('edit');
Route::post('/update_record/{id}',[AdmissionController::class,'update_record'])->name('update');
Route::get('/delete_student/{id}',[AdmissionController::class,'delete_record'])->name('delete');
Route::view('/hiring','Faculty.teacher_hiring');  


