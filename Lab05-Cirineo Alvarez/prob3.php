<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/3.css">
    <title>Problema3-php</title>
</head>
<body>
    <div class="php">
    <?php  
    if(isset($_POST['calcular'])){

        $tarifa = $_POST['tarifa'];
		$numero_dias = $_POST['numero_dias'];

        $importe_bruto = $tarifa * $numero_dias;
        $importe_descuento = $importe_bruto * 0.15;
        $importe_neto = $importe_bruto - $importe_descuento;
        $obsequios = $numero_dias * 3;
 
        echo "<h2>Resultados:</h2>";
		echo "<p>Importe bruto: S/. " . number_format($importe_bruto, 2) . "</p>";
		echo "<p>Importe del descuento: S/. " . number_format($importe_descuento, 2) . "</p>";
		echo "<p>Importe neto: S/. " . number_format($importe_neto, 2) . "</p>";
		echo "<p>Cantidad de lapiceros de obsequio: " . $obsequios . "</p>";
    }

    ?>
    </div>
</body>
</html>
