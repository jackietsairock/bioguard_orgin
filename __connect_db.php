<?php

//百衛生物科技DB
//$mysqli = new mysqli('localhost', 'root', 'jackie', 'bioguard');

//000webhostDB
//$mysqli = new mysqli('localhost', 'id891527_root', 'jackie', 'id891527_bioguard');

//測試
$mysqli = new mysqli('localhost', 'root', 'admin', 'bioguard');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($mysqli, "utf8");

if(! isset($_SESSION)){
    session_start();
}


?>

