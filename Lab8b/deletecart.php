<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R_lab8");

$pidToDelete = $_POST['pid'];
$sql = "DELETE FROM cart WHERE id = '$pidToDelete'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location:showCart.php");
}
else {
    echo "Delete failed!";
}
?>