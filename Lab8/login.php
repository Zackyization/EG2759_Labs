<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page - 185563R</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="checklogin.php">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username"><p>
  <label for="password">Password:</label>
  <input type="text" name="password" id="password"><p>
    <input type="submit" name="submit" id="submit" value="Login">

  <?php if(!isset($_GET['fail'])) echo "<b>Invalid username or password</b>";?>

</form>
</body>
</html>