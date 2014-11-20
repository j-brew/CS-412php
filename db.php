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

function imageSlider() {
    include 'dbInfo.php';
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    $query = "SELECT * FROM ImageInfo";
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_row($result)) {   
    echo "<li> <img src='../All_image/Jaz/Gallary/$row[2]' alt=''/></li>";   
    
    }

    $connection->close();
}

function news(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM news";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="newsTitle">';
                echo "<h3>".$row['title']."</h3>";
                echo "<div class=\"newsMain\">";
                    echo "<p>".str_replace("\r\n", "</p><p>", $row['desc'])."</p>";
                echo '</div>';
                echo '<div class="newsLink">';
                    echo '<a href="'.$row['link'].'" target="_blank">READ MORE</a>';
                echo '</div>';
            echo '</div>';
        }
    }
}

