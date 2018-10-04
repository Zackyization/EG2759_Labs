<?php
//open connection and select database
$conn = mysqli_connect("localhost", "root", "", "db185563R"); // Initiate database connection

//Write an SQL statement to create a table
$sql_insert = "INSERT INTO userinfo (name,pass,age,gender,email)
VALUES ('David','david',28,'M','David@yahoo.com')";

//execute the SQL statement
$result = mysqli_query($conn, $sql_insert);

echo 'Inserted:' . $result;

mysqli_close($conn);
?>