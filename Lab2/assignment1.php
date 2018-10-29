<!DOCTYPE html>
<html>

<head>
    <title>Singapore's First 24 hour Fruits Stall - Process Order Page by 185563R</title>
</head>

<body>
    <h2>Singapore's 1st 24 Hour Fruits Stall</h2>
    <h3>Order Status</h3>

    <form method="POST" action="#">
        Time to Deliver: <select name="TOD">
            <option value="T1">Morning</option>
            <option value="T2">Afternoon</option>
            <option value="T3" selected>Anytime</option>
            <option value="T4">Evening</option>
        </select>
        <input type="submit" value="Buy" />

    </form>

    <p>Your order is as follows</p>
    <?php

if (isset($_POST["TOD"])) {
    $apple = 1;
    $orange = 5;
    $mango = 2;
    $pear = 5;

    //delivery
    $TimeOfDay = $_POST["TOD"]; //t1 t2 t3 t4

    $totalQty = $apple + $orange + $mango + $pear;

    Define("applePrice", 1);
    Define("orangePrice", 1.20);
    Define("mangoPrice", 1.50);
    Define("pearPrice", 1.90);

    $totalPrice = applePrice * $apple + orangePrice * $orange + mangoPrice * $mango + pearPrice * $pear;

    $discount = 0;

    if ($totalQty >= 10 and $totalQty < 20) {
        $discount = 1;
    } else if ($totalQty >= 20 and $totalQty < 30) {
        $discount = 3;
    } else if ($totalQty >= 30) {
        $discount = 5;
    }

    $save = $totalPrice * $discount / 100;

    $priceAftDiscount = $totalPrice - $save;

    $GST = $priceAftDiscount * 107 / 100;

    switch ($TimeOfDay) {
        case "T1"; //same as if else "if tod = t1"
            $msg = "in the morning.";
            break;
        case "T2";
            $msg = "in the afternoon.";
            break;

        case "T4";
            $msg = "in the evening.";
            break;

        default:
            $msg = "at anytime.";
            break;
    }
} //end of if statement isset
else {
    echo "You need to fill the order form first!";
}
?>

    <?php
if (isset($_POST['TOD'])) {
    echo $apple . " apples<br>";
    echo $orange . " oranges<br>";
    echo $mango . " mangos<br>";
    echo $pear . " pears<br><br>";

    echo "<p>Total Quantity is $totalQty</p>";
    echo "<p>Total Price is $" . number_format($totalPrice, 2) . "</p>"; //number_format 2 decimal place
    echo "<p>Discount amount ($discount%) is $" . number_format($save, 2) . "</p>";
    echo "<p>Total price after discount is $" . number_format($priceAftDiscount, 2) . "</p>";
    echo "<p>Total price including 7% GST is $" . number_format($GST, 2) . "</p>";
    echo "<p>You have chosen to collect your goods $msg</p>";
}
?>
</body>

</html>