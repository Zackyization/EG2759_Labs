<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registering a Member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        label {
            display: inline-block;
            float: left;
            clear: left;
            width: 150px;
            text-align: left;
        }

        input {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <h2>Registering a member</h2>

    <hr>

    <form id="registration_form" action="M5_185563R_Lab4_assign2.php" method="POST">
        <label>User Name:</label>
        <input name="username" type="text" required>

        <br>

        <label>Password:</label>
        <input name="password" type="password" required>

        <br>

        <label>Confirm Password:</label>
        <input name="confirmPassword" type="password" required>

        <p id="error_message" hidden style="color: red;">The passwords do not match.</p>

        <hr>

        <label>Name:</label>
        <input name="name" type="text" required>

        <br>

        <label>Address:</label>
        <input name="address" type="text" required>

        <br>

        <label>Gender:</label>
        <input name="gender" type="radio" value="male">Male
        <input name="gender" type="radio" value="female">Female

        <br>
        <br>

        <label>Age Group:</label>
        <select name="age">
            <option value="Below 16">Below 16</option>
            <option value="16-20">16-20</option>
            <option value="21-30">21-30</option>
            <option value="31-40">31-40</option>
            <option value="Above 40">Above 40</option>
        </select>

        <br>
        <br>

        <label>My preferred city is </label>
        <select name="city" multiple>
            <option value="London">London</option>
            <option value="Paris">Paris</option>
            <option value="Rome">Rome</option>
        </select>

        <br>
        <br>

        <input type="submit" value="Submit">
    </form>

    <?php

if (isset($_POST['username'])) {

    if ($_POST['password'] == $_POST['confirmPassword']) {
        //redirect
        $user = $_POST['username'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        header("Location:display.php?username=$user&name=$name&address=$address&gender=$gender&age=$age&city=$city");

    } else {
        echo "wrong password";
    }

}
?>
</body>

</html>