<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Facebook;
use App\Http\Controllers\Instagram;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/facebook', [Facebook::class, 'index'])->name('facebook');
Route::post('/facebook', [Facebook::class, 'create'])->name("create");

Route::get('/instagram', [Instagram::class, 'index'])->name('instagram');
Route::post('/instagram', [Instagram::class, 'createI'])->name("createI");

Route::get('/usuarios', [UserController::class, 'listarUsuarios'])->name('listUsuarios');