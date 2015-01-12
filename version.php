<?php

$oneYear = 1 * 365 * 24 * 60 * 60;

$folder = $_GET['dir'];
$target = $_GET['target'];

if($folder != 'null'){
    $target = $folder.'/'.$target;
}

//echo 'the value of dir is : '.$folder;        // error check
//echo 'the value of target is : '.$target;     // error check

if (isset($_COOKIE['mobile'])){
    if($_COOKIE['mobile'] == 'yes'){
        setcookie("mobile", "no", time()+$oneYear, "/", "", 0);
        header('Location: '.$target.'.php');
    }
    else{
        setcookie("mobile", "yes", time()+$oneYear, "/", "", 0);
        header('Location: '.$target.'.php');
    }
    
}
else {  // only way to set cookie is from a cell phone browser
    setcookie("mobile", "no", time()+$oneYear, "/", "", 0);
    header('Location: '.$target.'.php');
}