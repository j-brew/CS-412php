<?php

$oneYear = 1 * 365 * 24 * 60 * 60;

if (isset($_COOKIE['mobile'])){
    header('Location: index.php');
}
else {
    setcookie("mobile", "no", time()+$oneYear, "/", "", 0);
}