<?php

$pageName = 'data_list';
require __DIR__. '/__connect_db.php';



$rs = $mysqli->query("SELECT * FROM `news_update_chs` ORDER BY `id` DESC ");
$totalRows = $rs->num_rows;

$per_page = 8;
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
    <title>Bioguard corporation 百衛生物科技 - 最新消息</title>
    <meta name="keywords" content="bioguard,百衛生物科技,百衛生技,百衛,生技公司,動物疾病檢測中心,寵物保健食品,鳥類檢測,鳥類保健食品,疾病快篩,疫苗,實驗室,寵物藥品" />
    <meta name="description" content="bioguard,百衛生物科技,百衛生技,百衛,生技公司,動物疾病檢測中心,寵物保健食品,寵物健康食品,犬貓保健,鳥類檢測,鳥類保健食品,疾病快篩,rapid test,疫苗,實驗室,寵物藥品,最優惠,KATION行星治療計畫,食慾促進配方,皮毛保健配方,關節保健配方,眼睛保健配方,抑制口臭配方" />
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/環抱logo(網業用).png">
    <meta name="msvalidate.01" content="26BA94035AA19F3F331D5A1773B8D43B" /> <!--bing網站seo登錄**重要**-->

</head>
<style>




</style>


<body>
<?php
include(__DIR__ . '/__navbar_chs.php');
?>

<div class="container">
    <!--    <div class="left_area">-->
    <!--        <ul>-->
    <!--            <li><a href="diagnostic_introduction.php"><p>Introduction</p></a></li>-->
    <!--            <li><a href="diagnostic_priceList.php"><p>Price List</p></a></li>-->
    <!--            <li><a href="diagnostic_process.php"><p>Process</p></a></li>-->
    <!--            <li><a href="diagnostic_qa.php"><p>Q&A</p></a></li>-->
    <!--            <li><a href="innovation.php"><p>Detection report</p></a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <div class="right_area">
        <div class="position_path_area">
            <div class="position_path position_path_style1"><p>您的位置：</p></div>
            <div class="position_path position_path_style2"><a href="index_chs.php"><p>首页</p></a></div>
            <div class="position_path"><p>></p></div>
            <div class="position_path position_path_style2"><a href="news_chs.php"><p>最新消息</p></a></div>
        </div>
        <ul class="right_area_1">
            <li class="right_area_1_title"><b>最新消息</b></li>

        </ul>
        <div class="slider">
            <!--            <div class="control">-->
            <!--                <a href="javascript:;" class="prev"><p><<</p></a>-->
            <!--                <ul>-->
            <!--                    <li><p>1</p></li>-->
            <!--                            <li><p>2</p></li>-->
            <!--                            <li><p>3</p></li>-->
            <!--                </ul>-->
            <!--                <a href="javascript:;"class="next"><p>>></p></a>-->
            <!--            </div>-->
            <div class="sliderContent">

                <ul>
                    <li class="table_li_display_none">
                        <table class="table table-bordered table-hover">

                            <thead>
                            <tr>
                                <th>
                                    <b>日期</b>
                                </th>
                                <th>
                                    <b>最新消息</b>
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php while ($rs2->fetch()):?>
                                <tr>
                                    <td><p><?= $bookdate ?></p></td>
                                    <td>
                                        <p>
                                            <a href="news1_chs.php?id=<?= $id ?>">
                                                <?= $title ?>
                                            </a>
                                        </p>

                                    </td>
                                </tr>
                            <?php endwhile; ?>

                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
            <div class="control2">
                <a href="javascript:;" class="prev2"><p><<</p></a>
                <ul>
                    <?php for($i=-8; $i<=8; $i++):
                        $p = $pageNum + $i;
                        if($p > 0 and $p <= $totalPages):
                            ?>
                            <li class="<?= $i==0 ? 'now' : '' ?>"><a href="?pageNum=<?= $p ?>"><?= $p ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                </ul>
                <a href="?pageNum=<?= $totalPages ?>" class="next2"><p>>></p></a>
            </div>
        </div>
    </div>

    <div class="go_to_top_bottom">
        <img src="images/icon/up_icon.png" alt=""><b>Top</b>
    </div>
</div>
<?php
include(__DIR__ . '/__footer_chs.php');
?>




<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
<script src="js/navbar.js"></script>
<script src="js/footer.js"></script>
<script src="js/products_farmAnimals_vaccines.js"></script>
<script src="js/logo.js"></script>

<script>

    $(function(){


    });

</script>
</body>
</html>