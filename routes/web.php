<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('layout.main');
});

Route::get('dashboard', [UserController::class, 'showDashboard'])->name('dashboard');

// Route::get('/register1', function () {
//     return view('register1');
// });
Route::get('/refreshpage', function () {
    return view('refreshpage');
});


Route::get('/filterbutton', function () {
    return view('filterbutton');
});

Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

Route::view('register', 'register')->name('register');

// Route::view('login', 'login')->name('login');

// Route::get('login',[UserController::class,'login'])->name('login');

Route::get('/loginpage', [UserController::class, 'loginPage'])->name('loginpage')->middleware('guest');

Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/viewuser',[UserController::class,'viewUserall'])->name('viewuser');


Route::post('/',[UserController::class,'updateUser'])->name('update');

Route::get('/updatePage/{id}',[UserController::class,'updatePage'])->name('update.page');

Route::delete('delete/{id}',[UserController::class,'deleteUser'])->name('delete');

Route::get('/updatePageA/{id}',[UserController::class,'updateApprove'])->name('update.approve');

Route::get('/updatePageD/{id}',[UserController::class,'updateDisapprove'])->name('update.disapprove');

Route::any('send-email/{id}',[UserController::class,'sendEmail'])->name('sendEmail');
// Route::any('send-email',[UserController::class,'sendEmail'])->name('sendEmail');

Route::get('search',[UserController::class,'search'])->name('search');

Route::get('index',[UserController::class,'index'])->name('index');

Route::get('filter',[UserController::class,'filter'])->name('filter');

Route::get('fetchdata',[UserController::class,'fetchdatewisedata'])->name('fetchdata');

//Gmail with Login

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);





