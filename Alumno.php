<?php

class Alumno{
    
    protected $nombre;
    protected $apellido;
    protected $dni;

    public function __construct ($nombre, $apellido, $dni){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    public function getNombreApellido(){
        return $this->nombre . " " . $this->apellido;
    }

    public function getDni(){
        return $this->dni;
    }


}

?>