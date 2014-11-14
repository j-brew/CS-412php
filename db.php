<?php

function randQuote(){
    # gets random quote from the database
    include 'dbInfo.php';

    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()){
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_row($result);
    
    echo "<q>".$row[1]."</q>";     // quote
    echo "<div id=author>";
        echo "<div id=\"author\">";
            echo "<p>".$row[2]."</p>";  // author
        echo "</div>";
    echo "</div>";
}
