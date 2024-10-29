<?php

use App\Http\Controllers\ViewAdminController;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/dashboard', function () {
        if (Auth::user()->hasRole('Administrator')) {
            return redirect()->route('adminStadistics');
        }else{
            return redirect()->route('main');
        }
    });
    Route::prefix('/admin')->middleware('can:admin')->group(function () {
        Route::get('/', function () {
            return redirect()->route('adminStadistics');
        });
        Route::get('/estadisticas', [ViewAdminController::class, 'estadistics'])->name('adminStadistics');
        Route::get('/usuarios', [ViewAdminController::class, 'users'])->name('adminUsers');
        Route::get('/actividades', [ViewAdminController::class, 'activities'])->name('adminActivities');
        Route::get('/eventos', [ViewAdminController::class, 'events'])->name('adminEvents');
        Route::get('/sitios', [ViewAdminController::class, 'sites'])->name('adminSites');
    });
    Route::prefix('/planes')->group(function () {
        Route::get('/{id}', function ($id) {
            return view('schedule', ['id' => $id]);
        })->name('planBuilding');
    });
    // Route::prefix('/planes')->group(function () {
    //     Route::get('/calendario', function () {
    //         return view('schedule');
    //     })->name('schedule');
    // });
});

Route::get('/sitio/{id}', function ($id) {
    return view('siteDescription', ['id' => $id]);
})->name('siteInfo');

Route::get('/actividad/{id}', function ($id) {
    return view('activityDescription', ['id' => $id]);
})->name('activityInfo');

Route::get('/servicios', function () {
    return view('services');
})->name('services');

Route::get('/conocenos', function () {
    return view('about');
})->name('about');

Route::get('/planes', function () {
    return view('plans');
})->name('plans');

Route::get('/sitios', function () {
    return view('sites');
})->name('sites');


