<?php

use App\Http\Controllers\api\CreateID;
use App\Http\Controllers\api\user;
use App\Http\Controllers\api\Websites;
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
