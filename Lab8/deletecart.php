<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

$cidToDelete = $_POST['cid'];
$sql = "DELETE FROM cart WHERE id = '$cidToDelete'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location:showCart.php");
}
else {
    echo "Delete failed!";
}
?>