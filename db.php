<?php

function randQuote(){
    # gets random quote from the database
    include 'dbInfo.php';

    $query = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_row($result);

    echo "<q>".$row[1]."</q>";
    echo "<div id=author>";
        echo "<div id=\"author\">";
            echo "<p>".$row[2]."</p>";
        echo "</div>";
    echo "</div>";
}
