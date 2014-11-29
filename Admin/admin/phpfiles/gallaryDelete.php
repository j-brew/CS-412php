<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

function getPictures(){
    include '../../dbInfo.php';

    $connection = mysqli_connect($host, $user, $password, $dbName, $port);

    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    $query = "SELECT * FROM ImageInfo";
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_row($result)) {
        echo '<div class="pic">';
            echo "<img class=\"line\" src=\"../../All_image/Jaz/Gallary/".$row['2']."\" alt=\"some awesome picture\"/>";
                        echo "<input class=\"chbox\" type=\"checkbox\" name=\"gallery[]\" value=\"".$row['0']."\">";
        echo '</div>';
    }
    mysqli_close($connection);
}