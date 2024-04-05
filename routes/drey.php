<?php

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

Route::get('/jojo', function () {
    return
    "WOOOOOOOROROROROROROROROROROROROROROROROROROOROR
    ORORORORO....WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"
    ;
});

Route::get('/dio', function () {
    return
    'THE WOOOOOOOORRRRRRRRRLLLLLLLLDDDDD
    DDDDDOOOOOOOOOOOOOOOO'
    ;
});

Route::match(['put','patch', 'post','get'], '/levi', function(){
    return 'KEEEEEENNNNNNNNNNNYYYYYY!!!!';
});

Route::post('/mikasa', function(){
    return 'EREEEEEEEEHHHHHHHHHHHN!!!!';
});

Route::any('/anya', function(){
    return 'WWUUUUAAAAAAAAHHHHHHHHHHHHH!!!';
});

Route::get('/username', function (Request $request){
    return $request->name . ' <br> ' . $request->lastname . ' <br> ' . $request->email;
});

/*

Route::get('/myinfo', function (Request $request){

    return $request->email;
});

// http://andi-api.com/drey/username?email="andreygarcia@laverdad.edu.ph"

*/

/*

Route::get('/myinfo', function (Request $request){

    return $request->name . ' <br> ' . $request->email;
});

// http://andi-api.com/drey/username?email="andreygarcia@laverdad.edu.ph"&name="Andrey"

*/

/*

Route::get('/myinfo', function (Request $request){

    return $request->name . ' <br> ' . $request->lastname . ' <br> ' . $request->email;
});

// http://andi-api.com/drey/username?email="andreygarcia@laverdad.edu.ph"&name="Andrey"&lastname="Garcia"

*/




Route::get('/myinfo', function (Request $request){

    $name = 'Name =';
    $lastname = 'Lastname =';
    $email = 'Email =';

    return $name . $request->name . ' <br> ' . $lastname . $request->lastname . ' <br> ' . $email . $request->email;
});

// http://andi-api.com/drey/username?email=andreygarcia@laverdad.edu.ph&name=Andrey&lastname=Garcia



/*
php artisan route:list
php artisan route:list --path=drey
php artisan route:clear
*/
