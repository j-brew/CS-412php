<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $shows = $_POST['shows'];
    
    if(empty($shows)){
        $error .= "<p>Please select before DROPING</p>";
    }
    else{
        $long = count($shows);
        include '../../dbInfo.php';
        
        $connection = mysqli_connect($host, $user, $password, $dbName, $port);

        if (mysqli_connect_error()) {
            die("<p><b>Failed to connect to Database</b></p>"); // exits
        }
        
        for($i=0; $i < $long; $i++){
            $error .= "<p>deleted ".$shows[$i]."</p>";
            $query = "DELETE FROM shows WHERE num=".$shows[$i];
            $result = mysqli_query($connection, $query);
        }
        mysqli_close($connection); 
    }
}


function futureShows(){
    include '../../dbInfo.php';
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    $query = "SELECT * FROM shows WHERE date >= CURDATE()";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="show">';
                echo '<div class="chkbox">';
                    echo "<input type=\"checkbox\" name=\"shows[]\" value=\"".$row['num']."\">";           
                echo '</div>';
                echo '<div class="pich">';
                    echo "<img src=\"../../All_image/Jaz/shows/".$row['pic']."\" alt=\"book sale\">";
                echo '</div>';
                echo '<div class="about">';
                    echo "<h3>".$row['musician']."</h3>";
                    $Date = date('m/d/Y', strtotime($row['date']));
                    $Time =date("h:i A", strtotime($row['time']));
                    echo "<h4>".$Date." ".$Time."</h4>";
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
    include '../../dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM shows WHERE date < CURDATE()";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="show">';
                echo '<div class="chkbox">';
                    echo "<input type=\"checkbox\" name=\"shows[]\" value=\"".$row['num']."\">";           
                echo '</div>';
                echo '<div class="pich">';
                    echo "<img src=\"../../All_image/Jaz/shows/".$row['pic']."\" alt=\"book sale\">";
                echo '</div>';
                echo '<div class="about">';
                    echo "<h3>".$row['musician']."</h3>";
                    $Date = date('m/d/Y', strtotime($row['date']));
                    $Time =date("h:i A", strtotime($row['time']));
                    echo "<h4>".$Date." ".$Time."</h4>";
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

