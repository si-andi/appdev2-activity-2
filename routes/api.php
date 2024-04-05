<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(){
    return 'users';
});

Route::middleware('extract.token')->group(function (){
    Route::get('/users', [UserController::class, 'index']);
    Route::patch('/users/{user}', [UserController::class, 'update']);

    Route::post('/posts', [PostController::class,'store']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
    
});




/*

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/dio', function () {
    return
    'THE WOOOOOOOORRRRRRRRRLLLLLLLLDDDDD
    DDDDDOOOOOOOOOOOOOOOO'
    ;
});

Route::get('/user', [UserController::class, 'index']);

Route::match(['put','patch', 'post','get'], '/levi', function(){
    return 'KEEEEEENNNNNNNNNNNYYYYYY!!!!';
});

*/



