<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Country Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        session_start();
        $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

        $selected_code   = $_GET['id']; //get the country code that was passed over
        $sql             = "SELECT * FROM country WHERE Code='$selected_code'";
        $selectedCountry = mysqli_query($conn, $sql);

        $country = mysqli_fetch_assoc($selectedCountry);
    ?>
</head>

<body>
    <h1>Country Details Page</h1>
    <h2>
        <?php echo $country['Name']; ?>
    </h2>

    <span>
    <img src="<?php echo " flag_images/" . $country['Name'] . ".png" ; ?>">
        <div style="display:inline;">
            <label>Population: </label>
            <?php echo $country['Population'];?>
            
            <br>

            <label>Size: </label>
            <?php echo $country['SurfaceArea'];?>

            <br>

            <label>Life Expectancy: </label>
            <?php echo $country['LifeExpectancy'];?>

            <!-- LEFT OFF HERE, lab8 page 3 -->
        </div>

    </span>
</body>

</html>