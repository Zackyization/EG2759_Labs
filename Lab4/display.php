<?php
$user = $_GET['username'];
$name = $_GET['name'];
$address = $_GET['address'];
$gender = $_GET['gender'];
$age = $_GET['age'];
$city = $_GET['city'];

if (isset($user)) {
    echo "<p>Hello user " . $user . "</p>";
}

if (isset($name)) {
    echo "<p>Your name is " . $name . "</p>";

}

if (isset($address)) {
    echo "<p>You live in " . $address . "</p>";

}

if (isset($gender) && isset($age)) {
    echo "<p>You are a " . $gender . " of age " . $age . "</p>";
}

if (isset($city)) {
    echo "<p>Your favourite city is " . $city . "</p>";
}