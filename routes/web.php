<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\RegisterController;
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

// landing page
Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => 'guest'], function () {
    // login user
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/proceed', [LoginController::class, 'login'])->name('login-proceed');

    // register user
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register/proceed', [RegisterController::class, 'create'])->name('register-proceed');
});


Route::group(['middleware' => 'auth'], function () {
    // home for authenticaed users
    Route::get('/home', [QRCodeController::class, 'index'])->name('home');
    Route::get('/generate-qr', [QRCodeController::class, 'generate'])->name('generate');


    Route::get('/qrcode', [QRCodeController::class, 'qrcode'])->name('qrcode');
    Route::post('/generate-qr-url', [QRCodeController::class, 'url'])->name('url');
    Route::post('/generate-qr-pdf', [QRCodeController::class, 'pdf'])->name('pdf');

    // preview previous qr 
    Route::get('/preview-qr/url/{id}', [QRCodeController::class, 'preview_url'])->name('preview-qr-url');
    Route::get('/preview-qr/pdf/{id}', [QRCodeController::class, 'preview_file'])->name('preview-qr-pdf');

    //logout user
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// contact us 
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'contact'])->name('contact-us');


/// password reset
Route::get('/forget-password', [PasswordResetController::class, 'index'])->name('forget-password');
Route::post('/link_to_mail', [PasswordResetController::class, 'reset_link_to_mail'])->name('link_to_mail');
Route::get('/reset-page/{token}', [PasswordResetController::class, 'reset_page'])->name('reset-page');
Route::post('/password-reset/{token}', [PasswordResetController::class, 'password_reset'])->name('password-reset');