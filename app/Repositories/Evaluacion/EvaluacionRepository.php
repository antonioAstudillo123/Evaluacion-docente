<?php

namespace App\Repositories\Evaluacion;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EvaluacionRepository
{
    public function respuestas()
    {
        return DB::table('respuestas')->select('id' , 'respuesta' , 'puntos')->get();
    }

    public function preguntas()
    {
        return DB::table('preguntas')->select('id' , 'pregunta')->get();
    }


    public function createEvaluacion($idMatricula , $totalPuntos , $comentarios)
    {
        return DB::table('evaluacion_contestada')->insertGetId(
            [
                'id_matricula' => $idMatricula,
                'fecha' => Carbon::now(),
                'hora' => Carbon::now(),
                'total_puntos' => $totalPuntos,
                'comentarios' => $comentarios,
                'estatus' => true,
            ]
        );

    }


    public function createEvaluacionDetalle($idEvaluacion , $idPregunta , $idRespuesta)
    {
        return DB::table('evaluacion_contestada_detalle')->insert(
            [
                'id_evaluacion_contestada' => $idEvaluacion,
                'id_pregunta' => $idPregunta,
                'id_respuesta' => $idRespuesta,
                'created_at' => Carbon::now()
            ]
        );
    }


}
