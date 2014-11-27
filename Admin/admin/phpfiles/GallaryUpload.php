<?php

include '../../dbInfo.php';

$error = "";

//    $dbName = "TJJF";
//    $host = "localhost";
//    $port = 8889;
//    $user = "root";
//    $password = "root";
    $connection = mysqli_connect($host, $user, $password, $dbName, $port); 
        
    if (mysqli_connect_error()){
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "submit in POSTED";
        if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
            $target_dir = "../../All_image/Jaz/Gallary/";
            $result = move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir . basename($_FILES['file1']['name']));
            $imageName = basename($_FILES['file1']['name']);
            $query = "INSERT INTO ImageInfo (id,description,ImgUrl)VALUES ('', 'null', '$imageName')";

            echo "before connection query true";
            
            if ($connection->query($query) === TRUE) {
        //echo "New record created successfully";
                //header("Location: Succ.html");
                echo "INSIDE connection query TRUE";
                $error = "<p style=\"color:green;\">CONNECTION Succesful !!!</p>";
                echo $error;
            } 
            else {
                //echo "Error: " . $sql . "<br>" . $connection->error;
                echo "INSIDE connection query FLASE";
                $error = "<p style=\"color:red;\"> CONNECTION ERROR ". $sql . "<br>" . $connection->error."</p>";
                echo $error;
            }

            if ($result === true){
                echo "INSIDE result === TRUE";
                $error = "<p style=\"color:green;\">DATABASE Succesful !!!</p>";
                echo $error;
            }
            else{
                echo "INSIDE result === FALSE";
                $error = "<p style=\"color:red;\">DATABASE ERROR ". $sql . "</p>" . $connection->error;
                
                //'File uploaded successfuly' 
                //header("Location: Succ.html") : 'There are some Errors';
            }
        }
        else {
            $error =  "<p style=\"color:red;\">NO FILE UIPLOADED !!!</p>";
            //echo $error;
        }

        $conn->close();
    }
?>