<?php
require_once "resulIMC2.php";

$masa = $_REQUEST['masa'];
$altura = $_REQUEST['altura'];
$errores = array();

//Validación
if (!valPeso($masa)){
    $errores[] = MSG_ERROR_PESO;
}

if (!valAlt($altura)) {
    $errores[] = MSG_ERROR_ALTURA;
}

if (count($errores)>0){
    echo 'Errores: <br />';
    foreach($errores as $error){
        echo $error.'<br />';
    }
} else {
//Cálculo y clasificación
    $imc = calcularIMC($masa, $altura);
    $clasificacion = clasificarIMC($imc);
    echo "Su imc es de: ".$imc;
    echo "Su peso se encuentra en el rango de: ".$clasificacion;
}

?>