<?php

//FUNCIONES GENERALES

function rango($largo){
    if (strlen($largo)>6 && strlen($largo)<10){
        return TRUE;
    }
}

function alfanumerico($valor){
    $patron = "/^[[:alnum:]]+$/";
    if (preg_match($patron, $valor)){
        return TRUE;
    }
}

//FUNCIONES DE VALIDACIÓN

//Validación del usuario
//Se comprueba si el campo está vacío y después el rango y si es alfanumérico
function validarLogin($login){
    if (!is_null($login)){
        if (rango($login) == TRUE && alfanumerico($login) == TRUE){
            return TRUE;
        }
    }
}

//Validación de la contraseña
//Se comprueba si los campos están vacios. Luego se comprueba el rango y si
//es alfanumérico la priimera contraseña y posteriormente comprobamos si se
//verifica correctamente la contraseña.
function validarPass($passw, $passw2){
    if (!is_null($passw) && !is_null($passw2)){
        if (rango($passw) == TRUE && alfanumerico($passw) == TRUE){
            if ($passw === $passw2){
                return TRUE;
            }
        }
    }
}

//Validación del correo
//Comprobamos si lo que viene en este campo es una dirección de correo válida.
function validarMail($mail){
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    }
}
    
?>