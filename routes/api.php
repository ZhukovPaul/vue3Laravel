<?php

use App\Http\Controllers\ApiMainPageBannerController;
use App\Http\Controllers\ApiNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WebFormController;
use App\Models\MainPageBanner;
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

Route::apiResource("banners",ApiMainPageBannerController::class);
Route::apiResource("news",ApiNewsController::class);
Route::apiResource("forms",WebFormController::class);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
