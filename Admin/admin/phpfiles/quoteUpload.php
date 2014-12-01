<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include '../../dbInfo.php';

    $quote = $_POST['quote'];
    $author = $_POST['author'];
    $info = $_POST['info'];
    
    if ($quote == "" || $author == ""){
        $error .= "<p style=\"color:red;\">Quote and Author are required</p>";
    }
    else{
        $connection = mysqli_connect($host, $user, $password, $dbName, $port);    
        if (mysqli_connect_error()){
            die("<p><b>Failed to connect to Database</b></p>"); // exits
        }

        $query = "INSERT INTO quotes (quote, author, author_info) VALUES ('".$quote."', '".$author."', '".$info."')";
        $result = mysqli_query($connection, $query);
        
        if ($result === TRUE){
            $error .= "<p style=\"color:green;\">Quote has been added</p>";
        }
        else{
            $error .= "<p style=\"color:red;\">ERROR in adding to database</p>".$result;
        }
    }
}