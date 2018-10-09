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
        <div>
            <label>Population: </label>
            <?php echo $country['Population'];?>
            
            <br>

            <label>Size: </label>
            <?php echo number_format($country['SurfaceArea']) . " km<sup>2</sup>";?>

            <br>

            <label>Life Expectancy: </label>
            <?php echo $country['LifeExpectancy'];?>

            <br>

            <label>Cost: </label>
            <?php echo "$" . number_format($country['GNP']); ?>

            <form method="POST" action="insert_record.php">
                <button type="submit">Add to cart</button>
                <input hidden value="<?php echo $country['Name'] ?>" type="text" name="ctry">
                <input hidden value="<?php echo $country['GNP'] ?>" type="text" name="cost">
                <input hidden value="<?php echo $country['image_file'] ?>" type="text" name="imgname">
            </form>
        </div>

    </span>
</body>

</html>