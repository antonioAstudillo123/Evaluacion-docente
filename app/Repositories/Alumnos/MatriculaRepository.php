<?php


namespace App\Repositories\Alumnos;

use Illuminate\Support\Facades\DB;


class MatriculaRepository{

    private $tabla;

    public function __construct()
    {
        $this->tabla = 'matricula';
    }
    /*
        Obtenemos toda la información de las materias y profesores correspondientes a un alumno en especifico
    */
    public function getMatricula($id_alumno)
    {
        return DB::table($this->tabla)
        ->join('docentes' , 'docentes.id' , '=' , 'matricula.id_docente')
        ->join('materias' , 'materias.id' , '=' , 'matricula.id_materia')
        ->select('matricula.id' ,'docentes.nombre_completo' , 'materias.descripcion' , 'matricula.contestada')
        ->where('matricula.id_alumno' , $id_alumno)
        ->get();

    }
}
