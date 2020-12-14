<?php

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

Route::get('/', [\App\Http\Controllers\Home::class, 'index']);
Route::get('/regulamento', [\App\Http\Controllers\Home::class, 'regulamento']);

Route::get('/messages', [\App\Http\Controllers\MessagesController::class, 'showall']);
Route::get('/message/add', [\App\Http\Controllers\MessagesController::class, 'create']);
Route::post('/message/add', [\App\Http\Controllers\MessagesController::class, 'store']);
Route::get('/message/show/{messageid}', [\App\Http\Controllers\MessagesController::class, 'show']);
Route::get('/message/fortalecer/{messageid}', [\App\Http\Controllers\MessagesController::class, 'empower']);

Route::get('/meu-perfil', [\App\Http\Controllers\ProfileController::class, 'index']);


Route::get('/sohvai', [\App\Http\Controllers\Jantar::class, 'disparo']);


require __DIR__.'/auth.php';
