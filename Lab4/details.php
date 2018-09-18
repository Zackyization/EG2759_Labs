<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Page</title>
</head>

<body>
<?php
switch ($_GET['id']) {
    case "P":
        $img = "images/eiffel.jpg";
        break;

    case "L":
        $img = "images/bigben.jpg";
        break;

    case "SF":
        $img = "images/golden_gate.jpg ";
        break;

    case "NY":
        $img = "images/liberty.jpg";
        break;
}
?>

    <img src="<?php echo $img; ?>" width="165" height="250">
</body>

</html>