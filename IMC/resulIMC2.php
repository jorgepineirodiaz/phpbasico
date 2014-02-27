<?php
//General
function enRango($min, $max, $valor){
    return ($valor>=$min && $valor<=$max);
}

//CONSTANTES
define ('maxalt', 250);
define ('minalt', 10);
define ('maxpeso', 500);
define ('minpeso', 1);
define ('MSG_ERROR_PESO', 'El peso debe de ser un valor...');
define ('MSG_ERROR_ALTURA', 'La altura debe de ser un valor...');

//Calcular IMC
function calcularIMC($masa, $altura){
    $altura = $altura/100;
    $imc = $masa/($altura*$altura);
    return round($imc,2);
}

//Clasificación del IMC
function clasificarIMC($imc){
    if ($imc < 16.00){
        $peso = "Delgadez severa";
    } elseif ($imc <=16.99){
        $peso = "Delgadez moderada";
    } elseif ($imc <= 18.49) {
        $peso = "Delgadez leve";
    } elseif ($imc <= 24.99) {
        $peso = "Normal";
    } elseif($imc <= 29.99) {
        $peso = "Preobeso";
    } elseif ($imc <= 34.99) {
        $peso = "Obesidad leve";
    } elseif ($imc <= 39.99) {
        $peso = "Obesidad media";
    } else {
        $peso = "Obesidad mórbida";
    }
    return $peso;
}

//Validar peso
function valPeso($masa){
    if (filter_var($masa, FILTER_VALIDATE_INT)){
        $resultado = enRango(minpeso, maxpeso, $masa);
    } else {
        return FALSE;
    }
}

//Validar altura
function valAlt($altura){
    $resultado = FALSE;
    if (filter_var($altura, FILTER_VALIDATE_INT)){
        $resultado = enRango(minalt, maxalt, $altura);
    } else {
        return FALSE;
    }
}

?>