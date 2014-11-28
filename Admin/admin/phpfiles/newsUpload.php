<?php

include '../../dbInfo.php';

$connection = mysqli_connect($host, $user, $password, $dbName, $port);

if (mysqli_connect_error()) {
    die("<p><b>Failed to connect to Database</b></p>"); // exits
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $about = filter_input(INPUT_POST, 'about', FILTER_SANITIZE_STRING);
    $link  = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);
    
    if ($title == ""){
        $error .= "<p style=\"color:red;\">Please enter a title</p>";
    }
    if ($about == ""){
        $error .= "<p style=\"color:red;\">Please enter about</p>";
    }
    if ($link == ""){
        $error .= "<p style=\"color:red;\">Please enter a link</p>";
    }
    
    if ($error == ""){
        
        $query = "INSERT INTO news (title, about, link) VALUES ('$title', '$about', '$link')";
        
        if ($connection->query($query) === TRUE){
            $error = "<p style=\"color:green;\">News article has been succesfully created</p>";
        }
        else {
           $error = "<p style=\"color:red;\">ERROR: ".$query."</p><p>".$connection->error."</p>";
        }
    }
    
    mysqli_close($connection);
}