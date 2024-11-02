<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto1 = $_POST['producto1'];
    $precio1 = (float)$_POST['precio1'];
    
    $producto2 = $_POST['producto2'];
    $precio2 = (float)$_POST['precio2'];
    
    $producto3 = $_POST['producto3'];
    $precio3 = (float)$_POST['precio3'];

    // Calcular la suma de precios
    $totalSinDescuento = $precio1 + $precio2 + $precio3;
    
    // Aplicar descuento del 16%
    $descuento = $totalSinDescuento * 0.16;
    $totalConDescuento = $totalSinDescuento - $descuento;

    // Mostrar resultados
    echo "<h1>Resumen de Productos</h1>";
    echo "<p>Producto 1: $producto1 - Precio: $precio1</p>";
    echo "<p>Producto 2: $producto2 - Precio: $precio2</p>";
    echo "<p>Producto 3: $producto3 - Precio: $precio3</p>";
    echo "<h2>Total sin descuento: $totalSinDescuento</h2>";
    echo "<h2>Descuento (16%): $descuento</h2>";
    echo "<h2>Total a pagar: $totalConDescuento</h2>";
}
?>
