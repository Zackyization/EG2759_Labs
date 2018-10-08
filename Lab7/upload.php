<?php
    echo "You have selected " . $_FILES["fileToUpload"]["name"] . "<br>";
    echo "The file size is " . $_FILES["fileToUpload"]["size"] . "<br>";
    echo "The file type is " . $_FILES["fileToUpload"]["type"] . "<br>";

    // $target = "uploaded_files/" . $_FILES["fileToUpload"]["name"];

    // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target);

    date_default_timezone_set("Asia/Singapore");

    $timestamp = date("Ymd_His"); //Construct the timestamp

    //Add timestamp at the filename
    $target = "uploaded_files/" . $timestamp . "_" . $_FILES["fileToUpload"]["name"];

    $result = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target);
    if ($result) {
        echo "Upload Success!";
    }
    else {
        echo "Upload FAILED!";
    }
?>