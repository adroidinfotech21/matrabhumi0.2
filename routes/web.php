<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyController;


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

Route::get('/terms_&_condition', function () {
    return view('terms_&_condition');
});

Route::get('privacy_policies', function () {
    return view('privacy_policies');
});

Route::get('legal_title_check', function () {
    return view('legal_title_check');
});

Route::get('property_lawyers', function () {
    return view('property_lawyers');
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
Route::get('/AdvertisementBlock1', function () {
    return view('admin.Add_block');
});

Route::get('/AdvertisementBlock2', function () {
    return view('admin.Add_block2');
});

Route::get('/AdvertisementBlock3', function () {
    return view('admin.Add_block3');
});

Route::get('/AdvertisementBlock4', function () {
    return view('admin.Add_block4');
});

Route::get('/AdvertisementBlock5', function () {
    return view('admin.Add_block5');
});

Route::get('/AdvertisementBlock6', function () {
    return view('admin.Add_block6');
});

Route::get('/AdvertisementBlock7', function () {
    return view('admin.Add_block7');
});

Route::get('/AdvertisementBlock8', function () {
    return view('admin.Add_block8');
});

Route::get('/AdvertisementBlock9', function () {
    return view('admin.Add_block9');
});

Route::get('/AdvertisementBlock10', function () {
    return view('admin.Add_block10');
});


Route::get('/allproperty', function () {
    return view('admin.allproperty');
});
Route::get('/pandingproperty', function () {
    return view('admin.pandingproperty');
});

Route::get('/registeruser', [RegisterController::class, 'fetchData']);


//user register route

Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('verify-otp', function () {
    return view('verify_otp');
})->name('verify.otp.form');

Route::post('verify-otp', [RegisterController::class, 'verifyOtp'])->name('verify.otp');


//login rout


Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route for sending the OTP
Route::post('/send-otp', [LoginController::class, 'sendOtp'])->name('send.otp');

// Route for displaying the OTP verification form
Route::get('/verify-login-otp', function () {
    return view('verify-login-otp'); // Ensure you have a verify-login-otp.blade.php file in your resources/views directory
})->name('verify.otp.login');

// Route for verifying the OTP
Route::post('/verify-login-otp', [LoginController::class, 'verifyOtp'])->name('verify.otp.login.new');


Route::get('/user-profile', function () {
    return view('user-profile'); // Ensure you have a user-profile.blade.php file
})->name('user.profile');
//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//add property module

Route::get('/addproperty', function () {
    return view('addproperty.addproperty');
});
// routes/web.php



Route::get('/addproperty', [PropertyController::class, 'propertyTypeForm'])->name('property.form');
Route::post('/addproperty', [PropertyController::class, 'filterData']);
Route::post('/addproperty', [PropertyController::class, 'registerProperty']);

// Route::post('/addproperty', [PropertyController::class, 'propertyAddSubmit'])->name('submit.property');

