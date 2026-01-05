<?php
include "session_init.php";

$id  = $_POST['id'];
$qty = $_POST['qty'];

if ($qty < 1) {
    $qty = 1;
}

$_SESSION['cart'][$id]['qty'] = $qty;

header("Location: view_cart.php");
exit();
?>