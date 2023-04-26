<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1-php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="php">
    <?php  
    if(isset($_POST['calcular'])){

        $sueldo_basico = 600;
        $comision = 0;
        $bonificacion = 0;
        $descuento = 0;
        $sueldo_neto = 0;

        $total_vendido = $_POST['total_vendido'];
        $hijos_escolar = $_POST['hijos_escolar'];

        $comision =  $total_vendido * 0.075;

        $bonificacion = $hijos_escolar * 50;

        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;

        $descuento = $sueldo_bruto * 0.11;

        $sueldo_neto =  $sueldo_bruto - $descuento;

        echo "<h2>Resultados:</h2>";
        echo "<p>Comisión: S/. " . number_format($comision, 2) . "</p>";
        echo "<p>Bonificación: S/. " . number_format($bonificacion, 2) . "</p>";
        echo "<p>Sueldo bruto: S/. " . number_format($sueldo_bruto, 2) . "</p>";
        echo "<p>Descuento: S/. " . number_format($descuento, 2) . "</p>";
        echo "<p>Sueldo neto: S/. " . number_format($sueldo_neto, 2) . "</p>";
    }
    ?>
    </div>
</body>
</html>
