<?php
require_once "resultadoRegistroFunciones.php";

$resultado="";

function validarDatosRegistro(&$resultado){

    $login = (isset($_REQUEST['login'])) ? $_REQUEST['login'] : NULL; 
    $passw = (isset($_REQUEST['passw'])) ? $_REQUEST['passw'] : NULL;
    $passw2 = (isset($_REQUEST['passw2'])) ? $_REQUEST['passw2'] : NULL;
    $mail = (isset($_REQUEST['mail'])) ? $_REQUEST['mail'] : NULL;
    
    if (validarLogin($login) == TRUE){
        $resultado .= "Login correcto: ".$login."<br />";
    } else {
        $resultado .= "Login no válido.<br />";
    }
    
    if (validarPass($passw, $passw2) == TRUE){
        $resultado .= "Pass correcta: ".$passw."<br />";
    } else {
        $resultado .= "Clave no válida.<br />";
    }
    
    if (validarMail($mail) == TRUE){
        $resultado .= "Email correcto: ".$mail."<br />";
    } else {
        $resultado .= "Email incorrecto o vacío.<br />";
    }
    
    return $resultado;
}
?>
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h1>RESULTADO</h1>
        <?php
            if (validarDatosRegistro($resultado)){
                echo $resultado;
                echo "<a href='javascript:history.go(-1);'>Volver al formulario</a>";
            }
        ?>
    </body>
</html>