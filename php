php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product1 = $_POST['product1'];
    $price1 = $_POST['price1'];
    $product2 = $_POST['product2'];
    $price2 = $_POST['price2'];
    $product3 = $_POST['product3'];
    $price3 = $_POST['price3'];

    $totalPrice = $price1 + $price2 + $price3;
    $discount = 0.16;
    $totalToPay = $totalPrice - ($totalPrice * $discount);

    echo "<h1>Resumen de la compra</h1>";
    echo "<p>Producto 1: $product1 - Precio: $price1</p>";
    echo "<p>Producto 2: $product2 - Precio: $price2</p>";
    echo "<p>Producto 3: $product3 - Precio: $price3</p>";
    echo "<h2>Total sin descuento: $totalPrice</h2>";
    echo "<h2>Total a pagar con descuento: $totalToPay</h2>";
}
?>
