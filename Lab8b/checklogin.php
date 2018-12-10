<?php 
	$u = $_POST['username'] ;   // name of the input field is ’username’
	$p = $_POST['password'] ;
	
	$conn = mysqli_connect("localhost", "root", "","db185563r_lab8" );	


$sql = "SELECT * FROM userinfo WHERE name = '$u' and pass='$p'  " ; 
$search_result = mysqli_query($conn , $sql);    // search table NOW!

// Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if($userfound >= 1) {
		// User record is found in the userinfo table
		session_start();
		$_SESSION['MM_Username'] = $u;
		
		header("Location:main.php");  	// go to main.php
}
else {
		// User record is NOT found in the userinfo table
		header("Location:login.php?fail=1");  	// go back to login page
}
	
	
?>