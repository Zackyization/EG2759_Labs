<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Country List – 123456N</title>
  <?php
session_start();

$filter ="";
if(isset($_POST['Cont']))
{
	$cont_selected = $_POST['Cont'];
	$filter = " WHERE category ='$cont_selected'";
}

//open connection and select database
$conn = mysqli_connect("localhost", "root", "","db185563r_lab8" );

//Write an SQL statement to extract data from product table
$sql_ = "SELECT * FROM product" . $filter;

//execute the SQL statement
$product_list = mysqli_query ( $conn, $sql_);

//Write an SQL statement to extract a list of category from product table
$sql_category = "SELECT DISTINCT category FROM product";

//execute the SQL statement -- $category_list contains all the category in the product table
$category_list = mysqli_query ( $conn, $sql_category);

// close sql connection
mysqli_close($conn);

?>

</head>

<body>
  <h2>Country Information</h2>
  <form id="form1" name="form1" method="post">
    Select category:
    <select name="Cont" id="Cont">
      <?php While ( $one_category= mysqli_fetch_assoc($category_list)  ) { ?>

      <option value="<?php echo $one_category['category']; ?>">
        <?php echo $one_category['category']; ?>
      </option>

      <?php } ?>
    </select>
    <input type="submit" name="submit" id="submit" value="Show Product">
  </form>
  <br>
  <table width="200" border="1">
    <tr>
      <th scope="col">name</th>
      <th scope="col">category</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">picture</th>
    </tr>

    <?php While ( $one_product = mysqli_fetch_assoc($product_list)  ) { ?>

    <tr>
      <td>
        <a href="ProductDetails.php?id=<?php echo $one_product['id']?>">
          <?php echo $one_product['name']; ?>
        </a>
      </td>
      <td>
        <?php echo $one_product['category']; ?>
      </td>
      <td>
        <?php echo $one_product['description']; ?>
      </td>
      <td>
        <?php echo $one_product['price']; ?>
      </td>
      <td><input type=image width="100" height="100" src="images/<?php echo $one_product['picture']; ?>" </td> </tr>
          <?php } ?>

  </table>
  <br />

</body>

</html>