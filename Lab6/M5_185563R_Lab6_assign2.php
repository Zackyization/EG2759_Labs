<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Country List Menu - 185563R</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <?php
    $filter = "";
    if (isset($_GET['Cont'])) {
        $cont_selected = $_GET["Cont"];
        $filter = " WHERE Continent = '$cont_selected'";
    } 

    //To open connection and select databse
    $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

    //Write an SQL statement to extract all countries from country table
    $sql_country = "SELECT * FROM country" . $filter;
    

    //execute an SQL statement
    //$country_list contains all the countries in the country table
    $country_list = mysqli_query($conn, $sql_country);

    //Write an SQL statement to extract a list of continents from the country table
    $sql_continent = "SELECT DISTINCT Continent FROM country";
    $continent_list = mysqli_query($conn, $sql_continent);
    ?>
</head>

<body>
    <h1>Country Information</h1>

        <span>Select Continent:
            <?php
                    while ($one_continent = mysqli_fetch_assoc($continent_list)) {
                        echo "<a href=" . "M5_185563R_Lab6_assign2.php?Cont=" . urlencode($one_continent['Continent']) .  ">" . $one_continent['Continent'] . "</a>";
                        echo "&nbsp;";
                    }
?>
        </span>

    <br>

    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Country</th>
                <th>Continent</th>
                <th>Size</th>
                <th>Population</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (isset($_GET['Cont'])) {

            while ($one_country = mysqli_fetch_assoc($country_list)) { 
            ?>

            <tr>
                <td>
                    <?php echo $one_country['Code']; ?>
                </td>
                <td>
                    <?php echo $one_country['Name']; ?>
                </td>
                <td>
                    <?php echo $one_country['Continent']; ?>
                </td>
                <td>
                    <?php echo $one_country['SurfaceArea']; ?>
                </td>
                <td>
                    <?php echo $one_country['Population']; ?>
                </td>
            </tr>
            <?php 
            }
        } 
            ?>
        </tbody>
    </table>
</body>

</html>