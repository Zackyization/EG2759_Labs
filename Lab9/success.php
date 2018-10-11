<?php
echo "SUCCESS!";

session_start();
if (!isset($_SESSION['MM_Username'])) {
    header("Location:login.php");
}
?>