<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Permisos\Configuracion;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register' => false,
        'reset' => false,
    ]

);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function(){
    Route::prefix('configuracion')->group(function()
    {
        Route::controller(Configuracion::class)->group(function(){
            Route::get('/permisos/{permiso}' , 'createPermiso');
            Route::get('/perfiles/{perfil}' , 'createRole');
        });
    });
});









