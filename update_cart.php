<?php
include "session_init.php";

$id = $_POST['id'];
$action = $_POST['action'];

if ($action == 'plus') {
    $_SESSION['cart'][$id]['qty']++;
}

if ($action == 'minus') {
    $_SESSION['cart'][$id]['qty']--;
}

if ($_SESSION['cart'][$id]['qty'] <= 0) {
    unset($_SESSION['cart'][$id]);
}

header("Location: view_cart.php");
?>