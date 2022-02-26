<?php

use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ResponseController;
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

Route::get('/', [ThreadController::class, 'index']);

Route::get('/thread/create', [ThreadController::class, 'create']);
Route::get('/thread/show/{id}', [ThreadController::class, 'show']);
Route::post('/thread', [ThreadController::class, 'store']);

Route::post('/response', [ResponseController::class, 'store'])
    ->name('response.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
