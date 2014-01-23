<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //Entrada datos
            $nombre = "";
            if (isset($_REQUEST['nombre'])){
                $nombre = $_REQUEST['nombre'];
            }
            
            $edad = $_REQUEST['edad'];
            
            //Validación
            $error = false;
            $mensaje_error = "ERROR: ";
            
            if ($nombre == ""){
                $error = true;
                $mensaje_error .= "Introduzca un nombre<br />";
            }
            
            if (!is_numeric($edad)){
                $error = true;
                $mensaje_error .= "Edad debe ser un número<br />";
            } else {
                if ($edad <= 0 || $edad > 100){
                    $error = true;
                    $mensaje_error .= "Edad poco realista. Debe estar en el rango (0,100]<br />";
                }
            }
                
            //Salida datos 
            if (!$error){
                if ($edad >= 18) {
                    echo $nombre.", eres mayor de edad";
                } else {
                    echo $nombre.", eres menor de edad";
                } 
            } else {
                echo $mensaje_error;
                echo "<br /><a href='javascript:histoy.go(-1);'>Volver al formulario</a>";
            }
            
        ?>
    </body>
</html>
