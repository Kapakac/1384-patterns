<?php

use App\Http\Controllers\Iterator\MenuController;
use App\Http\Controllers\Strategy\Characters\CharacterController;
use App\Http\Controllers\Command\RemoteControlController;
use App\Http\Controllers\Facade\HomeTheaterController;
use App\Http\Controllers\Decorator\BeverageController;
use App\Http\Controllers\Singleton\BoilerController;
use App\Http\Controllers\Observer\OrderController;
use App\Http\Controllers\Template\DrinkController;
use App\Http\Controllers\Adapter\BirdController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{character}/{weapon}', [CharacterController::class, 'show']);

Route::get('/orders', [OrderController::class, 'index']);

Route::get('/beverages', [BeverageController::class, 'index']);

Route::get('/boilers', [BoilerController::class, 'index']);

Route::get('/commands', [RemoteControlController::class, 'index']);

Route::get('/birds', [BirdController::class, 'index']);

Route::get('/hometheaters', [HomeTheaterController::class, 'index']);

Route::get('/drinks', [DrinkController::class, 'index']);

Route::get('/menu/iterator', [MenuController::class, 'index']);
