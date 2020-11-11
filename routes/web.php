<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CompetitionController;


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

Route::get('/', [CompetitionController::class, 'index'])->name('competition.index');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('main/dashboard');
})->name('dashboard');
