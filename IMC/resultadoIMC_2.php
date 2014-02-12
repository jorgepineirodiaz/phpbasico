<?php require_once 'funcionesIMC.php'; ?>
<html>
<head>
<title>TODO supply a title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
</head>
<body>
<div>Resultado IMC</div>
<?php
            $peso = $_REQUEST['peso'];
            $estatura = $_REQUEST['estatura'];
            $errores = "";
            
            if (!validarPeso($peso)) {
                $errores .= "Error peso";
            }
            
            if (!validarPeso($estatura)) {
                $errores .= "Error estatura";
            }
            
            if (strlen($errores)>0) {
                
                
            } else {
                //Cálculo
                $imc = calculoIMC($masa, $estatura);
                $clasificacion = clasificacionIMC($imc);
                //presentación
                echo "IMC = ".$imc;
                echo "<br>";
                echo "Clasificación = ".$clasificacion;
            }
        ?>
</body>
</html>