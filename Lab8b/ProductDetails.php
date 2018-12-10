<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
session_start();
$conn = mysqli_connect("localhost", "root", "","db185563r_lab8" );


$selected_code = $_GET['id'];
$sql = "SELECT * FROM product WHERE id='$selected_code'";
$selectedProduct = mysqli_query($conn, $sql);

$product = mysqli_fetch_assoc($selectedProduct);
?>
</head>

<body>
    <h1>Product Detail Page</h1>

    <p>
        <?php echo $product['name'];?>
    </p>
    <img src="images/<?php echo $product['picture'];?>">

    <p>Category:
        <?php echo $product['category'];?>
    </p>

    <p>Description:
        <?php echo $product['description'];?>
    </p>

    <p>Price: $
        <?php echo number_format((float)$product['price'], 2, '.', '');?>
    </p>

    <form method="POST" action="insert_record.php">
        <button type="submit">Add to Cart</button>
        <input hidden value="<?php echo $product['name'] ?>" type="text" name="pname">
        <input hidden value="<?php echo $product['price'] ?>" type="text" name="pcost">
        <input hidden value="<?php echo $product['picture'] ?>" type="text" name="pimg">
    </form>
</body>

</html>