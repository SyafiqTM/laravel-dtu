<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CommentController;
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

Route::get('/comments', [CommentController::class,'index']);
Route::post('/comments', [CommentController::class,'store']);
Route::get('/comments/{comment}', [CommentController::class,'show']);
Route::put('/comments/{comment}', [CommentController::class,'update']);
Route::delete('/comments/{comment}', [CommentController::class,'destroy']);

// Route::apiResource('/comments', [CommentController::class]);
