<?php
require_once 'Alumno.php';


class AlumnoPresencial extends Alumno{

    public $notaFinal;
    private $notas;
    private $inasistencias;
    private $sumaNotas;
    public static $diasHabiles;
    


    public function __construct($nombre, $apellido, $dni, $inasistencias, $notas, $notaFinal = null){

        parent::__construct($nombre, $apellido, $dni);
        $this->inasistencias = $inasistencias;
        $this->notas = $notas;
        $this->notaFinal = $notaFinal;
        
    }

    public static function setDiasHabiles($d){
        self::$diasHabiles = $d;
    }

    public function porcAsistencia(){

        $asist =  self::$diasHabiles- $this->inasistencias;
        $porcentaje = ($asist*100)/self::$diasHabiles;

        return $porcentaje;
    }

    public function promNotas(){

        for($i = 0; $i < count($this->notas); $i++){
            if($this->notas[$i] >= 4){
                $this->sumaNotas = $this->sumaNotas + $this->notas[$i];
            }
        }
        $promedio = $this->sumaNotas / count($this->notas);

        for ($i = 0; $i < count($this->notas); $i++){
            if($this->notas[$i] < 4){
                $promedio = 1;
            }
        }

        return $promedio;

    }

    public function getNota(){

        if($this->promNotas()>=4 && $this->porcAsistencia() >= 75){
            $this->notaFinal = $this->promNotas();
            return $this->notaFinal;
        } else {
            return $this->notaFinal = 1;
        }
    }


    public function __toString(){
        return $this->nombre . " " . $this->apellido . " " . $this->dni . " " . $this->notaFinal . " largo cadeda " . count($this->notas) . " suma " . $this->sumaNotas;
    }


}


?>