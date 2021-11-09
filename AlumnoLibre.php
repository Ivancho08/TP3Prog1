<?php
require_once 'Alumno.php';


class AlumnoLibre extends Alumno{

    private $notaFinal;

    public function __construct($nombre, $apellido, $dni, $notaFinal = null){

        parent::__construct($nombre, $apellido, $dni);
        $this->notaFinal = $notaFinal;
    }

    public function getNota(){
        return $this->notaFinal;
    }

    public function __toString(){
        return $this->nombre . " " . $this->apellido . " " . $this->dni . " " . $this->notaFinal;
    }

}


?>