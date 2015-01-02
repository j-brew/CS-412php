<?php

include '../../dbInfo.php';

$error = "";

$connection = mysqli_connect($host, $user, $password, $dbName);

if (mysqli_connect_error()) {
    die("<p><b>Failed to connect to Database</b></p>"); // exits
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        $target_dir = "../../All_image/Jaz/Gallary/";
        $result = move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir . basename($_FILES['file1']['name']));
        $imageName = basename($_FILES['file1']['name']);
        $query = "INSERT INTO ImageInfo (id,description,ImgUrl)VALUES ('', 'null', '$imageName')";


        if ($connection->query($query) === TRUE) {
            $error = "<p style=\"color:green;\">New record created successfully...(indside conncection)</p>";
        } else {
            $error = "<p style=\"color:red;\"> CONNECTION ERROR <br>" . $connection->error . "</p>";
        }

        if ($result === true) {
            $error = "<p style=\"color:green;\">New record created successfully...(return == true) !!!</p>";
        } 
        else {

            $error = "<p style=\"color:red;\">DATABASE ERROR(some error) </p>" . $connection->error;
        }
    }
    else {
        $error = "<p style=\"color:red;\"> NO FILE UP LOADED !!!</p>";
    }

    $connection->close();
}