<?php
$pageName = 'data_list';
require __DIR__. '/__connect_db.php';
include __DIR__ . '/__is_login.php';

$rs = $mysqli->query("SELECT `id` FROM `news_update_chs`");
$totalRows = $rs->num_rows;

$per_page = 5;
$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
$pageNum = max($pageNum, 1);
$totalPages = ceil($totalRows/$per_page);

$offset = ($pageNum-1)*$per_page;

$rs2 = $mysqli->prepare("SELECT * FROM `news_update_chs` ORDER BY `id` DESC LIMIT ?, ? ");
$rs2->bind_param('ii', $offset , $per_page);
$rs2->execute();

$rs2->bind_result($id, $title, $bookdate, $content);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

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
            background-color: #1A1A1A;
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
        <a href="bioguard_edit_news_ch.php">最新消息-中(簡體版)</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="bioguard_edit_news_chs.php">最新消息-中(簡)</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="bioguard_edit_news_english.php">最新消息-英文</a>
    </div></br>
    <h1><b class="blue">百衛最新消息中(簡體版)</b></h1>
    </br>
    <a href="bioguard_edit_news_chs.php"><p class="font_size21 red">→ 回到 新增最新消息 ←</p></a>

    <nav>
        <ul class="pagination">
            <li class=""><a href="?pageNum=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php for($i=-5; $i<=5; $i++):
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
            <th>編號</th>
            <th>標題</th>
            <th>日期</th>
            <th>內容</th>
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
                <td><?= $title ?></td>
                <td><?= $bookdate ?></td>
                <td><?= $content ?></td>

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
            location.href = '__news_data_delete_chs.php?id='+id;
        }
    }
</script>
</body>
</html>