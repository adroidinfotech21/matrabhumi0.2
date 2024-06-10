<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/register', function () {
    return view('register');
})->name('register.form');


///admin route

Route::get('/admin', function () {
    return view('admin.dashbord');
});

Route::get('/registeruser', function () {
    return view('admin.registeruser');
});

Route::get('/registeruser', [RegisterController::class, 'fetchData']);


//user register route

Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('verify-otp', function () {
    return view('verify_otp');
})->name('verify.otp.form');

Route::post('verify-otp', [RegisterController::class, 'verifyOtp'])->name('verify.otp');


//login rout










Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/verify-otp', [LoginController::class, 'showOtpForm'])->name('verify.otp.form');
// Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('verify.otp');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); // Ensure this route is protected




// 
