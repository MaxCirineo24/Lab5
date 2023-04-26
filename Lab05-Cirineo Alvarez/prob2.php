<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/2.css">
    <title>Problema2-php</title>
</head>
<body>
    <div class="php">
    <?php  

    if(isset($_POST['calcular'])){

        $precio_anterior = $_POST['precio_anterior'];
        $cantidad_unidades = $_POST['cantidad_unidades'];

        $porcentaje_descuento = 5;
        $nuevo_precio = $precio_anterior * (100 - $porcentaje_descuento) / 100;

        $importe_de_compra = $cantidad_unidades * $nuevo_precio;
        $importe_del_descuento = $importe_de_compra * ($porcentaje_descuento / 100);
        $importe_a_pagar = $importe_de_compra - $importe_del_descuento;

        $obsequio = $cantidad_unidades * 2 ;

        echo "<h2>Resultados:</h2>";
        echo "<p>Nuevo precio: S/. " . $nuevo_precio . "</p>";
        echo "<p>Importe de la compra: S/. " . $importe_de_compra . "</p>";
        echo "<p>Importe del descuento: S/. " . $importe_del_descuento . "</p>";
        echo "<p>Importe a pagar: S/. " . $importe_a_pagar . "</p>";
        echo "<p>Obsequio de caramelos: " . $obsequio . "</p>";
    }

    ?>
    </div>
</body>
</html>
