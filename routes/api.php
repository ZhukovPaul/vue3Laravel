<?php

use App\Http\Controllers\ApiMainPageBannerController;
use App\Http\Controllers\ApiNewsController;
use App\Http\Controllers\NewsController;
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

Route::resource("banners",ApiMainPageBannerController::class);
Route::resource("news",ApiNewsController::class);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
