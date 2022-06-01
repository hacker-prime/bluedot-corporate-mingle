<?php

// https://stackoverflow.com/questions/6626204/how-to-check-if-the-php-script-is-running-on-a-local-server
// https://stackoverflow.com/questions/2053245/how-can-i-detect-if-the-user-is-on-localhost-in-php
// Please note that both of the links above list similar solutions

if($_SERVER['HTTP_HOST'] == 'localhost'){
    $host = "";
    $username = "";
    $password = "";
    $database = "";
}else{
    $host = "";
    $username = "";
    $password = "";
    $database = "";
}

$timezone = date_default_timezone_set("Jamaica");

// host,username,password,database
$con = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}


?>
