<?php
require_once 'bbdd.php';
    
    $db = conectaBd();
     
    $consulta = "DELETE FROM producto WHERE IdProducto = :id ";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":id" => $_REQUEST['id']))) {
            unset($_REQUEST['id']);
            $url = "listado.php";
            header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Eliminar_Producto";
        header('Location:'.$url);
    }

    $db = null;


?>