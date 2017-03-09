<?php


require __DIR__. '/__connect_db2.php';

$rs = $mysqli->query("SELECT * FROM `bird_pic` ORDER BY `id`");

?>


<ul class="bird_pic_area">
    <li class="block">
        <img src="images/bird_pic/first.png" width="125" alt="">
    </li>

    <?php while ($row = $rs->fetch_assoc()):?>
    <li id="<?= $row['id'] ?>" value="<?= $row['id'] ?>">
        <img src="images/bird_pic/<?= $row['picName'] ?>" width="125" alt="">
    </li>
    <?php endwhile; ?>

</ul>