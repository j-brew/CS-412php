<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include '../../dbInfo.php';

$error = "";

$connection = mysqli_connect($host, $user, $password, $dbName);

if (mysqli_connect_error()) {
    die("<p><b>Failed to connect to Database</b></p>"); // exits
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//    $idLevel      = filter_input(INPUT_POST, 'idlevel', FILTER_SANITIZE_STRING);
    $musicianName = filter_input(INPUT_POST, 'musicianname', FILTER_SANITIZE_STRING);
    $levelName    = filter_input(INPUT_POST, 'levelname', FILTER_SANITIZE_STRING);
    $mDonation    = filter_input(INPUT_POST, 'mdonation', FILTER_SANITIZE_STRING);
    $benefits      = filter_input(INPUT_POST, 'benefits', FILTER_SANITIZE_STRING);
    printIT($benefits);
//    if($idLevel == ""){
//        $error .= "<p style=\"color:red;\">Please enter Level Number</p>";
//    }
    if($musicianName == ""){
        $error .= "<p style=\"color:red;\">Please enter Musicians Name</p>";
    }
    if($levelName == ""){
        $error .= "<p style=\"color:red;\">Please enter Level Name</p>";
    }
    if($mDonation == ""){
        $error .= "<p style=\"color:red;\">Please enter Monatery Donation</p>";
    }
    
    if ($error == ""){
        
        $query = "INSERT INTO donation (musicianName, levelName, mDonation, benefits) VALUES ('$musicianName', '$levelName', '$mDonation', '$benefits')";
        $result = mysqli_query($connection, $query);
        
        if ($result == TRUE){
            $error = "<p style=\"color:green;\">Benefits have been sucessfuly added</p>";
        }
        else{
            $error = "<p style=\"color:red;\">DATABASE ERROR</p>";
        }
    }
}

function splitBenefits($benefit){
    $benArray = array();
    if(strpos($benefit, "\n") !== false){
        //echo 'found new line(s) !!!';
        $benArray = explode("\n", $benefit);
        return $benArray;
    }
    else{
        //echo 'did NOT find new lines !!!!';
        $benArray[0] = $benefit;
        return $benArray;
    }
}
function printIT($string){
    //echo '<p>'.$string.'</p>';
}