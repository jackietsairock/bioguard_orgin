<?php


require __DIR__. '/__connect_db.php';

if( isset($_GET['id']) ){
    $id =  intval($_GET['id']);
} else {
    die('No id');
}


$rs = $mysqli->query("SELECT * FROM news_update_english WHERE `id`= $id");

$row = $rs->fetch_assoc();



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


    .table p,b,h3{

        text-align: left;
    }

    .table tbody pre{
        width: 687px;
        white-space:pre-wrap; /* css3.0 */
        white-space:-moz-pre-wrap; /* Firefox */
        white-space:-o-pre-wrap; /* Opera 7 */
        word-wrap:break-word; /* Internet Explorer 5.5+ */

    }


    .table h3{

        color: #4B916C;
        text-align: center;
    }

    .table thead th{
        padding: 10px;
        width: 678px;
    }

    .table thead tr th{
        background-color: #fff;
    }

    tbody{
        width: 678px;
        /*background-color: #00a0d2;*/
    }

    tbody tr{
        width: 678px;
    }

    tbody td{
        width: 678px;
    }



    img{
        overflow: hidden;
    }

    .blue{
        color: #005b91;
    }


</style>


<body>
<?php
include(__DIR__ . '/__navbar.php');
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
            <div class="position_path position_path_style1"><p>You&nbsp;are&nbsp;here：</p></div>
            <div class="position_path position_path_style2"><a href="index.php"><p>Home</p></a></div>
            <div class="position_path"><p>></p></div>
            <div class="position_path position_path_style2"><a href="news_english.php"><p>News</p></a></div>
            <div class="position_path"><p>></p></div>
            <div class="position_path position_path_style2"><a href="news1_english.php?id=<?= $row['id'] ?>"><p><?php echo $row['bookdate']; ?></p></a></div>
        </div>
        <div class="slider">
            <!--            <div class="control">-->
            <!--                <a href="javascript:;" class="prev"><p><<</p></a>-->
            <!--                <ul>-->
            <!--                    <li><p>1</p></li>-->
            <!--                    <!--                    <li><p>2</p></li>-->
            <!--                    <!--                    <li><p>3</p></li>-->
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
                                    <h3>
                                        <?php echo $row['title']; ?>
                                    </h3>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="blue"><pre><?php echo $row['bookdate']; ?></pre></td>
                            </tr>
                            <tr>
                                <td>
                                    <pre>
                                        <?php echo $row['content']; ?>
                                    </pre>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
            <!--            <div class="control2">-->
            <!--                <a href="javascript:;" class="prev2"><p><<</p></a>-->
            <!--                <ul>-->
            <!--                    <li><p>1</p></li>-->
            <!--                    <!--                    <li><p>2</p></li>-->
            <!--                    <!--                    <li><p>3</p></li>-->
            <!--                </ul>-->
            <!--                <a href="javascript:;" class="next2"><p>>></p></a>-->
            <!--            </div>-->
        </div>
    </div>

    <div class="go_to_top_bottom">
        <img src="images/icon/up_icon.png" alt=""><b>Top</b>
    </div>
</div>
<?php
include(__DIR__ . '/__footer.php');
?>




<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="./https://code.jquery.com/jquery-1.12.2.min.js"></script>
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