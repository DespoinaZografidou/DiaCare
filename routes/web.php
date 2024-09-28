<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/{title}',[App\Http\Controllers\ManageUsers::class,'ShowUsersByRole'])->name('users');
Route::get('/users/{title}/delete',[App\Http\Controllers\ManageUsers::class,'DeleteUser'])->name('user.delete');
Route::get('/users/{title}/create',[App\Http\Controllers\ManageUsers::class,'AddDoctors'])->name('user.doctor.create');
Route::get('/profile',[App\Http\Controllers\ProfileController::class,'ShowProfile'])->name('my.profile');
Route::get('/profile/update',[App\Http\Controllers\ProfileController::class,'UpdateProfile'])->name('my.profile.picture');
