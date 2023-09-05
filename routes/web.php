<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PDFController;

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

Route::get('/', [FormController::class, 'show']);

Route::get('/pdf', function () {
    return view('pdf');
});

Route::post('/', [FormController::class, 'check']);

Route::post('/verifikasi', [FormController::class, 'verify']);

Route::post('/print', [FormController::class, 'print']);

Route::get('/preview', [FormController::class, 'preview']);