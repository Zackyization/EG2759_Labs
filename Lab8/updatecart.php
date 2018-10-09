<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

$cidToUpdate = $_POST['cid'];
$newQty = $_POST['newQty'];
$sql = "UPDATE cart SET qty = '$newQty' WHERE id = '$cidToUpdate'";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location:showCart.php");
} else {
    echo "Update failed!";
}
?>