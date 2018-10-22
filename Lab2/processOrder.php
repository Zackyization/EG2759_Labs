<!DOCTYPE html>
<html>

<head>
    <title>Order Form 185563R</title>
</head>

<body>
    <h2>Singapore's 1st 24 Hour Fruits Stall</h2>
    <h3>Order Form</h3>

    <form method="POST" action="processOrder.php">
        Apple: <select name="appleQty">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br> Orange: <select name="orangeQty">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br> Mango: <select name="mangoQty">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br> Pear: <select name="pearQty">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <br> Time to Deliver: <select name="TOD">
            <option value="T1">Morning</option>
            <option value="T2">Afternoon</option>
            <option value="T3" selected>Anytime</option>
            <option value="T4">Evening</option>
        </select>
        <input type="submit" value="Buy" />

    </form>

    <p>Your order is as follows</p>
</body>

</html>

<?php

if (isset($_POST['appleQty'])) {
    $apple = $_POST["appleQty"]; //get values from form
    $orange = $_POST["orangeQty"];
    $mango = $_POST["mangoQty"];
    $pear = $_POST["pearQty"];

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
        $discount = 2;
    } else if ($totalQty >= 20 and $totalQty < 30) {
        $discount = 5;
    } else if ($totalQty >= 30) {
        $discount = 10;
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
        case "T3";
            $msg = "at anytime.";
            break;
        case "T4";
            $msg = "in the evening.";
            break;
    }
} //end of if statement isset
else {
    echo "You need to fill the order form first!";
}
?>

<?php
if (isset($_POST['appleQty'])) {
    echo $apple . " apples<br>";
    echo $orange . " oranges<br>";
    echo $mango . " mangos<br>";
    echo $pear . " pears<br><br>";

    echo "<p>Total Quantity : $totalQty</p>";
    echo "<p>Total Price : $" . number_format($totalPrice, 2) . "</p>"; //number_format 2 decimal place
    echo "<p>You Saved ($discount%) : $" . number_format($save, 2) . "</p>";
    echo "<p>Price After Discount : $" . number_format($priceAftDiscount, 2) . "</p>";
    echo "<p>Total Price(GST) : $" . number_format($GST, 2) . "</p>";
    echo "<p>You have chosen to collect your goods $msg</p>";
}
?>

