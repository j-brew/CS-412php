<?php

include '../../dbInfo.php';

$connection = mysqli_connect($host, $user, $password, $dbName, $port);
if (mysqli_connect_error()) {
    die("<p><b>Failed to connect to Database</b></p>"); // exits
}

if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $target_dir = "../../All_image/Jaz/Gallary/";
    $result = move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir . basename($_FILES['file1']['name']));
    $imageName = basename($_FILES['file1']['name']);
    $query = "INSERT INTO ImageInfo (id,description,ImgUrl)VALUES ('', 'null', '$imageName')";
    if ($connection->query($query) === TRUE) {
//echo "New record created successfully";
        header("Location: Succ.html");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    echo $result === true ?
//'File uploaded successfuly' 
            header("Location: Succ.html") :
            'There are some Errors';
} else {
    echo 'No File uploaded';
}

$conn->close();
?>