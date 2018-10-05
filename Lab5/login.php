<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page - 185563R</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="checklogin.php" method="post">
        <label>Username:</label>
        <input name="uname" type="text">

        <br>

        <label>Password:</label>
        <input name="pw" type="password">

        <br>

        <button type="submit">Login</button>
        <?php 
        if ()
        echo "<b>Invalid username or password</b>"; 
        ?>
    </form>
</body>

</html>