<?php

use App\Http\Controllers\MeowController;
use Illuminate\Support\Facades\Route;

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
    return redirect('meow-list');
})->name('home');

Route::get('/create-meow', function () {
    return view('new-meow');
});

Route::post('/create-meow', [MeowController::class, 'store']);
Route::get('/meow-list', [MeowController::class, 'list']);
