<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");
$username = $_SESSION['MM_Username'];

if ($_POST['confirm']) {
    //retrieve cart items
    $cart_sql = "SELECT * FROM cart WHERE username = '$username'";
    $cart = mysqli_query($conn, $cart_sql);

    while ($cart_items = mysqli_fetch_assoc($cart)) {
        $country = $cart_items['cname'];
        $cost = $cart_items['ccost'];
        $qty = $cart_items['qty'];
        $image = $cart_items['cimage'];
        $username = $cart_items['username'];

        //insert into transact table
        $transact_sql = "INSERT INTO transact (cname,ccost,qty,cimage,username) VALUES ('$country','$cost','$qty','$image','$username')";

        $result = mysqli_query($conn, $transact_sql);
        if (!$result) {
            echo "Transact query failed!";
        }
    }

} 
else if ($_POST['cancel']) {
    header("Location:showCart.php");
}
?>