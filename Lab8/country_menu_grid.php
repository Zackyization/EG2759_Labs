<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Country List Grid - 185563R</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        #form1 {
            margin-bottom: 10px;
        }

        .countryBox {
            border-color: lightgreen;
            border-style: solid;
            border-width: 3px;
            display: inline-block;
            padding: 3px;
            margin-right: 2%;
            margin-bottom: 2%;
        }

        .countryBox p {
            margin: 0;
        }
        
    </style>

    <?php
//TODO: Make a grid of the country info page
session_start();

$filter = "";
if (isset($_POST['Cont'])) {
    $cont_selected = $_POST['Cont'];
    $filter = " WHERE Continent ='$cont_selected'";
}

//open connection and select database
$conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

//Write an SQL statement to extract all countries from country table
$sql_country = "SELECT * FROM country" . $filter;

//execute the SQL statement
$country_list = mysqli_query($conn, $sql_country);

//Write an SQL statement to extract a list of continents from country table
$sql_continent = "SELECT DISTINCT Continent FROM country";

//execute the SQL statement -- $continent_list contains all the countries in the country table
$continent_list = mysqli_query($conn, $sql_continent);
?>
</head>

<body>
    <h2>Country Information</h2>
    <form id="form1" name="form1" method="post">
        Select Continent:
        <select name="Cont" id="Cont">
            <?php While ( $one_continent = mysqli_fetch_assoc($continent_list)  ) { ?>

            <option value="<?php echo $one_continent['Continent']; ?>">
                <?php echo $one_continent['Continent']; ?>
            </option>

            <?php } ?>
        </select>
        <input type="submit" name="submit" id="submit" value="Show Countries">
    </form>

    <?php while ($one_country = mysqli_fetch_assoc($country_list)) { ?>
    <div class="countryBox">
        <p>Code:
            <?php echo $one_country['Code']; ?>
        </p>
        <p>Country:
            <?php echo "<a href='CountryDetails.php?id=" . $one_country['Code'] . "'>" . $one_country['Name'] . "</a>"; ?>
        </p>
        <p>Continent:
            <?php echo $one_country['Continent']; ?>
        </p>
        <p>Size:
            <?php echo $one_country['SurfaceArea']; ?>
        </p>
    </div>

    <?php } ?>
</body>

</html>