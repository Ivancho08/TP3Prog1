<?php
require_once 'Alumno.php';


class AlumnoPresencial extends Alumno{

    private $notaFinal;

    public function __construct($nombre, $apellido, $dni, $notaFinal = null){

        parent::__construct($nombre, $apellido, $dni);
        $this->notaFinal = $notaFinal;
    }




}


?>