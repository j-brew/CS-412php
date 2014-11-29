<?php

function allQuotes(){
    # gets all the quotes from the database
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);    
    if (mysqli_connect_error()){
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM quotes";
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_row($result)){
        echo '<div class="quotes">';
                echo "<q>".$row[1]."</q><br>";     // quote
                echo "<div class=author>";
                    echo "<p>".$row[2]."</p>";  // author
                    echo "<p>".$row[3]."</p>";  // from
                echo "</div>";
        echo '</div>';
    }
    mysqli_close($connection);
}

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
    
    echo "<q>".$row[1]."</q><br>";     // quote
    echo "<div class=author>";
            echo "<p>".$row[2]."</p>";  // author
    echo "</div>";
    
    mysqli_close($connection);
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

function imageSlider_NoScript() {
    include 'dbInfo.php';
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    $query = "SELECT * FROM ImageInfo";
    $result = mysqli_query($connection, $query);
    $numRow=mysqli_num_rows($result);
    $numRow = $numRow / 4;
    $remainder = $numRow % 4;
        
    echo "<p>number of rows = ".$numRow."</p>";
    echo "<p>remainder = ".$remainder."</p>";
     for ($j = 0; $j <$numRow; $j++)
     {
        echo "<tr>";
        
        for($i = 0;$i < 4; $i++) {
            $row = mysqli_fetch_row($result);
            if ($row > 0){
                echo "<td><img src='../All_image/Jaz/Gallary/$row[2]' alt=''/></td>";
                echo "<p>".$row[2]."</p>";
            }
        }
        echo"</tr>";
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
                    echo "<p>".str_replace("\r\n", "</p><p>", $row['about'])."</p>";
                echo '</div>';
                echo '<div class="newsLink">';
                    echo '<a href="http://'.$row['link'].'" target="_blank">READ MORE</a>';
                echo '</div>';
            echo '</div>';
        }
    }
    
    mysqli_close($connection);
}

function futureShows(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM shows WHERE date >= CURDATE()";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        #echo "<h1>Shows".mysqli_num_rows($result)."</h1>";
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="show">';
                echo '<div class="pich">';
                    echo "<img src=\"".$row['pic']."\" alt=\"book sale\">";
                echo '</div>';
                echo '<div class="about">';
                    echo "<h3>".$row['musician']."</h3>";
                    echo "<h4>".$row['date']." ".$row['time']."</h4>";
                    echo "<p>".$row['about']."</p>";
                    echo "<h4>Tickets are $".$row['price']."</h4>";
                    echo "<h4>Available at <a href=\"http://\"".$row['link']."\" target=\"_blank\">".$row['link']."</a></h4>";
                    echo "<h4>Or call ".$row['phone']."</h4>";
                echo '</div>';
            echo '</div>';
        }
    }
    else{
        echo "<h1>no shows</h1>";
    }
    
    mysqli_close($connection);
}
function pastShows(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM shows WHERE date < CURDATE()";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        #echo "<h1>Shows".mysqli_num_rows($result)."</h1>";
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="show">';
                echo '<div class="pich">';
                    echo "<img src=\"".$row['pic']."\" alt=\"book sale\">";
                echo '</div>';
                echo '<div class="about">';
                    echo "<h3>".$row['musician']."</h3>";
                    echo "<h4>".$row['date']." ".$row['time']."</h4>";
                    echo "<p>".$row['about']."</p>";
                    echo "<h4>Tickets are $".$row['price']."</h4>";
                    echo "<h4>Available at <a href=\"http://\"".$row['link']."\" target=\"_blank\">".$row['link']."</a></h4>";
                    echo "<h4>Or call ".$row['phone']."</h4>";
                echo '</div>';
            echo '</div>';
        }
    }
    else{
        echo "<h1>no shows</h1>";
    }
    
    mysqli_close($connection);
}

