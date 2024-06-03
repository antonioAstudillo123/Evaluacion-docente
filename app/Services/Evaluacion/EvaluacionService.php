<?php

namespace App\Services\Evaluacion;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Repositories\Evaluacion\EvaluacionRepository;

class EvaluacionService
{
    private $repositorio;
    private $cantidadPreguntas;

    public function __construct(EvaluacionRepository $repositorio)
    {
        $this->repositorio = $repositorio;
        $this->cantidadPreguntas = 25;
    }


    public function contestada($data)
    {
        $puntos = [0 , 1 , 2 , 3, 4, 5];
        $totalPuntos = 0;

        for ($i=1; $i <=$this->cantidadPreguntas ; $i++) {
            $totalPuntos = $totalPuntos + $puntos[$data[$i]];
        }

        try {
            // Inicia la transacción
            DB::beginTransaction();

            $id = $this->repositorio->createEvaluacion($data['idMatricula'] , $totalPuntos , $data['comentarios']);

            for ($i=1; $i <=$this->cantidadPreguntas ; $i++)
            {
                $this->repositorio->createEvaluacionDetalle($id , $i ,$data[$i] );
            }

           DB::table('matricula')->where('id' , $data['idMatricula'])->update(['contestada' => true]);


            // Confirma la transacción
            DB::commit();

        } catch (Exception $e) {
            // Deshace la transacción en caso de error
            DB::rollBack();

            return false;
        }

        return true;
    }



    /**
     * Estos metodos se mandan a llamar desde el controlador HomeController
     * Estos metodos traen la informacion correspondientes a las preguntas y respuestas
     */


    public function respuestas()
    {
        return $this->repositorio->respuestas();

    }

    public function preguntas()
    {
        return $this->repositorio->preguntas();
    }
}
