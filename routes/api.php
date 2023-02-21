<?php

use App\Http\Controllers\InquiryController;
use App\Models\Inquiry;
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

Route::post('/store', [InquiryController::class, 'store']);
Route::delete('/{id}', [InquiryController::class, 'destroy']);
Route::get('/all', [InquiryController::class, 'showAll']);
Route::get('/{id}', [InquiryController::class, 'show']);