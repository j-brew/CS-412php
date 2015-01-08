<?php

function allQuotes(){
    # gets all the quotes from the database
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);    
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
    
    $connection = mysqli_connect($host, $user, $password, $dbName);    
    if (mysqli_connect_error()){
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_row($result);
    
    if (strlen($row[1]) > 340){
        $needle = strpos($row[1], " ", 340);    // shorten quote if over 340 characters
        $row[1] = substr($row[1], 0, $needle)." ... ";
        echo "<q>".$row[1]."</q><br>";
    }
    else{
        echo "<q>".$row[1]."</q><br>";     // quote
    }
    echo "<div class=author>";
            echo "<p>".$row[2]."</p>";  // author
    echo "</div>";
    
    mysqli_close($connection);
}

function imageSlider() {
    include 'dbInfo.php';
    $connection = mysqli_connect($host, $user, $password, $dbName);
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
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }

    $query = "SELECT * FROM ImageInfo";
    $result = mysqli_query($connection, $query);
  
    while ($row = mysqli_fetch_row($result)) {
        echo '<div class="pic">';
            echo "<img class=\"line\" src=\"../All_image/Jaz/Gallary/".$row['2']."\" data-larger=\"../All_image/Jaz/Gallary/".$row['2']."\"alt=\"some awesome picture\"/>";
        echo '</div>';
    }
    $connection->close();
}

function basicGallery(){
    include 'dbInfo.php';
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM ImageInfo";
    $result = mysqli_query($connection, $query);
  
    while ($row = mysqli_fetch_row($result)) {
        echo '<div class="galpic">';
            echo "<img class=\"bigpic\" src=\"../All_image/Jaz/Gallary/".$row['2']."\" data-larger=\"../All_image/Jaz/Gallary/".$row['2']."\"alt=\"some awesome picture\"/>";
        echo '</div>';
    }
    $connection->close();
}

function benefits(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>");// exits
    }
    
    $query = "SELECT * FROM donation ORDER BY mDonation DESC"; //cast(mDonation as unsigned)
    $result = mysqli_query($connection, $query);
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)){
        echo '<div class="donation">';
        if($count > 0){
            echo '<h4 class="level" onclick="showhideBenefit(\'benefit'.$row['idLevel'].'\')">'.$row['musicianName'].' - '.$row['levelName'].' - $'.$row['mDonation'].'</h4>';
        }
        else{
            echo '<h4 class="level" onclick="showhideBenefit(\'benefit'.$row['idLevel'].'\')">'.$row['musicianName'].' - '.$row['levelName'].' - $'.$row['mDonation'].' and above</h4>';
        }
        $count++;
        
        echo '<ul class="benefit" id="benefit'.$row['idLevel'].'">';
        $array = explode("\n", $row['benefits']);
        foreach($array as $ben){
            echo "<li>".$ben."</li>";
        }
        echo "</ul>";
        echo '</div>';
    }
    mysqli_close($connection);
}

function news(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>");// exits
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
                    echo '<a href="'.$row['link'].'" target="_blank">READ MORE ...</a>';
                echo '</div>';
            echo '</div>';
        }
    }
    mysqli_close($connection);
}

function futureShows(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM shows WHERE date >= CURDATE() ORDER BY date ASC";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            if ($row['musician']==NULL || $row['about']==NULL || $row['at']==NULL){
                echo '<div class="show">';
                    echo '<div class="showposter">';
                        echo '<div class="picshow">';
                            echo "<img class=\"poster\" src=\"../All_image/Jaz/shows/".$row['pic']."\" data-larger=\"../All_image/Jaz/shows/".$row['pic']."\" alt=\"pic\">";
                        echo '</div>';
                        echo '<div class="picshowinfo">';
                                $Date = date('m/d/Y', strtotime($row['date']));
                                $Time =date("h:i A", strtotime($row['time']));
                                echo "<h4>".$Date." ".$Time."</h4>";
                                echo "<h4>Tickets are $".$row['price']."</h4>";
                                echo "<h4>Available at <a href=\"http://".$row['link']."\" target=\"_blank\">".$row['link']."</a></h4>";
                                echo "<h4>Or call ".$row['phone']."</h4>";
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            else {
                echo '<div class="show">';
                    echo '<div class="pich">';
                        echo "<img src=\"../All_image/Jaz/shows/".$row['pic']."\" alt=\"book sale\">";
                    echo '</div>';
                    echo '<div class="about">';
                        echo "<h3>".$row['musician']."</h3>";
                        $Date = date('m/d/Y', strtotime($row['date']));
                        $Time =date("h:i A", strtotime($row['time']));
                        echo "<h4>".$Date." ".$Time."</h4>";
                        echo "<p>".$row['about']."</p>";
                        echo "<h4>Tickets are $".$row['price']."</h4>";
                        echo "<h4>Available at <a href=\"http://".$row['link']."\" target=\"_blank\">".$row['link']."</a></h4>";
                        echo "<h4>Or call ".$row['phone']."</h4>";
                    echo '</div>';
                echo '</div>';
            }
        }
    }
    else{
        echo "<h1>no shows</h1>";
    }
    mysqli_close($connection);
}
function pastShows(){
    include 'dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM shows WHERE date < CURDATE() ORDER BY date DESC";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            if ($row['musician']==NULL || $row['about']==NULL || $row['at']==NULL){
                echo '<div class="show">';
                    echo '<div class="showposter">';
                        echo '<div class="picshow">';
                            echo "<img class=\"poster\" src=\"../All_image/Jaz/shows/".$row['pic']."\" data-larger=\"../All_image/Jaz/shows/".$row['pic']."\" alt=\"pic\">";
                        echo '</div>';
                        echo '<div class="picshowinfo">';
                                $Date = date('m/d/Y', strtotime($row['date']));
                                $Time =date("h:i A", strtotime($row['time']));
                                echo "<h4>".$Date." ".$Time."</h4>";
                                echo "<h4>Tickets are $".$row['price']."</h4>";
                                echo "<h4>Available at <a href=\"http://".$row['link']."\" target=\"_blank\">".$row['link']."</a></h4>";
                                echo "<h4>Or call ".$row['phone']."</h4>";
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            else {
                echo '<div class="show">';
                    echo '<div class="pich">';
                        echo "<img src=\"../All_image/Jaz/shows/".$row['pic']."\" alt=\"book sale\">";
                    echo '</div>';
                    echo '<div class="about">';
                        echo "<h3>".$row['musician']."</h3>";
                        $Date = date('m/d/Y', strtotime($row['date']));
                        $Time =date("h:i A", strtotime($row['time']));
                        echo "<h4>".$Date." ".$Time."</h4>";
                        echo "<p>".$row['about']."</p>";
                        echo "<h4>Tickets are $".$row['price']."</h4>";
                        echo "<h4>Available at <a href=\"http://".$row['link']."\" target=\"_blank\">".$row['link']."</a></h4>";
                        echo "<h4>Or call ".$row['phone']."</h4>";
                    echo '</div>';
                echo '</div>';
            }
        }
    }
    else{
        echo "<h1>no shows</h1>";
    }
    mysqli_close($connection);
}

