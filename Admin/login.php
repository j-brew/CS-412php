<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
    
include '../dbInfo.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $auser = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $apass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()){
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    $query = "SELECT * FROM admin WHERE user='$auser' and pass='$apass'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1){
        session_start();
        session_regenerate_id();
        $_SESSION['IPaddress'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['sessionID'] = session_id();
        $_SESSION['sessionTime'] = time();
        session_write_close();

        header('Location: admin/admin.php');
        exit;
    }
    else if (mysqli_num_rows($result) == 0){
        $error = "<b style=\"color:red;\">Invalid user name or password</b>";
    }
    else{
        $error =  "<b style=\"color:red;\">please contact the administrator</b>";
    }
}