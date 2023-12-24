<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuarderController;
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
});
Route::get('index', [GuarderController::class, 'index'])->name('index');
Route::get('about', [GuarderController::class, 'about'])->name('about');
Route::get('service', [GuarderController::class, 'service'])->name('service');
Route::get('gurad', [GuarderController::class, 'gurad'])->name('gurad');
Route::get('contactus', [GuarderController::class, 'contactus'])->name('contactus');
// Route::get('index', function () {
//     return view('index');
// })->name('index');

// Route::get('about', function () {
//     return view('about');
// })->name('about');

// Route::get('service', function () {
//     return view('service');
// })->name('service');

// Route::get('gurad', function () {
//     return view('gurad');
// })->name('gurad');

// Route::get('contactus', function () {
//     return view('contactus');
// })->name('contactus');
