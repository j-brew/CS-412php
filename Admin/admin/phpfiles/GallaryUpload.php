<?php

include '../../../dbInfo.php';

$error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
            $target_dir = "../../All_image/Jaz/Gallary/";
            $result = move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir . basename($_FILES['file1']['name']));
            $imageName = basename($_FILES['file1']['name']);
            $query = "INSERT INTO ImageInfo (id,description,ImgUrl)VALUES ('', 'null', '$imageName')";

            if ($connection->query($query) === TRUE) {
        //echo "New record created successfully";
                //header("Location: Succ.html");
                $error = "<p style=\"color:green;\">Succesful !!!</p>";
            } 
            else {
                //echo "Error: " . $sql . "<br>" . $connection->error;
                $error = "<p style=\"color:red;\">ERROR ". $sql . "</p>" . $connection->error;
            }

            echo $result === true ?
                $error = "<p style=\"color:green;\">Succesful !!!</p>" : 
                $error = "<p style=\"color:red;\">ERROR ". $sql . "</p>" . $connection->error;
                //'File uploaded successfuly' 
                //header("Location: Succ.html") : 'There are some Errors';
        }
        else {
            $error =  "<p style=\"color:red;\">NO FILE UIPLOADED !!!</p>";
            echo $error;
        }

        $conn->close();
    }
?>