<?php

use App\Http\Controllers\api\CreateID;
use App\Http\Controllers\api\user;
use App\Http\Controllers\api\Websites;
use App\Http\Controllers\api\withdraw;
use App\Http\Controllers\BankController;
use App\Http\Controllers\Notifiaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user-auth',[user::class,'check']);

Route::post('user-login',[user::class,'loginUser']);

Route::post('user-register',[user::class,'signupUser']);

Route::post('user-register-update',[user::class,'updateUser']);

Route::post('create-id',[CreateID::class,'createid']);

Route::post('imageupload',[CreateID::class,'imageUploadPost']);

Route::post('add-website',[Websites::class,'addData']);

Route::put('update-website',[Websites::class,'updateData']);

Route::delete('delete-website/{id}',[Websites::class,'delete']);

Route::get('website',[Websites::class,'showAll']);

Route::get('website/{id}',[Websites::class,'findOne']);

Route::get('create-id-notvisited',[CreateID::class,'notVisited']);

Route::get('create-id-visited',[CreateID::class,'visited']);

Route::post('create-id-accept',[CreateID::class,'accept']);

Route::post('create-id-decline',[CreateID::class,'decline']);

Route::get('myids',[CreateID::class,'myIds']);

// Route::post('add-coins',[CreateID::class,'addCoins']);

Route::get('get-coins',[CreateID::class,'getCoins']);

Route::post('coin-accept',[CreateID::class,'coinAccept']);

Route::post('coin-decline',[CreateID::class,'coinDecline']);
//coinDecline

Route::post('add-coin-request',[CreateID::class,'coinAddRequest']);

Route::get('coin-notvisited',[CreateID::class,'notCoinVisited']);

Route::get('coin-visited',[CreateID::class,'coinVisited']);


Route::get('my-notification',[Notifiaction::class,'getNotification']);

Route::post('update-password',[user::class,'updatePassword']);

Route::post('forget-password',[user::class,'forgetPassword']);

Route::post('withdraw-request',[withdraw::class,'requestCoins']);

Route::get('withdraw-request-all',[withdraw::class,'getAll']);

//bank

Route::post('bank-add',[BankController::class,'addBank']);

Route::get('bank-all',[BankController::class,'getAllData']);

Route::post('bank-update',[BankController::class,'updateBank']);

Route::get('bank-delete/{id}',[BankController::class,'deleteBank']);

Route::get('bank-find-one/{id}',[BankController::class,'findBank']);


