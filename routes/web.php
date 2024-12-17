<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/table', [MenuController::class,'table']);
Route::get('/tablereverse', [MenuController::class,'tablervs']);
Route::get('/menu', [MenuController::class,'menu']);
Route::get('/menu/coffe', [MenuController::class,'coffe']);
Route::get('/menu/noncoffe', [MenuController::class,'noncoffe']);
Route::get('/menu/mocktail', [MenuController::class,'mocktail']);
Route::get('/menu/tea', [MenuController::class,'tea']);
Route::get('/menu/dessert', [MenuController::class,'dessert']);
Route::get('/menu/snack', [MenuController::class,'snack']);
Route::get('/menu/main', [MenuController::class,'main']);
Route::get('/menu/about', [MenuController::class,'about']);
Route::get('/menu/team', [MenuController::class,'team']);
Route::get('/', [MenuController::class,'dashboard']);
