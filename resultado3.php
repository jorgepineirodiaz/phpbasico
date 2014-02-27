<?php
require_once 'validar.php';

$error = false;
$mensaje_error = "ERRORES:<ul>";
$datos = "DATOS:</ul>";

//Entrada datos
   $nombre = $_REQUEST['nombre'];
   $edad = $_REQUEST['edad'];
   $beca = isset($_REQUEST['beca']);
   $sexo = isset($_REQUEST['sexo']) ? $REQUEST['sexo'] : false;
   $estado = isset($REQUEST['estado']) ? $REQUEST['estado'] : false;
   $aficiones[] = isset($REQUEST['aficiones']) ? $REQUEST['aficiones'] : false;
   
//validar nombre
$nombre = limpiarTexto($nombre);

if (!validarNombreEstricto($nombre)) {
     $error = true;
     $mensaje_error .= "<li>Nombre obligatorio</li>";
 }
 //validar edad
if (!validarEdad($edad)) {
    $error = true;
    $mensaje_error .= "<li>Edad debe ser un número</li>";
}

//validar beca
if ($beca){
    $datos .= "<li>Solicita beca</li>";
} else {
    $datos .= "<li>No solicita beca</li>";
}

//sexo
 if ($sexo) {
       $datos .= "<li>Sexo: ".$sexo."</li";
   } else {
       $mensaje_error .= "<li>Debe introducir una opción para sexo</li>";
   }

//estado civíl
if ($estado) {
    $datos .= "<li>Estado civíl: ".$estado."</li>";
} else {
    $mensaje_error .= "<li>Introducir estado civíl</li>";
}

//aficiones

//Calculo y salida
 if (!$error) {
     //Si no hay error
    if ($edad>=18) {
        $datos .= "<li>".$nombre." es mayor de edad</li>";
    } else {
        $datos .= "<li>".$nombre." es menor de edad</li>";
    }

  } else {
    //Si ha error
    echo $mensaje_error."</ul>";
    echo "<a href='javascript:history.go(-1);'> Volver al formulario </a><br /><br /><br />";
  }
  
echo $datos."</ul>";
?>