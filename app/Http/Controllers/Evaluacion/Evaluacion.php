<?php

namespace App\Http\Controllers\Evaluacion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Evaluacion\EvaluacionService;

class Evaluacion extends Controller
{
    private $servicio;

    public function __construct(EvaluacionService $servicio )
    {
        $this->servicio = $servicio;
    }


    public function contestada(Request $request)
    {
        $data = $request->all();

        if($this->servicio->contestada($data))
        {
            return redirect('home');
        }

        return redirect('home');
    }
}
