<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$displayInfo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $from = $_POST["email"];
    $to = "tjjf412@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    //$headers = 'From: '.$from."\r\n";
    $headers = 'MIME-Version: 1.0'. "\r\n";
    $headers .= 'Content-type:text/html;charset=UTF-8'. "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    
    
    if($from == "" || $subject == "" || $message == ""){
        echo "<b> ERROR enter required Fields </b>";
    }
    else{
        if (!filter_var($from, FILTER_VALIDATE_EMAIL)) { // checks for
            echo "<b>THIS IS NOT A VALID EMAIL</b>";
        }
        else{
            $retval = mail('tjjf412@gmail.com', $subject, $message, $headers);
            //echo "<b>Email SENT !!!</b>";
            //echo "<br>from    : ".$from;
            //echo "<br>to      : ".$to;
            //echo "<br>subject : ".$subject;
            //echo "<br>message : ".$message;
            //echo "<br>headers : ".$headers;
            if( $retval == true ){
                $displayInfo = "Message sent successfully...";
            }
            else{
                $displayInfo = "Message could not be sent...";
            }
        } 
    }
}
//phpinfo();