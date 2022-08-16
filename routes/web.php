<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BettingAppController;
use App\Http\Controllers\MultiplicationController;

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

Route::get('/', [Controller::class, 'welcome']);

Route::get('/betting-app', [BettingAppController::class, 'betting_app']);

Route::get('/multiplication', [MultiplicationController::class, 'multiplication']);
