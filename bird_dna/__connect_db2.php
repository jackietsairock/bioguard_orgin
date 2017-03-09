<?php

//百衛生物科技DB
$mysqli = new mysqli('localhost', 'root', 'jackie', 'bird_cart');

//測試
//$mysqli = new mysqli('localhost', 'root', 'admin', 'bird_cart');

//000webhostDB
//$mysqli = new mysqli('localhost', 'id891527_root2', 'jackie', 'id891527_bird_cart');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($mysqli, "utf8");


if(! isset($_SESSION)){
    session_start();
}