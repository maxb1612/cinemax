<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Auth;
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

Route::name('user.')->group(function (){
    Route::get('/private', [PrivateController::class, 'show'])->middleware('auth')->name('private');
    Route::post('/privateUpdUsr', [PrivateController::class, 'updateUser'])->name('updateUser');
    Route::post('/privateUpdPassword', [PrivateController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/login', function () {
        if(Auth::check()){
            return redirect(\route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect(\route('index'));
    })->name('logout');

    Route::get('signup', function () {
        return view('signup');
    })->name('signup');

    Route::post('signup', [SignupController::class, 'save']);
});

Route::get('/', [MovieController::class, 'index'])->name('index');

Route::get('/movie/{id}', [MovieController::class, 'movie'])->name('movie');

Route::get('/seats', [TicketsController::class, 'getSeats'])->name('getSeats');

Route::post('/buy_tickets', [TicketsController::class, 'buyTickets'])->name('buyTickets');

Route::get('/tickets', [TicketsController::class, 'showTickets'])->name('tickets');


