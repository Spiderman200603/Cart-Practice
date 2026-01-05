<?php
include 'session_init.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];  

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty']++;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $name,
            'price' => $price,
            'qty' => 1
        ];
    }


header("Location: products.php");
exit;
?>