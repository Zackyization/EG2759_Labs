<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R_lab8");

$pname_i = $_POST['pname'];
$cost_i = $_POST['pcost'];
$imgname_i = $_POST['pimg'];
$uname_i = $_SESSION['MM_Username'];

$sql = "INSERT INTO cart (pname,pcost,pimage,username) 
VALUES ('$pname_i', '$cost_i', '$imgname_i', '$uname_i')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location:showCart.php");
}
else {
    echo "Could not add to cart!";
}
?>