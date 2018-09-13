<?php
function multiple($name, $password, $action) {
    // if ($action == "login") {
    //     //Perform login operations
    //     echo "Welcome $name -- Login Success using password $password";
    // } else if ($action == "register") {
    //     //Perform register steps
    //     echo "$name registered. Proceed to login with password $password";
    // } else if ($action == "nyp") {
    //     //Redirect to NYP site
    //     header("Location: http://www.nyp.edu.sg");
    // } else {
    //     echo "Invalid action";
    // }

    switch ($action) {

        case "login":
        echo "Welcome $name -- Login Success using password $password";
        break;

        case "register":
        echo "$name registered. Proceed to login with password $password";
        break;

        case "nyp":
        header("Location: http://www.nyp.edu.sg");
        break;

        default:
        echo "Invalid action";
        break;
    }
}

// multiple('John', "reg_password", 'register');
// multiple('John', "login_mypassword", 'login');
// multiple('John', "useless_password", 'nyp');
multiple('John', "mypassword", 'display');

?>