<?php

class PasajeroVIP extends PasajeroN {

    private $numeroViajeroRecurrente;
    private $cantidadMillas;

    public function __construct($nombre, $apellido, $documento, $telefono, $numeroDeAsiento, $numeroDeTicket, $numeroViajeroRecurrente, $cantidadMillas){

        parent :: __construct ($nombre, $apellido, $documento, $telefono, $numeroDeAsiento, $numeroDeTicket);

                $this->numeroViajeroRecurrente = $numeroViajeroRecurrente;
                $this->cantidadMillas = $cantidadMillas;


    }

    public function getNumeroViajeroRecurrente (){
        return $this -> numeroViajeroRecurrente;
    }

    public function getCantidadMillas (){
        return $this -> cantidadMillas;
    }

    public function setNumeroViajeroRecurrente ($numeroViajeroRecurrente){
        $this -> numeroViajeroRecurrente = $numeroViajeroRecurrente;
    }

    public function setCantidadMillas ($cantidadMillas){
        $this -> cantidadMillas = $cantidadMillas;
    }

    public function darPorcentajeIncremento () {

        $importeN = parent:: darPorcentajeIncremento();


       

        $lasMillas = $this->getCantidadMillas();

        if ($lasMillas > 300) {
            
             $importeVIP = $importeN + 20;

        } else {
            
            $importeVIP = $importeN + 25;

        }

        
        
        return ($importeVIP);

    }

    public function __toString(){

        $cadena = parent:: __toString();

        return $cadena . $this->getNumeroViajeroRecurrente() . $this->getCantidadMillas();
        }













}