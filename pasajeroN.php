<?php

class PasajeroN {

    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;
    private $numeroDeAsiento;
    private $numeroDeTicket;

    public function __construct($nombre, $apellido, $documento, $telefono, $numeroDeAsiento, $numeroDeTicket){

        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> documento = $documento;
        $this -> telefono = $telefono;
        $this -> numeroDeAsiento = $numeroDeAsiento;
        $this -> numeroDeTicket = $numeroDeTicket;


    }

    public function getNombre (){
        return $this -> nombre;
    }

    public function getApellido (){
        return $this -> apellido;
    }

    public function getDocumento (){
        return $this -> documento;
    }

    public function getTelefono (){
        return $this -> telefono;
    }

    public function getNumeroDeAsiento (){
        return $this -> numeroDeAsiento;
    }

    public function getNumeroDeTicket (){
        return $this -> numeroDeTicket;
    }

    public function setNombre ($nombre){
        $this -> nombre = $nombre;
    }

    public function setApellido ($apellido){
        $this -> apellido = $apellido;
    }

    public function setDocumento ($documento){
        $this -> documento = $documento;
    }

    public function setTelefono ($telefono){
        $this -> telefono = $telefono;
    }

    public function setNumeroDeAsiento ($numeroDeAsiento){
        $this -> numeroDeAsiento = $numeroDeAsiento;
    }

    public function setNumeroDeTicket ($numeroDeTicket){
        $this -> numeroDeTicket = $numeroDeTicket;
    }



    public function darPorcentajeIncremento () {

        $importe = 10;

        
        return ($importe);
        }

    public function __toString(){
        return "nombre: ".$this->getNombre()."\n".
        "Apellido: ".$this->getApellido()."\n";
        "Documento: ".$this->getDocumento()."\n";
        "Telefono: ".$this->getTelefono()."\n";
        "numeroDeAsiento: ".$this->getnumeroDeAsiento()."\n".
        "Numero de ticket: ".$this->getnumeroDeTicket()."\n";

        }













}