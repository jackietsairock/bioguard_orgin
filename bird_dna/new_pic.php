<?php
require __DIR__. '/__connect_db2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="Robots" contect="none">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
</head>
<style>

    .red{
        color: #f00;

    }

</style>
<body>

<div class="container">
    <div class="col-lg-8">
        <?php
        include(__DIR__ . '/__link.php');
        ?>
    </div>
    <div class="col-lg-8">
        <form class="form-horizontal"  action="upload.php" method="post" enctype="multipart/form-data">
            <h3 class="red">輸入中文鳥名</h3>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">輸入中文鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pic_name" name="pic_name" placeholder="請輸入中文鳥名">
                </div>
            </div>
            <h3 class="red">上傳鳥圖**檔案名稱必須是英文，否則圖片無法上傳*</h3>
            <h3>鳥圖規格:425 pexl x 425 pexl</h3>
            檔案名稱:<input type="file" name="file" id="file" /><br />
            <input type="submit" name="submit" value="上傳檔案" />
        </form>
    </div>


</div>


<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
