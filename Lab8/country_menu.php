<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Country List – 185563R</title>
  <?php
session_start();

$filter = "";
if (isset($_POST['Cont'])) {
    $cont_selected = $_POST['Cont'];
    $filter        = " WHERE Continent ='$cont_selected'";
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
  <br>
  <table width="200" border="1">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Country</th>
      <th scope="col">Continent</th>
      <th scope="col">Size</th>
      <th scope="col">Population</th>
    </tr>

    <?php While ( $one_country = mysqli_fetch_assoc($country_list)  ) { ?>

    <tr>
      <td>
        <?php echo $one_country['Code']; ?>
      </td>
      <td>
        <?php echo "<a href='CountryDetails.php?id=" . $one_country['Code'] . "'>" . $one_country['Name'] . "</a>"; ?>
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

    <?php }  ?>

  </table>
  <br />

</body>

</html>