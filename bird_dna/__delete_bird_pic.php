<?php
require __DIR__. '/__connect_db2.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if($id) {
    $rs2 = $mysqli->prepare("DELETE FROM `bird_pic` WHERE id=?");
    $rs2->bind_param('i', $id);
    $rs2->execute();
}

header('Location: '. $_SERVER['HTTP_REFERER']);

// echo $_SERVER['HTTP_REFERER'];