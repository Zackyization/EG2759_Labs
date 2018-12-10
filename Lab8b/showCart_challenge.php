<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Cart Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        session_start();
        $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R_lab8");
        $username = $_SESSION['MM_Username'];

        $sql = "SELECT * FROM cart WHERE username = '$username'";
        $mycart = mysqli_query($conn, $sql);
    ?>

    <style>
        /* table,
        th,
        td {
            border: 1px solid black;
        } */

        .productBox {
            border-color: lightgreen;
            border-style: solid;
            border-width: 3px;
            display: inline-block;
            padding: 3px;
            margin-right: 2%;
            margin-bottom: 2%;
        }

        .totalBox {
            border-color: darkgreen;
            border-style: solid;
            border-width: 3px;
            display: block;
            padding: 3px;
            margin-right: 2%;
            margin-bottom: 2%;
        }

        .productBox p {
            margin: 0;
        }
    </style>
</head>

<body>
    <h1>
        <?php echo $username; ?>&apos;s Shopping Cart
    </h1>

    <?php while ($cart_items = mysqli_fetch_assoc($mycart)) {?>
    <div class="productBox">
        <p>Product:
            <?php echo $cart_items['pname']; ?>
        </p>
        <p>Cost: &dollar;
            <?php echo $cart_items['pcost']; ?>
        </p>
        <p>Qty:
            <?php echo $cart_items['qty']; ?>
        </p>
    </div>

    <?php }?>


    <div class="totalBox">Grand Total: &dollar;
        <?php
            $cart = mysqli_query($conn, $sql);
            $totalCost = 0;
            while ($items = mysqli_fetch_assoc($cart)) {
                $totalCost += $items['pcost'] * $items['qty'];
            }
            
            echo number_format($totalCost);
        ?>

        <form action="checkout.php">
            <button type="submit">Checkout</button>
        </form>
    </div>

    <a href="main.php">Main</a>
    <a href="checkout.php">Checkout</a>
</body>

</html>