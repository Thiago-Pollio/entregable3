<?php 

class ResponsableV {

    private $numeroDeEmpleado;
    private $numeroDeLicencia;
    private $nombre;
    private $apellido;

    public function __construct ($numeroDeEmpleado, $numeroDeLicencia, $nombre, $apellido) {
        
        
        $this -> numeroDeEmpleado = $numeroDeEmpleado;
        $this -> numeroDeLicencia = $numeroDeLicencia;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;


    }

    public function getNumeroDeEmpleado (){
        return $this -> numeroDeEmpleado;
    }

    public function getNumeroDeLicencia (){
        return $this -> numeroDeLicencia;
    }

    public function getNombre (){
        return $this -> nombre;
    }

    public function getApellido (){
        return $this -> apellido;
    }

    public function setNumeroDeEmpleado ($numeroDeEmpleado){
        $this -> numeroDeEmpleado = $numeroDeEmpleado;
    }

    public function setNumeroDeLicencia ($numeroDeLicencia){
        $this -> numeroDeLicencia = $numeroDeLicencia;
    }

    public function setNombre ($nombre){
        $this -> nombre = $nombre;
    }

    public function setApellido ($apellido){
        $this -> apellido = $apellido;
    }


    public function __toString(){
        return "Numero de Empleado: ".$this->getNumeroDeEmpleado()."\n".
        "Numero de Licencia: ".$this->getNumeroDeLicencia()."\n".
        "Nombre: ".$this->getNombre()."\n".
        "Apellido: ".$this->getApellido();
        }

}