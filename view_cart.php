<?php include 'session_init.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>

<h1>Shopping Cart</h1>

<?php if (empty($_SESSION['cart'])) { ?>
    <p>Cart is empty...</p>
<?php 
} else { ?>

<table border="1" cellpadding="10">
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    <?php
    $grandTotal = 0;

    foreach ($_SESSION['cart'] as $id => $item) {
        $total = $item['price'] * $item['qty'];
        $grandTotal += $total;
    ?>
    <tr>
        <td><?= $item['name']; ?></td>
        <td><?= $item['price']; ?></td>
        <td>
                <form method="post" action="update_cart_qty.php">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="number" name="qty" value="<?= $item['qty'] ?>" min="1">
                    <button type="submit">Update</button>
                </form>
            </td>
        <td><?= $total; ?></td>
        <!-- <td>
            <a href="remove.php?id=<?= $id; ?>">Remove</a>
        </td> -->
        <td>
            <form method = "post" action="update_cart.php" style="disply: inline">
                <input type="hidden" name="id" value = "<?=$id?>" >
                <input type="hidden" name = "action" value= "plus">
                <button>+</button>
            </form>
             <form method = "post" action="update_cart.php" style="disply: inline">
                <input type="hidden" name="id" value = "<?=$id?>" >
                <input type="hidden" name = "action" value= "minus">
                <button>-</button>
            </form>
        </td>
    </tr>
    <?php } ?>

    <tr>
        <td colspan="3"><b>Grand Total</b></td>
        <td colspan="2"><b><?= $grandTotal; ?></b></td>
    </tr>
</table>

<?php } ?>

<br>
<a href="products.php">Add More Products</a>

</body>
</html>