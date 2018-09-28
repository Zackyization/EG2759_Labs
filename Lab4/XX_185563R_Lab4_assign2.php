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

    <form id="registration_form" action="XX_185563R_Lab4_assign2.php" onsubmit="event.preventDefault(); checkPassword();"
        method="POST">
        <label>User Name:</label>
        <input name="username" type="text" required>

        <br>

        <label>Password:</label>
        <input id="password" type="password" required>

        <br>

        <label>Confirm Password:</label>
        <input id="confirmPassword" type="password" required>

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

    <script>
        function checkPassword() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            var errorMessage = document.getElementById('error_message');
            var registrationForm = document.getElementById('registration_form');

            if (password != confirmPassword) {
                errorMessage.hidden = false;
                return false;
            }

            registrationForm.style.visibility = "hidden";
            return true;
        }
        var registrationForm = document.getElementById('registration_form');


        if (registrationForm.addEventListener) {
            registrationForm.addEventListener("submit", callback, false);  //Modern browsers
        } else if (registrationForm.attachEvent) {
            registrationForm.attachEvent('onsubmit', callback);            //Old IE
        }
    </script>

    <?php
    if (isset($_POST['username'])) {
        echo "<p>Hello user " . $_POST['username'] . "</p>";
        echo "<p>Your name is " . $_POST['name'] . "</p>";  
        echo "<p>Hello user " . $_POST['username'] . "</p>";
        echo "<p>You live in " . $_POST['address'] . "</p>";
        echo "<p>You are a " . $_POST['gender'] . " of age " . $_POST['age'] . "</p>";
        echo "<p>Your favourite city is " . $_POST['city'] . "</p>";
    }
    ?>
</body>

</html>