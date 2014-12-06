<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $news = $_POST['news'];
    
    if(empty($news)){
        $error .= "<p>Please select before DROPING</p>";
    }
    else {
        $long = count($news);
        include '../../dbInfo.php';
        
        $connection = mysqli_connect($host, $user, $password, $dbName, $port);

        if (mysqli_connect_error()) {
            die("<p><b>Failed to connect to Database</b></p>"); // exits
        }
        
        for($i=0; $i < $long; $i++){
            $error .= "<p>deleted ".$news[$i]."</p>";
            $query = "DELETE FROM news WHERE num=".$news[$i];
            $result = mysqli_query($connection, $query);
        }
        mysqli_close($connection); 
    }
}


function news(){
    include '../../dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    if (mysqli_connect_error()) {
    die("<p><b>Failed to connect to Database</b></p>");// exits
    }
    
    $query = "SELECT * FROM news";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="newsdrop">';
                echo '<div class="chkbox">';
                    echo "<input type=\"checkbox\" name=\"news[]\" value=\"".$row['num']."\">";
                echo '</div>';
                echo '<div class="innews">';
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class=\"newsMain\">";
                        echo "<p>".str_replace("\r\n", "</p><p>", $row['about'])."</p>";
                    echo '</div>';
                    echo '<div class="newsLink">';
                        echo '<p>'.$row['link'].'</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
    mysqli_close($connection);
}