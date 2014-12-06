<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include '../../dbInfo.php';

$error = "";

$connection = mysqli_connect($host, $user, $password, $dbName, $port);

if (mysqli_connect_error()) {
    die("<p><b>Failed to connect to Database</b></p>"); // exits
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imageName = basename($_FILES['file1']['name']);
    $musician = $_POST['artist'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $about = $_POST['about'];
    $price = $_POST['price'];
    $at = $_POST['at'];
    $link = $_POST['link'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO shows(musician, date, time, about, price, at, link, phone, pic) VALUES ('$musician','$date','$time','$about','$price','$at','$link','$phone','$imageName')";

    if ($connection->query($query) === TRUE) {
        $error = "<p style=\"color:green;\">New record created successfully...(indside conncection)</p>";
    } else {
        $error = "<p style=\"color:red;\"> CONNECTION ERROR " . mysqli_error($connection) . "<br>" . $connection->error . "</p>";
    }
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        $target_dir = "../../All_image/Jaz/concerts/";
        $result = move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir . basename($_FILES['file1']['name']));
        //$imageName = basename($_FILES['file1']['name']);

        if ($result === true) {
            $error = "<p style=\"color:green;\">New record created successfully...(return == true) !!!</p>";
        } else {

            $error = "<p style=\"color:red;\">DATABASE ERROR(some error) " . mysqli_error($connection) . "</p>" . $connection->error;
        }
    } else {
        $error = "<p style=\"color:red;\"> NO FILE UIPLOADED !!!</p>";
    }

    $connection->close();
}