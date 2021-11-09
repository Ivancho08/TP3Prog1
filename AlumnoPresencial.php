<?php
require_once 'Alumno.php';


class AlumnoPresencial extends Alumno{

    private $notaFinal;
    private $inasistencias;
    private $notas;
    public static $diasHabiles;
    private $bandera = true;
    private $promedio;
    private $porc;

    public function __construct($nombre, $apellido, $dni, $notaFinal = null){

        parent::__construct($nombre, $apellido, $dni);
    }

    public static function setDiasHabiles(){
        return self::$diasHabiles;
    }


    public function porcentajeAsistancia(){

        $asistencia = $diasHabiles - $this->inasistencias;
        $this->porc = ($asistencia * 100)/$diasHabiles;
        
        return int($this->porc);
    }

    public function calcularPromedio(){

        for($i=0; $i < count($this->notas); $i++){
            if ($this->notas[$i] >= 4){
                $sumaNota = $sumaNota + $this->notas[$i];
            } else {
                $this->bandera = false;
            }
        }

        $this->promedio = $sumaNota / count($this->notas);
        
        return ($this->promedio);
    }

    public function getNota(){

        if($this->bandera == true && $this->porc >= 75){
            $this->notaFinal = $this->promedio;
            return $this->notaFinal;
        } else {
            $this->notaFinal = 1;
            return $this->notaFinal;
        }
    }

    public function __toString(){
        return $this->nombre . " " . $this->apellido . " " . $this->dni . " " . $this->notaFinal;
    }


}


?>