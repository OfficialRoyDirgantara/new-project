<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

// Index Page


// Navbar
/*
Route::get('/', function () {
    return view('/aplikasi/index');
});

Route::get('/information', function () {
    return view('/aplikasi/information');
});

Route::get('/news', function () {
    return view('/aplikasi/news');
});

Route::get('/login', function () {
    return view('/aplikasi/login');
});

*/

// Controller
Route::get('/',[PagesController::class,'home']);
// Route::get('/information',[PagesController::class,'information']);
// login
Route::get('/login',[PagesController::class,'login']);





// news
Route::get('/news',[NewsController::class,'index']);
Route::get('/news/{news}',[NewsController::class,'show']);

// admin
Route::get('/admin',[AdminController::class,'index']);
// Information
Route::get('/information',[InformationController::class,'index']);