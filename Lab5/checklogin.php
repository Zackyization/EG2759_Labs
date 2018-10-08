<?php
    $u = $_POST['uname']; //name of the username field is 'uname'
    $p = $_POST['pw']; //name of the password field is 'pw'

    $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

    $sql = "SELECT * FROM userinfo WHERE name = '$u' and pass ='$p'";
    $search_result = mysqli_query($conn,$sql); //search table NOW!

    //Return the number of rows in search result
    $userfound = mysqli_num_rows($search_result);

    if ($userfound >= 1) {
        //User record is found in the userinfo table
        header("Location:success.html"); //go to success.html
    }
    else {
        //User record is NOT found in the userinfo table
        // $_SERVER['ERROR'] = 1;
        header("Location:login.php?ERROR=1");
    }
?>