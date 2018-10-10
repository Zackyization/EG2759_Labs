<?php
session_start();

if ($_POST['cancel']) {
    header("Location:showCart.php");
}

if ($_POST['confirm']) {
    $sql = //TODO: Insert into a new table, "transact"
}
?>