<?php 
$u = $_POST['username']; // name of the input field is ’username’
$p = $_POST['password'];

$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

$sql           = "SELECT * FROM userinfo WHERE name = '$u' and pass='$p'  ";
$search_result = mysqli_query($conn, $sql); // search table NOW!

// Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if ($userfound >= 1) {
	session_start();
	$_SESSION['MM_Username'] = $u;

    // User record is found in the userinfo table
    header("Location:country_menu.php");
} 
else {
// User record is NOT found in the userinfo table
    header("Location:login.php"); // go back to login page
}

?>