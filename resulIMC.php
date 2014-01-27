<?php
require_once "resulIMC2.php";

$error = "";

$masa = (is_int($_REQUEST['masa'])) ? $_REQUEST['masa'] : $error .= "Introduzca una masa correcta";
$altura = (is_int($_REQUEST['altura'])) ? $_REQUEST['altura'] : $error .= "Altura incorrecta";

//Validación
if ($masa >= 10 && $masa <= 700){
    ;
} else {
    $error .= "Peso incorrecto";
}

if ($altura >= 30 && $altura <= 250){
    $altura = $altura/100;
} else {
    $error = "Altura incorrecta";
}

//Funciones
if (is_null($error){
    calcularIMC($masa, $altura);
} else {
    print $error;
}

//Resultado
echo "Su peso se encuentra en el rango de: ".$peso;
?>