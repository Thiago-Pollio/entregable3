<?php

class PasajeroNecesidadesEspeciales extends PasajeroN {

    private $necesidades;

    public function __construct($nombre, $apellido, $documento, $telefono, $numeroDeAsiento, $numeroDeTicket, $necesidades){

        parent:: __construct ($nombre, $apellido, $documento, $telefono, $numeroDeAsiento, $numeroDeTicket);
        
        $this -> $necesidades = $necesidades;


    }

    public function getNecesidades (){
        return $this -> necesidades;
    }

    public function setNecesidades ($necesidades){
        $this -> necesidades = $necesidades;
    }

    public function darPorcentajeIncremento () {

        $importeN = parent:: darPorcentajeIncremento();

        $lasNecesidades = $this->getNecesidades();

        if ($lasNecesidades > 1) {
           
            $importeNecesidadesEspeciales = $importeN + 20;


        } else {
            
            $importeNecesidadesEspeciales = $importeN + 5; 


        }

        return ($importeNecesidadesEspeciales);

    }

    /*

    public function getSillaDeRuedas (){
        return $this -> sillaDeRuedas;
    }

    public function getAsistencia (){
        return $this -> asistencia;
    }

    public function getComidas (){
        return $this -> comidas;
    }

    public function setSillaDeRuedas ($sillaDeRuedas){
        $this -> sillaDeRuedas = $sillaDeRuedas;
    }

    public function setAsistencia ($asistencia){
        $this -> asistencia = $asistencia;
    }

    public function setComidas ($comidas){
        $this -> comidas = $comidas;
    }

    */

    public function __toString(){
        $cadena = parent:: __toString();

        return $cadena . $this->getNecesidades();

        }













}