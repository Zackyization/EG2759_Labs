<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R_lab8");
$username = $_SESSION['MM_Username'];

if ($_POST['confirm']) {
    //retrieve cart items
    $cart_sql = "SELECT * FROM cart WHERE username = '$username'";
    $cart = mysqli_query($conn, $cart_sql);

    while ($cart_items = mysqli_fetch_assoc($cart)) {
        $product = $cart_items['pname'];
        $cost = $cart_items['pcost'];
        $qty = $cart_items['qty'];
        $image = $cart_items['pimage'];
        $username = $cart_items['username'];

        //insert into transact table
        $transact_sql = "INSERT INTO transact (pname,pcost,qty,pimage,username) VALUES ('$product','$cost','$qty','$image','$username')";

        $result = mysqli_query($conn, $transact_sql);
        if (!$result) {
            echo "Transact query failed!";
        }

        $delete_sql = "DELETE FROM cart WHERE username = '$username' AND pname = '$product'";
        $delete_result = mysqli_query($conn, $delete_sql);
        if (!$delete_result) {
            echo "Delete query failed!";
        }
    }

    echo "<h1>Check out successful!</h1>";
} 
else if ($_POST['cancel']) {
    header("Location:showCart.php");
}
?>