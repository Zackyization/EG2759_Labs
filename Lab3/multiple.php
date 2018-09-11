<?php
function multiple($name, $password, $action) {
    if ($action == "login") {
        //Perform login operations
        echo "Welcome $name -- Login Success using password $password";
    } else if ($action == "register") {
        //Perform register steps
        echo "$name registered. Proceed to login with password $password";
    } else if ($action == "nyp") {
        //Redirect to NYP site
        header("Location: http://www.nyp.edu.sg");
    } else {
        echo "Invalid action";
    }
}

// multiple('John', "reg_password", 'register');
// multiple('John', "login_mypassword", 'login');
// multiple('John', "useless_password", 'nyp');
multiple('John', "mypassword", 'display');

?>