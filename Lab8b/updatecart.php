<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R_lab8");

$pidToUpdate = $_POST['pid'];
$newQty = $_POST['newQty'];
$sql = "UPDATE cart SET qty = '$newQty' WHERE id = '$pidToUpdate'";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location:showCart.php");
} else {
    echo "Update failed!";
}
?>