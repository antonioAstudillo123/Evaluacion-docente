<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Alumnos\AlumnoService;
use App\Services\Evaluacion\EvaluacionService;

class HomeController extends Controller
{
    private $servicioAlumno;
    private $evaluacionService;

    public function __construct(AlumnoService $alumnoService , EvaluacionService $evaluacionService)
    {
        $this->middleware('auth');

        $this->servicioAlumno = $alumnoService;
        $this->evaluacionService = $evaluacionService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->hasRole('alumno'))
        {
            $matricula = $this->servicioAlumno->getMatricula(1);
            $respuestas = $this->evaluacionService->respuestas();
            $preguntas = $this->evaluacionService->preguntas();

            return view('alumnos.matricula' , ['matricula' => $matricula , 'preguntas' => $preguntas , 'respuestas' => $respuestas]);
        }else{
            $mensaje = 'El usuario es administrador o academico';
        }

        // Aqui debemos hacer la logica de si el usuario es alumno mandarlo a las encuestas
        // si el usuario es academico o administrador, mandarlo al dashboard
        return view('home' , ['mensaje' => $mensaje]);
    }
}
