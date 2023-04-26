<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/4.css">
    <title>Problema4-php</title>
</head>
<body>
    <div class="php">
        <?php  
        if(isset($_POST['calcular'])){
            $cono = $_POST['cono'];
            $cantidad_conos = $_POST['cantidad_conos'];

            $importe_de_compra = $cono * $cantidad_conos;

            $primero_descuento =  $importe_de_compra * 0.05;

            $importe_de_compra_descuento1 = $importe_de_compra - $primero_descuento;

            $segundo_descuento =  $importe_de_compra_descuento1 * 0.05;

            $importe_del_descuento = $primero_descuento + $segundo_descuento;

            $importe_a_pagar = $importe_de_compra - $importe_del_descuento;

            echo "<h2>Resultados:</h2>";
            echo "<p>Importe de la compra: S/. " . number_format($importe_de_compra, 2) . "</p>";
            echo "<p>Importe del descuento total: S/. " . number_format($importe_del_descuento, 2) . "</p>";
            echo "<p>Importe a pagar : S/. " . number_format($importe_a_pagar, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
