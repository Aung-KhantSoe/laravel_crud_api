<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('contacts',[ContactController::class, 'contacts']);
Route::get('getContact/{id}',[ContactController::class, 'getContact']);
Route::post('updateContact/{id}',[ContactController::class, 'updateContact']);
Route::post('saveContact',[ContactController::class, 'saveContact']);
Route::delete('deleteContact/{id}',[ContactController::class, 'deleteContact']);
