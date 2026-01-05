<?php include 'session_init.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h1>Available Products</h1>

<!-- Mobile -->
<form method="post" action="cart.php">
    <h3>Mobile</h3>
    <p>Price: 50000</p>
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="name" value="Mobile">
    <input type="hidden" name="price" value="50000">
    <button type="submit">Add to Cart</button>
</form>

<hr>

<!-- Laptop -->
<form method="post" action="cart.php">
    <h3>Laptop</h3>
    <p>Price: 120000</p>
    <input type="hidden" name="id" value="2">
    <input type="hidden" name="name" value="Laptop">
    <input type="hidden" name="price" value="120000">
    <button type="submit">Add to Cart</button>
</form>

<hr>

<!-- PC -->
<form method="post" action="cart.php">
    <h3>PC</h3>
    <p>Price: 80000</p>
    <input type="hidden" name="id" value="3">
    <input type="hidden" name="name" value="PC">
    <input type="hidden" name="price" value="80000">
    <button type="submit">Add to Cart</button>
</form>

<br>
<a href="view_cart.php">View Cart</a>

</body>
</html>