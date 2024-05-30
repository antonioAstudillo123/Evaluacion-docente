<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Aqui debemos hacer la logica de si el usuario es alumno mandarlo a las encuestas
        // si el usuario es academico o administrador, mandarlo al dashboard
        return view('home');
    }
}
