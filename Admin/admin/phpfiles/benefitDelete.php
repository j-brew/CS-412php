<?php

#error_reporting(E_ALL);          # supresses error "headers already sent"
#ini_set('display_errors', 'On'); # when user has not selected a check box

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $benefitS = $_POST['benefitS'];
    
    if(empty($benefitS)){
        $error .= "<p style=\"color:red;\">Please select before DROPING</p>";
    }
    else{
        $long = count($benefitS);
        include '../../dbInfo.php';
        
        $connection = mysqli_connect($host, $user, $password, $dbName);

        if (mysqli_connect_error()) {
            die("<p><b>Failed to connect to Database</b></p>"); // exits
        }
        
        for($i=0; $i < $long; $i++){
            $error .= '<p style="color:green;">deleted benefit '.$benefitS[$i].' SUCCESSFULLY</p>';
            $query = "DELETE FROM donation WHERE idLevel=".$benefitS[$i];
            $result = mysqli_query($connection, $query);
        }
        mysqli_close($connection); 
    }
}

function benefits(){
    include '../../dbInfo.php';
    
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if (mysqli_connect_error()) {
        die("<p><b>Failed to connect to Database</b></p>");// exits
    }
    
    $query = "SELECT * FROM donation ORDER BY mDonation DESC";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="benefitdrop">';
                echo '<div class="chkbox">';
                    echo '<input type="checkbox" name="benefitS[]" value="'.$row['idLevel'].'">';
                echo '</div>';
                echo '<div class="inbenefit">';
                    echo '<h4>'.$row['musicianName'].' - '.$row['levelName'].' - $'.$row['mDonation'].'</h4>';
                    echo '<ul><li>'.  str_replace("\r\n", "</li><li>", $row['benefits']).'</li></ul>';
                echo '</div>';
            echo '</div>';
        }
    }
    mysqli_close($connection);
}