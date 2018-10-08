
<?php
    echo "You have selected " . $_FILES["fileToUpload"]["name"] . "<br>";
    echo "The file size is " . $_FILES["fileToUpload"]["size"] . "<br>";
    echo "The file type is " . $_FILES["fileToUpload"]["type"] . "<br>";

    function doSaveData($usr, $tgt) {
        $conn = mysqli_connect("127.0.0.1", "root", "", "db185563r");

        //Write an SQL statement to extract all countries from country table
        $sql = "INSERT INTO user_upload('username', 'uploaded_file') VALUES ('$tgt', '$usr')";

        //execute the SQL statement
        $result = mysqli_query($conn, $sql);

        //Check result
        if ($result) {
            echo "Data Saved.";
        }
        else {
            echo "Data NOT Saved !!!";
        }
    }

    date_default_timezone_set("Asia/Singapore");

    $timestamp = date("Ymd_His"); //Construct the timestamp

    //Add timestamp at the filename
    $target = "uploaded_files/" . $timestamp . "_" . $_FILES["fileToUpload"]["name"];

    
    $allowedType = array("image/gif", "image/jpeg", "image/jpg", "image/png");
    if (in_array($_FILES["fileToUpload"]["type"], $allowedType)) {
        echo "File type is acceptable <br>"; //proceed to upload
        $result = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target);

        if ($result) {
            echo "Upload Success!";
            $username = $_POST['username'];
            doSaveData($username, $target);
        }
        else {
            echo "Upload FAILED!";
        }
    }
    else {
        echo "Invalid file type <br>";
        echo "Upload FAILED!";
        exit();
    }
?>