<?php
require __DIR__. '/__connect_db.php';

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("SET NAMES utf8");

if(! isset($_SESSION)){
    session_start();
}


if(isset($_POST['title']) and isset($_POST['bookdate']) and isset($_POST['content'])) {

    $title = $_POST['title'];
    $bookdate = $_POST['bookdate'];
    $content = $_POST['content'];
//    echo "##".$content."##<br>";
    echo nl2br($content);

    $stmt = $mysqli->prepare("INSERT INTO `news_update_ch`( `title`,`bookdate`,`content`) VALUES (?,?,?)");
    $stmt->bind_param('sss',  $title,$bookdate,$content);

    $stmt->execute();

}

header("Location: bioguard_edit_news_ch.php");
exit;