<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\OfferController;
use App\Http\Controllers\Auth\PassbookController;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\otpvarifyController;
use Illuminate\Support\Facades\Log;

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
    Session::flush();
    return view('welcome');
});

Route::get('/dashboard', function () {
    Log::debug('from web dashboard '.Session::get('phone'));
    if (Session::get('phone')!=null) {
        # code...
        return view('dashboard');
    }
    else
    {
        return redirect('login');
    }
})->name('dashboard');

require __DIR__.'/auth.php';

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('loginform', [LoginController::class, 'store'])->name('loginform');

Route::get('registerform', [RegisteredUserController::class, 'create'])->name('registerform');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('terms', [HomeController::class, 'terms'])->name('terms');
Route::get('refer-and-earn', [HomeController::class, 'refer'])->name('refer');
Route::get('my-profile', [HomeController::class, 'myprofile'])->name('profile');

Route::get('account-information', [LoginController::class, 'formid'])->name('account-information');

Route::get('createidFairexch9', [LoginController::class, 'createidFairexch9'])->name('create-id');
Route::get('goexchange247', [LoginController::class, 'goexchange247'])->name('create-id');
Route::get('exchange247', [LoginController::class, 'exchange247'])->name('create-id');
Route::get('silverexch', [LoginController::class, 'silverexch'])->name('create-id');
Route::get('lotusbook247', [LoginController::class, 'lotusbook247'])->name('create-id');
Route::get('masterexc', [LoginController::class, 'masterexc'])->name('create-id');


Route::get('payment-request', [PaymentController::class, 'index'])->name('payment-request');
Route::get('payment', [PaymentController::class, 'create'])->name('payment');
Route::get('passbook', [PassbookController::class,'index'])->name('passbook');
Route::get('offer', [OfferController::class,'index'])->name('offers');


Route::get('userlogin', [LoginController::class, 'getlogin'])->name('userlogin');
Route::post('userloginform', [LoginController::class, 'login'])->name('userloginform');

Route::get('otp-login', [otpvarifyController::class, 'index'])->name('otp-login');
Route::get('varify', [otpvarifyController::class, 'varify_otp'])->name('varify');


Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change.password', [ChangePasswordController::class, 'store'])->name('change.password');

Route::get('create-account', [PaymentController::class ,'index'])->name('create-account');
Route::post('createfrom', [PaymentController::class ,'store'])->name('createfrom');
Route::get('withdraw', [PaymentController::class, 'withdraw'])->name('withdraw');

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');


Route::get('payment-io-page', [ PaymentController::class, 'paymentio' ])->name('payment.method');
Route::post('payment-io-page', [ PaymentController::class, 'paymentToAdmin']);
Route::get('payment-successfull', [ PaymentController::class, 'successfull' ]);

Route::post('withdrawpaytm', [ PaymentController::class, 'withdrawpaytm' ]);
Route::post('withdrawgooglepay', [ PaymentController::class, 'withdrawgooglepay' ]);
Route::post('withdrawphonepe', [ PaymentController::class, 'withdrawphonepe' ]);
Route::post('withdrawpaytmupi', [ PaymentController::class, 'withdrawpaytmupi' ]);
Route::post('withdrawupi', [ PaymentController::class, 'withdrawupi' ]);

Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');


Route::get('/notification',function(){
    return view('auth.notification');
});


Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotificaition']);

// admin routes


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
        Route::namespace('Auth')->middleware('guest:admin')->group(function(){
// login routes
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('adminlogin');

Route::get('opt-sent', [LoginController::class ,'otp']);
});
Route::middleware('admin')->group(function(){
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
});
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
// Route::get('send-sms-notification', [LoginController::class, 'sendSmsNotificaition']);

});
