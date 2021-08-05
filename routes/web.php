<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumesController;
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

Route::get('/fruits', [FruitController::class, 'index'])->name('fruit');

Route::get('/legumes', [LegumesController::class, 'index'])->name('legumes');

Route::get('/legumes/{id}/show', [LegumesController::class, 'show'])->name('showleg');

Route::get('/fruit/{id}/show', [FruitController::class, 'show'])->name('showfruit');


