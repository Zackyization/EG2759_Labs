<?php
// $conn = mysqli_connect("localhost", "root", "", "db185563R"); // Initiate database connection
// echo $conn->host_info; // Displays the host info
// mysqli_close($conn); //Terminate the database connection

//open connection and select database
$conn = mysqli_connect("localhost", "root", "", "db185563R"); // Initiate database connection

//Write an SQL statement to create a table
$sql_create = "CREATE TABLE userInfo(
        name VARCHAR(255) NOT NULL,
        pass VARCHAR(255) NOT NULL,
        age INT NOT NULL,
        gender ENUM('F', 'M'),
        email VARCHAR(255),
        PRIMARY KEY (name)
    )";

//execute the SQL statement
$result = mysqli_query($conn, $sql_create);

echo 'Created:' . $result;

mysqli_close($conn);
?>