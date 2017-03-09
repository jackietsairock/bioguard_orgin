<?php


require __DIR__. '/__connect_db.php';

$rs = $pdo->query("SELECT * FROM `bird_pic` ORDER BY `id`");

?>



<option value="1">標語</option>

<?php while($row = $rs->fetch(PDO::FETCH_ASSOC)):?>
<option class="select" value="<?= $row['id'] ?>"><?= $row['pic_name'] ?></option>
<?php endwhile; ?>
