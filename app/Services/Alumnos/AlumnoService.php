<?php

namespace App\Services\Alumnos;

use App\Repositories\Alumnos\AlumnoRepository;
use App\Repositories\Alumnos\MatriculaRepository;

class AlumnoService{
    private $repositorioAlumno;
    private $repositorioMatricula;

    public function __construct(AlumnoRepository $repositorioAlumno , MatriculaRepository $repositorioMatricula )
    {
        $this->repositorioAlumno = $repositorioAlumno;
        $this->repositorioMatricula = $repositorioMatricula;
    }


    /*
        Una matricula en el contexto de este sistema es la relacion que tiene un alumno
        con su grupo, materia y docente.

        Con esta función, vamos a obtener todos las materias que tienen un alumno, con su respectivo docente y grupo.
    */
    public function getMatricula($idAlumno)
    {
        return $this->repositorioMatricula->getMatricula($idAlumno);
    }

}
