<?php
$pageName = 'data_list';
require __DIR__. '/__connect_db2.php';

$rs = $mysqli->query("SELECT `id` FROM `bird_pic`");
$totalRows = $rs->num_rows;

$per_page = 20;
$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
$pageNum = max($pageNum, 1);
$totalPages = ceil($totalRows/$per_page);

$offset = ($pageNum-1)*$per_page;

$rs2 = $mysqli->prepare("SELECT * FROM `bird_pic` ORDER BY `id` DESC LIMIT ?, ? ");
$rs2->bind_param('ii', $offset , $per_page);
$rs2->execute();

$rs2->bind_result($id, $picName, $pic_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="Robots" contect="none">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/環抱logo(網業用).png">
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style:none;
            font-family: 'Open Sans','微軟正黑體';
            box-sizing: border-box;
        }

        .container{
            position: absolute;
            left: 0;
        }

        .delete {
            color: red;
            font-size: 20px;
        }

        thead{
            background-color: #3a3a3a;
            color: #fff;
        }

        thead tr th{
            font-size: 24px;
            text-align: center;
        }

        h1{
            font-size: 24px;
        }

        .blue{
            color: blue;
        }

        .red{
            color: red;
        }

        .font_size21{
            font-size: 21px;
        }


    </style>
</head>
<body>

<div class="container">
    </br>
    <div class="news_link">
        <a href="bird_dna.php">性別DNA鑑定鳥卡</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="two_virus.php">雙病毒鳥卡</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="lactate.php">鴿乳酸代謝鳥卡</a>
    </div></br>
    <h1><b class="blue">《百衛鳥圖-刪除鳥圖》**鳥圖上到下排列順序為：新 → 舊**</b></h1>
    <h1><b class="blue">Filzilla鳥圖位置：/xampp/htdocs/bioguard/bird_dna/</b></h1>

    </br>
    <a href="new_pic.php"><p class="font_size21 red">→ 回到 上傳鳥圖 ←</p></a>

    <nav>
        <ul class="pagination">
            <li class=""><a href="?pageNum=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php for($i=-20; $i<=20; $i++):
                $p = $pageNum + $i;
                if($p > 0 and $p <= $totalPages):?>
                    <li class="<?= $i==0 ? 'active' : '' ?>"><a href="?pageNum=<?= $p ?>"><?= $p ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <li class=""><a href="?pageNum=<?= $totalPages ?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
        </ul>
    </nav>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>刪除</th>
            <th>編號(排列順序)</th>
            <th>鳥名</th>
            <th>檔名</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($rs2->fetch()):?>
            <tr>
                <td><a href="javascript:delete_it(<?= $id ?>)">
                        <span class="glyphicon glyphicon-remove delete" aria-hidden="true"></span>
                    </a>
                </td>
                <td><?= $id ?></td>
                <td><?= $pic_name ?></td>
                <td><?= $picName ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>



</div>


<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    function delete_it(id) {
        if(confirm('確定要刪除編號為 '+id+' 的資料嗎?')) {
            location.href = '__delete_bird_pic.php?id='+id;
        }
    }
</script>
</body>
</html>