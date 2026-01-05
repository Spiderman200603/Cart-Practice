<?php
include 'session_init.php';

    $id = $_GET['id'];

    unset($_SESSION['cart'][$id]);

header("Location: view_cart.php");
exit ();
?>