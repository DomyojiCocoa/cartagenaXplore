<?php

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
    return view('welcomeCartagena');
})->name('main');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/inicio', function () {
        return view('welcomeCartagena');
    })->name('dashboard');
    Route::get('/sitios', function () {
        return view('admin.sites');
    })->name('sites');
    Route::get('/usuarios', function () {
        return view('admin.users');
    })->name('users');
});
Route::get('/servicios', function () {
    return view('services');
})->name('services');
