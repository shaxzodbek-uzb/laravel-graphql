<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FileController::class, 'index']);
Route::get('/file', [FileController::class, 'create']);
Route::get('/file/get-local-file', [FileController::class, 'getLocalFile'])->name('file.get-local-file');
Route::post('/file', [FileController::class, 'store'])->name('file.store');
