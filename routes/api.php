<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;

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

Route::get('/galleries', [GalleryController::class, 'index']);
Route::get('/galleries/{gallery}', [GalleryController::class, 'show']);

Route::get('/my-galleries/{user_id}', [GalleryController::class, 'getMyGalleries']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/auth/me', [AuthController::class, 'getMyProfile'])->middleware('auth');

Route::post('/galleries/{gallery}/comments', [CommentController::class, 'store']);
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

Route::post('/galleries', [GalleryController::class, 'store']);