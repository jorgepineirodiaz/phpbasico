<?php
//Calcular IMC
function calcularIMC($masa, $altura){
    $imc = $masa/($altura^2);
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
?>