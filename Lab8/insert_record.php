<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

$ctry_i = $_POST['ctry'];
$cost_i = $_POST['cost'];
$imgname_i = $_POST['imgname'];
$uname_i = $_SESSION['MM_Username'];

$sql = "INSERT INTO cart (cname,ccost,cimage,username) 
VALUES ('$ctry_i', '$cost_i', '$imgname_i', '$uname_i')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location:showCart.php");
}
else {
    echo "Could not add to cart!";
}
?>