<?php

use App\Http\Controllers\Evaluacion\Evaluacion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Permisos\Configuracion;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register' => true,
        'reset' => false,
    ]

);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function()
{
    Route::prefix('configuracion')->group(function()
    {
        Route::controller(Configuracion::class)->group(function(){
            Route::get('/permisos/{permiso}' , 'createPermiso');
            Route::get('/perfiles/{perfil}' , 'createRole');
            Route::get('/perfiles/asignar/{id}/{perfil}' , 'assignRoleUser');
        });
    });


    Route::prefix('evaluacion')->group(function(){
        Route::controller(Evaluacion::class)->group(function(){
            Route::post('/respuestas' , 'respuestas');
            Route::post('/preguntas' , 'preguntas');
            Route::post('/contestada' , 'contestada')->name('evaluacion.contestada');
        });
    });
});









