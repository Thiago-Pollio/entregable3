<?php

include_once ('pasajeroN.php');
include_once ('pasajeroVIP.php');
include_once ('pasajerosNecesidadesEspeciales.php');
include_once ('responsableV.php');
include_once ('viaje.php');

$objViaje = new Viaje (0,0,0, array(), null, 0);

$salir = false;

while ($salir == false) {
    $menu= "Menú de opciones: \n" .
        "1) Ingresar datos  del viaje  \n".
        "2) Modificar datos  del viaje  \n" .
        "3) Ingresar datos  del responsable \n".
        "4) Modificar datos  del responsable \n".
        "5) Ingresar datos  de pasajeros \n".
        "6) Modificar datos  de pasajeros \n" .
        "7) Mostrar datos  del viaje y de los pasajeros \n" .  
        "8) Salir \n"; 
        echo $menu;
        echo "Ingrese una opcion: ";
        $opcion = trim(fgets(STDIN));
        

        switch ($opcion) {
            /*Dependiendo de la opción del menú que escoga el usuario, el programa ejecutará diferentes
            tareas. Se utiliza switch, que corresponde a la estructura de control alternativa (if)*/
            case 1: 
                
                echo "Ingrese el código del viaje: ";
                $codigo = trim(fgets(STDIN));
                echo "Ingrese el destino del viaje: ";
                $destino = trim(fgets(STDIN));
                echo "Ingrese la cantidad máxima de pasajeros: ";
                $cantMax = trim(fgets(STDIN));
                echo "Ingrese el costo del viaje: ";
                $costoViaje = trim(fgets(STDIN));

                $objViaje -> setCodigo ($codigo);
                $objViaje -> setDestino ($destino);
                $objViaje -> setCantMax ($cantMax);
                $objViaje -> setCosto ($costoViaje);
                
                break;
                
            case 2:
                echo "Ingrese el nuevo código del viaje: ";
                $codigo = trim(fgets(STDIN));
                echo "Ingrese el nuevo destino del viaje: ";
                $destino = trim(fgets(STDIN));
                echo "Ingrese la nueva cantidad máxima de pasajeros: ";
                $cantMax = trim(fgets(STDIN));

                $objViaje -> setCodigo ($codigo);
                $objViaje -> setDestino ($destino);
                $objViaje -> setCantMax ($cantMax);
    
                break;
            case 3: 

                    echo "Número de empleado: ";
                    $numE = trim(fgets(STDIN));
                    echo "Número de licencia: ";
                    $numL = trim(fgets(STDIN));
                    echo "Nombre: ";
                    $nomb = trim(fgets(STDIN));
                    echo "Apellido: ";
                    $apell = trim(fgets(STDIN));
                    $objViaje-> losDatosDelResponsable($numE, $numL, $nomb, $apell);
                    echo "Se agregó correctamente. \n";
                    //$v = $objViaje->getObjResponsable();
                    //echo $v;
            
                break;
            case 4:
    
                echo "Ingrese el numero de empleado: ";
                $nDE = trim(fgets(STDIN));
                echo "Ingrese el numero de empleado del responsable: ";
                $numE = trim(fgets(STDIN));
                echo "Ingrese el numero de licencia del responsable: ";
                $numL = trim(fgets(STDIN));
                echo "Ingrese el nombre del responsable: ";
                $nomb = trim(fgets(STDIN));
                echo "Ingrese el apellido del responsable: ";
                $apell = trim(fgets(STDIN));

    
                $funcionModificar = $objViaje -> modificarElResponsable($nDE);
    
            
                if ($funcionModificar == true) {
                    echo "Los datos fueron modificados.";
                    $objViaje -> losDatosDelResponsable ($numE, $numL, $nomb, $apell);
                } else {
                    echo "No existe el responsable: " . $nDE;
                }
                    
                break;
            case 5: 

                $contador = 0;
                $respuesta = "SI";

                for ($contador=0; $contador < $cantMax ; $contador++) { 
                    echo "¿Que tipo de pasajero desea ingresar? Estandar (1), VIP (2), con Necesidades Especiales (3): ";

                    $tipoDePasajero = trim(fgets(STDIN));

                    if ($tipoDePasajero == 1) {

                        echo "Ingrese el nombre del pasajero: ";
                        $unNombre = trim(fgets(STDIN));
                        echo "Ingrese el apellido del pasajero: ";
                        $unApellido = trim(fgets(STDIN));
                        echo "Ingrese el numero de documento del pasajero: ";
                        $unDocumento = trim(fgets(STDIN));
                        echo "Ingrese el numero de telefono del pasajero: ";
                        $unTelefono = trim(fgets(STDIN));
                        echo "Ingrese el numero de asiento: ";
                        $nroDeAsiento = trim(fgets(STDIN));
                        echo "Ingrese el numero de ticket: ";
                        $nroDeTicket = trim(fgets(STDIN));

                        $objPasajero = new PasajeroN($unNombre, $unApellido, $unDocumento, $unTelefono, $nroDeAsiento, $nroDeTicket);
                         
                        
                        $verificarPasajero = $objViaje-> existePasajero($objPasajero);                
                    
            
                        if($verificarPasajero == false){
                            $agregarPasajero = $objViaje-> venderPasaje($objPasajero); 
                            echo "Se agregó correctamente. \n";
                            echo "El precio del pasaje es: ". $agregarPasajero . ".";
                        } else {
                            echo "El pasajero con DNI ". $unDocumento. " ya existe.\n";
                        }

                    } elseif ($tipoDePasajero == 2) {
                        
                        echo "Ingrese el nombre del pasajero: ";
                        $unNombre = trim(fgets(STDIN));
                        echo "Ingrese el apellido del pasajero: ";
                        $unApellido = trim(fgets(STDIN));
                        echo "Ingrese el numero de documento del pasajero: ";
                        $unDocumento = trim(fgets(STDIN));
                        echo "Ingrese el numero de telefono del pasajero: ";
                        $unTelefono = trim(fgets(STDIN));
                        echo "Ingrese el numero de asiento: ";
                        $nroDeAsiento = trim(fgets(STDIN));
                        echo "Ingrese el numero de ticket: ";
                        $nroDeTicket = trim(fgets(STDIN));
                        echo "Ingrese su numero de viajero frecuente: ";
                        $numeroViajero = trim(fgets(STDIN));
                        echo "Ingrese su cantidad de millas: ";
                        $cantidadDeMillas = trim(fgets(STDIN));
                        
                        $objPasajeroVIP = new PasajeroVIP ($unNombre, $unApellido, $unDocumento, $unTelefono, $nroDeAsiento, $nroDeTicket, $numeroViajero, $cantidadDeMillas);
                        
                        $verificarPasajero = $objViaje-> existePasajero($objPasajeroVIP);                
                    
            
                        if($verificarPasajero == false){
                            $agregarPasajero = $objViaje-> venderPasaje($objPasajeroVIP);
                            echo "El precio del pasaje es: ". $agregarPasajero . ".";
                            echo "Se agregó correctamente. \n";
                        } else {
                            echo "El pasajero con DNI ". $unDocumento. " ya existe.\n";
                        }


                    } else {
                        
                        echo "Ingrese el nombre del pasajero: ";
                        $unNombre = trim(fgets(STDIN));
                        echo "Ingrese el apellido del pasajero: ";
                        $unApellido = trim(fgets(STDIN));
                        echo "Ingrese el numero de documento del pasajero: ";
                        $unDocumento = trim(fgets(STDIN));
                        echo "Ingrese el numero de telefono del pasajero: ";
                        $unTelefono = trim(fgets(STDIN));
                        echo "Ingrese su numero de viajero frecuente: ";
                        $nroDeAsiento = trim(fgets(STDIN));
                        echo "Ingrese el numero de ticket: ";
                        $nroDeTicket = trim(fgets(STDIN));

                        $NE = 0;

                        while ($respuesta == "SI") {

                            echo "Ingrese la necesidad especial que desea: Silla de ruedas (S), Asistencia (A), Comida Especial (C): ";
                            $opcionElegida = trim(fgets(STDIN));
                            $NE = $NE + 1;
                            
                            echo "¿Desea agregar otra necesidad especial? SI / NO: ";
                            $respuesta = trim(fgets(STDIN));


                            
                        }
                        
                        $objPasajeroNE = new PasajeroNecesidadesEspeciales ($unNombre, $unApellido, $unDocumento, $unTelefono, $nroDeAsiento, $nroDeTicket, $NE );
                        $objPasajeroNE ->setNecesidades($NE);
                        
                        $verificarPasajero = $objViaje-> existePasajero($objPasajeroNE);                
                    
            
                        if($verificarPasajero == false){
                            $agregarPasajero = $objViaje-> venderPasaje($objPasajeroNE);
                            echo "El precio del pasaje es: ". $agregarPasajero . ".";
                            echo "Se agregó correctamente. \n";
                        } else {
                            echo "El pasajero con DNI ". $unDocumento. " ya existe.\n";
                        }


                    }
                }
                    
                
                break;
            case 6:

                echo "Ingrese su tipo de pasajero: Estandar (1), VIP (2), con Necesidades Especiales (3): ";
                $opcionModificar = trim(fgets(STDIN));
                if ($opcionModificar == 1) {
                    echo "Ingrese el numero de documento: ";
                    $nDni = trim(fgets(STDIN));
                    echo "Ingrese el nombre del pasajero: ";
                    $unNombre = trim(fgets(STDIN));
                    echo "Ingrese el apellido del pasajero: ";
                    $unApellido = trim(fgets(STDIN));
                    echo "Ingrese el numero de documento del pasajero: ";
                    $unDocumento = trim(fgets(STDIN));
                    echo "Ingrese el numero de telefono del pasajero: ";
                    $unTelefono = trim(fgets(STDIN));
                

                $funcionModificar = $objViaje -> modificarElPasajero($nDni);

        
                if ($funcionModificar == true) {
                    $objPasajero->setNombre($unNombre);
                    $objPasajero->setApellido($unApellido);
                    $objPasajero->setDocumento ($unDocumento);
                    $objPasajero->setTelefono($unTelefono);
                    echo "Los datos fueron modificados." . "\n";
                } else {
                    echo "No existe el documento: " . $nDni. "\n";
                }
                } elseif ($opcionModificar == 2) {
                        echo "Ingrese el numero de documento: ";
                        $nDni = trim(fgets(STDIN));
                        echo "Ingrese el nombre del pasajero: ";
                        $unNombre = trim(fgets(STDIN));
                        echo "Ingrese el apellido del pasajero: ";
                        $unApellido = trim(fgets(STDIN));
                        echo "Ingrese el numero de documento del pasajero: ";
                        $unDocumento = trim(fgets(STDIN));
                        echo "Ingrese el numero de telefono del pasajero: ";
                        $unTelefono = trim(fgets(STDIN));
                    
    
                    $funcionModificar = $objViaje -> modificarElPasajero($nDni);
    
            
                    if ($funcionModificar == true) {
                        $objPasajeroVIP->setNombre($unNombre);
                        $objPasajeroVIP->setApellido($unApellido);
                        $objPasajeroVIP->setDocumento ($unDocumento);
                        $objPasajeroVIP->setTelefono($unTelefono);
                        echo "Los datos fueron modificados." . "\n";
                    } else {
                        echo "No existe el documento: " . $nDni. "\n";
                    }
                } else {
                    echo "Ingrese el numero de documento: ";
                        $nDni = trim(fgets(STDIN));
                        echo "Ingrese el nombre del pasajero: ";
                        $unNombre = trim(fgets(STDIN));
                        echo "Ingrese el apellido del pasajero: ";
                        $unApellido = trim(fgets(STDIN));
                        echo "Ingrese el numero de documento del pasajero: ";
                        $unDocumento = trim(fgets(STDIN));
                        echo "Ingrese el numero de telefono del pasajero: ";
                        $unTelefono = trim(fgets(STDIN));
                    
    
                    $funcionModificar = $objViaje -> modificarElPasajero($nDni);
    
            
                    if ($funcionModificar == true) {
                        $objPasajeroNE->setNombre($unNombre);
                        $objPasajeroNE->setApellido($unApellido);
                        $objPasajeroNE->setDocumento ($unDocumento);
                        $objPasajeroNE->setTelefono($unTelefono);
                        echo "Los datos fueron modificados." . "\n";
                    } else {
                        echo "No existe el documento: " . $nDni. "\n";
                    }
                }

                
                
                break;
            case 7:
                echo "Codigo de viaje: ".$codigo. "\n";
                echo "Destino: ".$destino. "\n";
                echo "Cantidad máxima: ".$cantMax. "\n";
                echo "Costo del viaje: ".$costoViaje."\n";
                echo "Responsable: "."\n";
                $respon = $objViaje->getObjResponsable();
                echo "". $respon. "\n";

                $arrayP = $objViaje->getColeccionPasajeros();
                print_r($arrayP);
                
                
                
                break;
            case 8:
                $salir = true;
                    
                break;
    }
    }







