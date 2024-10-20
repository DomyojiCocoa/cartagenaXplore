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

    Route::get('/inicio', function () {
        if(Auth::user()->hasRole('Administrator')) {
            return redirect()->route('stadistics');
        }
        return view('welcomeCartagena');
    })->name('dashboard');
    Route::prefix('/admin')->middleware('can:admin')->group(function (){
        
        Route::get('/', function () {
            return redirect()->route('sites');
            });
            Route::get('/estadisticas', [ViewAdminController::class, 'estadistics'])->name('stadistics');
            Route::get('/usuarios', [ViewAdminController::class, 'users'])->name('users');
            Route::get('/actividades', [ViewAdminController::class, 'activities'])->name('activities');
            Route::get('/eventos', [ViewAdminController::class, 'events'])->name('events');
            Route::get('/sitios', [ViewAdminController::class, 'sites'])->name('sites');

            // Route::get('/sitios', function () {
            //     return view('admin.sites');
            // })->name('sites');
            // Route::get('/usuarios', function () {
            //     return view('admin.users');
            // })->name('users');
    });
});
Route::get('/estudiantes/lista-estudiantes', [ViewAdminController::class, 'estudiantesListaEstudiantes'])->name('admin.estudiantesListaSolicitudes');

Route::get('/site', function () {
    return view('siteDescription');
})->name('siteInfo');

Route::get('/servicios', function () {
    return view('services');
})->name('services');
