<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Cart Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        session_start();
        $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");
        $username = $_SESSION['MM_Username'];

        $sql = "SELECT * FROM cart WHERE username = '$username'";
        $mycart = mysqli_query($conn, $sql);

    ?>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>
        <?php echo $username; ?>&apos;s Shopping Cart
    </h1>

    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th>Unit Cost</th>
                <th>Quantity</th>
                <th>Total Cost</th>
            </tr>

        </thead>
        <tbody>
            <?php while ($cart_items = mysqli_fetch_assoc($mycart)) {?>
            <tr>
                <td><?php echo $cart_items['cname'] ?></td>
                <td>&dollar;<?php echo $cart_items['ccost'] ?></td>
                <td><?php echo $cart_items['qty'] ?></td>
                <td>&dollar;<?php echo $cart_items['ccost'] * $cart_items['qty'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <span>Grand Total: &dollar;
        <?php //TODO:Calculate the total cost 
        $totalCost = 0;
            while ($cart_items = mysqli_fetch_assoc($mycart)) {
                $totalCost += ($cart_items['ccost'] * $cart_items['qty']);
            }
        
            echo $totalCost;
        ?>
    </span>
</body>

</html>