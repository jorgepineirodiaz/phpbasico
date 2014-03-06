<?php
require_once 'bbdd.php';
require_once 'func.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

formatoMoneda($precio_unidad);


    $db = conectaBd();
    $nombre_producto = $_REQUEST['NombreProducto'];
    $precio_unidad = $_REQUEST['PrecioUnidad'];
    $unidades_existencia =  $_REQUEST['UnidadesExistencia'];
    $consulta = "INSERT INTO producto 
    (NombreProducto, PrecioUnidad, UnidadesExistencia)
    VALUES (:nombre_producto, :precio_unidad, :unidades_existencia)";
    $resultado = $db->prepare($consulta);
    
    //$errorPrecio = !validarPrecio($precio_unidad);
    //$errorNombre = !validarNombreProducto($nombre_producto);
    //$errorExistencia = !validarExistencia($unidades_existencia);
 
    if (validarPrecio($precio_unidad) == TRUE && validarNombreProducto($nombre_producto) == TRUE && validarExistencia($unidades_existencia) == TRUE) {
  
        if ($resultado->execute(array(":nombre_producto" => $nombre_producto, ":precio_unidad" => $precio_unidad,
        ":unidades_existencia" => $unidades_existencia))) {
            $url = "listado.php";
            header('Location:'.$url);
        } else {
            $url = "error.php?msg_error=Error_Grabar_Nuevo_Producto";
            header('Location:'.$url);
        }

    $db = null;
        
        
    } else {
        $url = "error.php?msg_error=Error_Validacion";
        header('Location:'.$url);
    }
    
?>