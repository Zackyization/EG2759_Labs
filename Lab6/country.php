<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Country List - 185563R</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <?php
    //To open connection and select databse
    $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

    //Write an SQL statement to extract all countries from country table
    $sql_country = "SELECT * FROM country";

    //execute an SQL statement
    //$country_list contains all the countries in the country table
    $country_list = mysqli_query($conn, $sql_country);
    ?>
</head>

<body>
    <h1>Country Information</h1>

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
            <?php while ($one_country = mysqli_fetch_assoc($country_list)) { ?>

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
            ?>
        </tbody>
    </table>
</body>

</html>