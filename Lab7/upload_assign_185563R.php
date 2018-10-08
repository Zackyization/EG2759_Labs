
<?php
    echo "You have selected " . $_FILES["fileToUpload"]["name"] . "<br>";
    echo "The file size is " . $_FILES["fileToUpload"]["size"] . "<br>";
    echo "The file type is " . $_FILES["fileToUpload"]["type"] . "<br>";

    function doSaveData($usr, $tgt) {
        $conn = mysqli_connect("127.0.0.1", "root", "", "db185563R");

        //Write an SQL statement to extract all countries from country table
        $sql = "INSERT INTO user_upload(username, uploaded_file) VALUES ('$usr', '$tgt')";
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

    $prefix = rand(1, 99999);
    $target = "uploaded_files/" . $prefix . "_" . $_FILES["fileToUpload"]["name"];

    $allowedType = array("image/gif", "image/jpeg", "image/jpg", "image/png");
    if (in_array($_FILES["fileToUpload"]["type"], $allowedType) && $_FILES["fileToUpload"]["size"] < 1000000) {
        echo "File type is acceptable <br>"; //proceed to upload
        $result = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target);

        if ($result) {
            echo "File Upload Success! <br>";
            $username = $_POST['username'];
            doSaveData($username, $target);
        }
        else {
            echo "File Upload FAILED!";
        }
    }
    else {
        echo "Invalid file type <br>";
        echo "Upload FAILED!";
        exit();
    }
?>