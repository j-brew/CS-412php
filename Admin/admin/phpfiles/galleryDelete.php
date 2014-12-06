<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $gallery = $_POST['gallery'];
    if(empty($gallery)){
        $error = "<p>Please select before DROPING</p>";
    }
    else{
        $long = count($gallery);
        include '../../dbInfo.php';

        $connection = mysqli_connect($host, $user, $password, $dbName);

        if (mysqli_connect_error()) {
            die("<p><b>Failed to connect to Database</b></p>"); // exits
        }
        
        for($i=0; $i < $long; $i++){
            
            $error .= "<p>deleted ".$gallery[$i]."</p>";
            $query = "DELETE FROM ImageInfo WHERE id=".$gallery[$i];
            $result = mysqli_query($connection, $query);
        }
        mysqli_close($connection);
    }
}

function getPictures(){
    include '../../dbInfo.php';

    $connection = mysqli_connect($host, $user, $password, $dbName);

    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    $query = "SELECT * FROM ImageInfo";
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_row($result)) {
        echo '<div class="pic">';
            echo "<img class=\"line\" src=\"../../All_image/Jaz/Gallary/".$row['2']."\" data-larger=\"../../All_image/Jaz/Gallary/".$row['2']."\"alt=\"some awesome picture\"/>";
            echo "<input class=\"chbox\" type=\"checkbox\" name=\"gallery[]\" value=\"".$row['0']."\">";
        echo '</div>';
    }
    mysqli_close($connection);
}