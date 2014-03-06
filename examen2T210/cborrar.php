<?php
require_once 'bbdd.php'; 
require_once 'func.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="formulario">&nbsp;</div>
        <h1>Confirmar Borrado</h1>
        <ul>
        <li><a href="index.php">Inicio</a></li>            
        <li><a href="listado.php">Listado</a></li>
        </ul>
        <div>Mostrar Producto a borrar</div>
        
        <?php
        
            $bd = conectaBd();
            $consulta = "SELECT * FROM producto WHERE IdProducto=".$_REQUEST['id'];
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                $url = "error.php?msg_error=Error_Consulta_Borrar";
                header('Location:'.$url);
            } else {
                echo "<table border=1 width=100%>";
                echo "<tr>";
                echo "<th>Producto</th>";
                echo "<th>Precio</th>";
                echo "<th>Existencias</th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['NombreProducto']."</td>";
                    echo "<td align=right>".formatoMoneda($registro['PrecioUnidad'])."</td>";
                    echo "<td align=right>".$registro['UnidadesExistencia']."</td>";        
                    
                }
                echo "</table>";
                echo "<a href=\"borrar.php?id=".$registro['IdProducto']."\">CONFIRMAR BORRADO</a>";
            }
            
            $bd = null;
        ?>
    </body>
</html>
