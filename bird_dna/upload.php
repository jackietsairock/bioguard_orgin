<?php
require __DIR__. '/__connect_db2.php';

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("SET NAMES utf8");

if(! isset($_SESSION)){
    session_start();
}




if ($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"];
}else{
    echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
    echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
    echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
    echo "暫存名稱: " . $_FILES["file"]["tmp_name"];

    if (file_exists("images/bird_pic/" . $_FILES["file"]["name"])){
        echo "檔案已經存在，請勿重覆上傳相同檔案";
    }else{
        move_uploaded_file($_FILES["file"]["tmp_name"],"images/bird_pic/".$_FILES["file"]["name"]);
    }
}

if(isset($_POST['pic_name'])) {

    $pic_name = $_POST['pic_name'];
    $picName = $_FILES["file"]["name"];


    $stmt = $mysqli->prepare("INSERT INTO `bird_pic`( `picName`,`pic_name`) VALUES (?,?)");
    $stmt->bind_param('ss',  $picName,$pic_name);

    $stmt->execute();

}

header("Location: bird_dna.php");
exit;