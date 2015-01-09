<?php

#error_reporting(E_ALL);          # supresses error "headers already sent"
#ini_set('display_errors', 'On'); # when user has not selected a check box

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $quotes = $_POST['quotes'];
    
    if(empty($quotes)){
        $error .= "<p style=\"color:red;\">Please select before DROPING</p>";
    }
    else{
        $long = count($quotes);
        include '../../dbInfo.php';
        
        $connection = mysqli_connect($host, $user, $password, $dbName);

        if (mysqli_connect_error()) {
            die("<p><b>Failed to connect to Database</b></p>"); // exits
        }
        
        for($i=0; $i < $long; $i++){
            $error .= "<p>deleted ".$quotes[$i]."</p>";
            $query = "DELETE FROM quotes WHERE num=".$quotes[$i];
            $result = mysqli_query($connection, $query);
        }
        
        mysqli_close($connection); 
    }
}

function quotes(){
    include '../../dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);    
    if (mysqli_connect_error()){
        die("<p><b>Failed to connect to Database</b></p>"); // exits
    }
    
    $query = "SELECT * FROM quotes";
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($result)){
        echo '<div class="dropquote">';
            echo '<div class="chkbox">';
                echo "<input type=\"checkbox\" name=\"quotes[]\" value=\"".$row['num']."\">";
            echo '</div>';
            echo '<div class="inquote">';
                echo "<q>".$row['quote']."</q>";
                echo "<p><b>".$row['author']."</b></p>";
                if ($row['author_info'] == ""){
                    echo "<p><b>no author info provided</b></p>";
                }
                else {
                    echo "<p><b>".$row['author_info']."</b></p>";     
                }
            echo '</div>';
        echo '</div>';
    }
    mysqli_close($connection);
}