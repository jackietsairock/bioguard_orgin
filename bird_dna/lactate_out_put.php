<?php



if(! isset($_SESSION)){
    session_start();
}

if(isset($_POST['test_nb']) and isset($_POST['test_nb2']) and isset($_POST['test_nb3'])) {


    $name_id = $_POST['name_id'];
    $bird_name = $_POST['bird_name'];
    $scientific_name = $_POST['scientific_name'];
    $birthday = $_POST['birthday'];
    $foot_nb = $_POST['foot_nb'];
    $foot_nb2_1 = $_POST['foot_nb2_1'];
    $foot_nb3_1 = $_POST['foot_nb3_1'];
    $foot_nb4_1 = $_POST['foot_nb4_1'];
    $foot_nb5_1 = $_POST['foot_nb5_1'];
    $foot_nb6_1 = $_POST['foot_nb6_1'];
    $wafer_nb = $_POST['wafer_nb'];
    $test_nb = $_POST['test_nb'];
    $test_po = $_POST['test_po'];
    $test_day = $_POST['test_day'];
    $sex = $_POST['sex'];
    $_SESSION['test_nb'] = $test_nb;
    $_SESSION['name_id'] = $name_id;
    $_SESSION['bird_name'] = $bird_name;
    $_SESSION['scientific_name'] = $scientific_name;
    $_SESSION['birthday'] = $birthday;
    $_SESSION['foot_nb'] = $foot_nb;
    $_SESSION['foot_nb2_1'] = $foot_nb2_1;
    $_SESSION['foot_nb3_1'] = $foot_nb3_1;
    $_SESSION['foot_nb4_1'] = $foot_nb4_1;
    $_SESSION['foot_nb5_1'] = $foot_nb5_1;
    $_SESSION['foot_nb6_1'] = $foot_nb6_1;
    $_SESSION['wafer_nb'] = $wafer_nb;
    $_SESSION['test_nb'] = $test_nb;
    $_SESSION['test_po'] = $test_po;
    $_SESSION['test_day'] = $test_day;
    $_SESSION['sex'] = $sex;


    $name_id2 = $_POST['name_id2'];
    $bird_name2 = $_POST['bird_name2'];
    $scientific_name2 = $_POST['scientific_name2'];
    $birthday2 = $_POST['birthday2'];
    $foot_nb2 = $_POST['foot_nb2'];
    $foot_nb2_2 = $_POST['foot_nb2_2'];
    $foot_nb3_2 = $_POST['foot_nb3_2'];
    $foot_nb4_2 = $_POST['foot_nb4_2'];
    $foot_nb5_2 = $_POST['foot_nb5_2'];
    $foot_nb6_2 = $_POST['foot_nb6_2'];
    $wafer_nb2 = $_POST['wafer_nb2'];
    $test_nb2 = $_POST['test_nb2'];
    $test_po2 = $_POST['test_po2'];
    $test_day2 = $_POST['test_day2'];
    $sex2 = $_POST['sex2'];
    $_SESSION['test_nb2'] = $test_nb2;
    $_SESSION['name_id2'] = $name_id2;
    $_SESSION['bird_name2'] = $bird_name2;
    $_SESSION['scientific_name2'] = $scientific_name2;
    $_SESSION['birthday2'] = $birthday2;
    $_SESSION['foot_nb2'] = $foot_nb2;
    $_SESSION['foot_nb2_2'] = $foot_nb2_2;
    $_SESSION['foot_nb3_2'] = $foot_nb3_2;
    $_SESSION['foot_nb4_2'] = $foot_nb4_2;
    $_SESSION['foot_nb5_2'] = $foot_nb5_2;
    $_SESSION['foot_nb6_2'] = $foot_nb6_2;
    $_SESSION['wafer_nb2'] = $wafer_nb2;
    $_SESSION['test_nb2'] = $test_nb2;
    $_SESSION['test_po2'] = $test_po2;
    $_SESSION['test_day2'] = $test_day2;
    $_SESSION['sex2'] = $sex2;


    $name_id3 = $_POST['name_id3'];
    $bird_name3 = $_POST['bird_name3'];
    $scientific_name3 = $_POST['scientific_name3'];
    $birthday3 = $_POST['birthday3'];
    $foot_nb3 = $_POST['foot_nb3'];
    $foot_nb2_3 = $_POST['foot_nb2_3'];
    $foot_nb3_3 = $_POST['foot_nb3_3'];
    $foot_nb4_3 = $_POST['foot_nb4_3'];
    $foot_nb5_3 = $_POST['foot_nb5_3'];
    $foot_nb6_3 = $_POST['foot_nb6_3'];
    $wafer_nb3 = $_POST['wafer_nb3'];
    $test_nb3 = $_POST['test_nb3'];
    $test_po3 = $_POST['test_po3'];
    $test_day3 = $_POST['test_day3'];
    $sex3 = $_POST['sex3'];
    $_SESSION['test_nb3'] = $test_nb3;
    $_SESSION['name_id3'] = $name_id3;
    $_SESSION['bird_name3'] = $bird_name3;
    $_SESSION['scientific_name3'] = $scientific_name3;
    $_SESSION['birthday3'] = $birthday3;
    $_SESSION['foot_nb3'] = $foot_nb3;
    $_SESSION['foot_nb2_3'] = $foot_nb2_3;
    $_SESSION['foot_nb3_3'] = $foot_nb3_3;
    $_SESSION['foot_nb4_3'] = $foot_nb4_3;
    $_SESSION['foot_nb5_3'] = $foot_nb5_3;
    $_SESSION['foot_nb6_3'] = $foot_nb6_3;
    $_SESSION['wafer_nb3'] = $wafer_nb3;
    $_SESSION['test_nb3'] = $test_nb3;
    $_SESSION['test_po3'] = $test_po3;
    $_SESSION['test_day3'] = $test_day3;
    $_SESSION['sex3'] = $sex3;

    $name_id4 = $_POST['name_id4'];
    $bird_name4 = $_POST['bird_name4'];
    $scientific_name4 = $_POST['scientific_name4'];
    $birthday4 = $_POST['birthday4'];
    $foot_nb4 = $_POST['foot_nb4'];
    $foot_nb2_4 = $_POST['foot_nb2_4'];
    $foot_nb3_4 = $_POST['foot_nb3_4'];
    $foot_nb4_4 = $_POST['foot_nb4_4'];
    $foot_nb5_4 = $_POST['foot_nb5_4'];
    $foot_nb6_4 = $_POST['foot_nb6_4'];
    $wafer_nb4 = $_POST['wafer_nb4'];
    $test_nb4 = $_POST['test_nb4'];
    $test_po4 = $_POST['test_po4'];
    $test_day4 = $_POST['test_day4'];
    $sex4 = $_POST['sex4'];
    $_SESSION['test_nb4'] = $test_nb4;
    $_SESSION['name_id4'] = $name_id4;
    $_SESSION['bird_name4'] = $bird_name4;
    $_SESSION['scientific_name4'] = $scientific_name4;
    $_SESSION['birthday4'] = $birthday4;
    $_SESSION['foot_nb4'] = $foot_nb4;
    $_SESSION['foot_nb2_4'] = $foot_nb2_4;
    $_SESSION['foot_nb3_4'] = $foot_nb3_4;
    $_SESSION['foot_nb4_4'] = $foot_nb4_4;
    $_SESSION['foot_nb5_4'] = $foot_nb5_4;
    $_SESSION['foot_nb6_4'] = $foot_nb6_4;
    $_SESSION['wafer_nb4'] = $wafer_nb4;
    $_SESSION['test_nb4'] = $test_nb4;
    $_SESSION['test_po4'] = $test_po4;
    $_SESSION['test_day4'] = $test_day4;
    $_SESSION['sex4'] = $sex4;


    $name_id5 = $_POST['name_id5'];
    $bird_name5 = $_POST['bird_name5'];
    $scientific_name5 = $_POST['scientific_name5'];
    $birthday5 = $_POST['birthday5'];
    $foot_nb5 = $_POST['foot_nb5'];
    $foot_nb2_5 = $_POST['foot_nb2_5'];
    $foot_nb3_5 = $_POST['foot_nb3_5'];
    $foot_nb4_5 = $_POST['foot_nb4_5'];
    $foot_nb5_5 = $_POST['foot_nb5_5'];
    $foot_nb6_5 = $_POST['foot_nb6_5'];
    $wafer_nb5 = $_POST['wafer_nb5'];
    $test_nb5 = $_POST['test_nb5'];
    $test_po5 = $_POST['test_po5'];
    $test_day5 = $_POST['test_day5'];
    $sex5 = $_POST['sex5'];
    $_SESSION['test_nb5'] = $test_nb5;
    $_SESSION['name_id5'] = $name_id5;
    $_SESSION['bird_name5'] = $bird_name5;
    $_SESSION['scientific_name5'] = $scientific_name5;
    $_SESSION['birthday5'] = $birthday5;
    $_SESSION['foot_nb5'] = $foot_nb5;
    $_SESSION['foot_nb2_5'] = $foot_nb2_5;
    $_SESSION['foot_nb3_5'] = $foot_nb3_5;
    $_SESSION['foot_nb4_5'] = $foot_nb4_5;
    $_SESSION['foot_nb5_5'] = $foot_nb5_5;
    $_SESSION['foot_nb6_5'] = $foot_nb6_5;
    $_SESSION['wafer_nb5'] = $wafer_nb5;
    $_SESSION['test_nb5'] = $test_nb5;
    $_SESSION['test_po5'] = $test_po5;
    $_SESSION['test_day5'] = $test_day5;
    $_SESSION['sex5'] = $sex5;


    $name_id6 = $_POST['name_id6'];
    $bird_name6 = $_POST['bird_name6'];
    $scientific_name6 = $_POST['scientific_name6'];
    $birthday6 = $_POST['birthday6'];
    $foot_nb6 = $_POST['foot_nb6'];
    $foot_nb2_6 = $_POST['foot_nb2_6'];
    $foot_nb3_6 = $_POST['foot_nb3_6'];
    $foot_nb4_6 = $_POST['foot_nb4_6'];
    $foot_nb5_6 = $_POST['foot_nb5_6'];
    $foot_nb6_6 = $_POST['foot_nb6_6'];
    $wafer_nb6 = $_POST['wafer_nb6'];
    $test_nb6 = $_POST['test_nb6'];
    $test_po6 = $_POST['test_po6'];
    $test_day6 = $_POST['test_day6'];
    $sex6 = $_POST['sex6'];
    $_SESSION['test_nb6'] = $test_nb6;
    $_SESSION['name_id6'] = $name_id6;
    $_SESSION['bird_name6'] = $bird_name6;
    $_SESSION['scientific_name6'] = $scientific_name6;
    $_SESSION['birthday6'] = $birthday6;
    $_SESSION['foot_nb6'] = $foot_nb6;
    $_SESSION['foot_nb2_6'] = $foot_nb2_6;
    $_SESSION['foot_nb3_6'] = $foot_nb3_6;
    $_SESSION['foot_nb4_6'] = $foot_nb4_6;
    $_SESSION['foot_nb5_6'] = $foot_nb5_6;
    $_SESSION['foot_nb6_6'] = $foot_nb6_6;
    $_SESSION['wafer_nb6'] = $wafer_nb6;
    $_SESSION['test_nb6'] = $test_nb6;
    $_SESSION['test_po6'] = $test_po6;
    $_SESSION['test_day6'] = $test_day6;
    $_SESSION['sex6'] = $sex6;


    $name_id7 = $_POST['name_id7'];
    $bird_name7 = $_POST['bird_name7'];
    $scientific_name7 = $_POST['scientific_name7'];
    $birthday7 = $_POST['birthday7'];
    $foot_nb7 = $_POST['foot_nb7'];
    $foot_nb2_7 = $_POST['foot_nb2_7'];
    $foot_nb3_7 = $_POST['foot_nb3_7'];
    $foot_nb4_7 = $_POST['foot_nb4_7'];
    $foot_nb5_7 = $_POST['foot_nb5_7'];
    $foot_nb6_7 = $_POST['foot_nb6_7'];
    $wafer_nb7 = $_POST['wafer_nb7'];
    $test_nb7 = $_POST['test_nb7'];
    $test_po7 = $_POST['test_po7'];
    $test_day7 = $_POST['test_day7'];
    $sex7 = $_POST['sex7'];
    $_SESSION['test_nb7'] = $test_nb7;
    $_SESSION['name_id7'] = $name_id7;
    $_SESSION['bird_name7'] = $bird_name7;
    $_SESSION['scientific_name7'] = $scientific_name7;
    $_SESSION['birthday7'] = $birthday7;
    $_SESSION['foot_nb7'] = $foot_nb7;
    $_SESSION['foot_nb2_7'] = $foot_nb2_7;
    $_SESSION['foot_nb3_7'] = $foot_nb3_7;
    $_SESSION['foot_nb4_7'] = $foot_nb4_7;
    $_SESSION['foot_nb5_7'] = $foot_nb5_7;
    $_SESSION['foot_nb6_7'] = $foot_nb6_7;
    $_SESSION['wafer_nb7'] = $wafer_nb7;
    $_SESSION['test_nb7'] = $test_nb7;
    $_SESSION['test_po7'] = $test_po7;
    $_SESSION['test_day7'] = $test_day7;
    $_SESSION['sex7'] = $sex7;


    $name_id8 = $_POST['name_id8'];
    $bird_name8 = $_POST['bird_name8'];
    $scientific_name8 = $_POST['scientific_name8'];
    $birthday8 = $_POST['birthday8'];
    $foot_nb8 = $_POST['foot_nb8'];
    $foot_nb2_8 = $_POST['foot_nb2_8'];
    $foot_nb3_8 = $_POST['foot_nb3_8'];
    $foot_nb4_8 = $_POST['foot_nb4_8'];
    $foot_nb5_8 = $_POST['foot_nb5_8'];
    $foot_nb6_8 = $_POST['foot_nb6_8'];
    $wafer_nb8 = $_POST['wafer_nb8'];
    $test_nb8 = $_POST['test_nb8'];
    $test_po8 = $_POST['test_po8'];
    $test_day8 = $_POST['test_day8'];
    $sex8 = $_POST['sex8'];
    $_SESSION['test_nb8'] = $test_nb8;
    $_SESSION['name_id8'] = $name_id8;
    $_SESSION['bird_name8'] = $bird_name8;
    $_SESSION['scientific_name8'] = $scientific_name8;
    $_SESSION['birthday8'] = $birthday8;
    $_SESSION['foot_nb8'] = $foot_nb8;
    $_SESSION['foot_nb2_8'] = $foot_nb2_8;
    $_SESSION['foot_nb3_8'] = $foot_nb3_8;
    $_SESSION['foot_nb4_8'] = $foot_nb4_8;
    $_SESSION['foot_nb5_8'] = $foot_nb5_8;
    $_SESSION['foot_nb6_8'] = $foot_nb6_8;
    $_SESSION['wafer_nb8'] = $wafer_nb8;
    $_SESSION['test_nb8'] = $test_nb8;
    $_SESSION['test_po8'] = $test_po8;
    $_SESSION['test_day8'] = $test_day8;
    $_SESSION['sex8'] = $sex8;

}
//
//echo $_SESSION['sex'];
//echo $_SESSION['sex2'];

?>

<!DOCTYPE html>
<html lang="en" prefix='og: http://www.bioguard.com.tw/bioguard/index.php'>

<head>
    <meta charset="UTF-8">
    <meta name="Robots" contect="none">
    <title></title>


</head>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style:none;
        font-family: 'Open Sans','微軟正黑體';
        text-decoration: none;
        box-sizing: border-box;
    }

    .container{
        width: 680px;
        position: relative;
        left: 15px;
        margin: auto;

        box-sizing: border-box;
    }

    .cart_area{
        position: absolute;
        width: 680px;
        margin: auto;
        left: 0;
        right: 0;



    }

    .cart{
        width: 340px;
        height: 245px;
        position: relative;
        left: 4px;
        display: inline-block;
        margin-right: -5px;

    }

    .bird_pic{
        margin-bottom: 8px;
    }

    .word{
        position: relative;
    }



    .cart > .aa > img{
        position: absolute;
    }

    .cart_bg1{
        border-right: 2px dashed #aaa;
    }/*一定要2px*/

    .cart .word ul{
        position: absolute;
        left: 150px;
        top: 18px;


    }

    .cart .word ul li{
        margin: -5px 0;
    }

    .cart .word ul li:nth-child(5) p{
        color: #0000fa;
    }

    .cart .word ul li:nth-child(6) p{
        color: #0000fa;
    }

    .cart .word ul li b{
        font-size: 12px;
        display: inline-block;
    }

    .cart .word ul li:nth-child(9) b:nth-child(1){
        font-size: 16px;
    }

    .cart .word ul li:nth-child(9) b:nth-child(2){
        font-size: 19px;
        text-decoration: underline;
    }/*輸出的文字*/

    .cart .word ul li p{
        font-size: 12px;
        display: inline-block;
    }

    .word2{
        position: absolute;
        left: 20px;
        top:173px;
        display: none;
    }

    .cart .word2 ul li b,.cart .word2 ul li p{
        font-size: 12px;
        display: inline-block;
    }

    .blue{
        color: #00f;
    }

    .red{
        color: #f00;
    }

    .gray{
        color: #595757;
    }

    .tangerine{
        color: #EB6000;
    }

    .select_box1 b{
        display: inline-block;
    }

    .select_box1 #a1{
        display: inline-block;
    }

    .bird_pic ul{
        position: absolute;
        top: 85px;
        left: 15px;
        border: 1px solid #ccc;
        width: 125px;
        height: 110px;
        overflow: hidden;
    }

    .bird_pic ul li{
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        display: none;
    }


    .bird_pic ul .block{
        display: block;
    }

    .back{
        width: 190px;
        font-size: 24px;
        margin: 10px;
        color: #0000fa;
        cursor: pointer;
    }

    .back:hover{
        text-decoration: underline;
        color: #f00;
    }

    .index_orBack p{
        display: inline-block;
        text-decoration: underline;
    }

    .cart .cart_bg{
        display: none;
    }

    .cart .cart_block{
        display: block;
    }

    .sex_area{
        position: absolute;
        top: 150px;
        left: -130px;
    }

    .word li:nth-child(5){
        padding-top: 10px;
        height: 40px;

        line-height: 2px;

    }

    .word li:nth-child(5) p{
        margin-top: 10px;
    }

    .word li:nth-child(6){
        padding-top: 15px;
        height: 40px;

        line-height: 2px;

    }

    .word li:nth-child(6) p{
        margin-top: 12px;
    }

    table{
        margin-top: -2px;
        margin-left: 35px;
        text-align: center;
    }








</style>


<body>


<div class="container">
    <div class="index_orBack">
        <p><a id="change_cart_back" href="javascript:;">切換鳥卡背面</a></p><n>&nbsp;</n><n>&nbsp;</n>
        <p><a id="change_cart_back2" href="javascript:;">切換鳥卡正面</a></p><n>&nbsp;</n><n>&nbsp;</n>
        <!--        <p><a id="male_cart" href="javascript:;">全部切換公鳥卡</a></p><n>&nbsp;</n><n>&nbsp;</n>-->
        <!--        <p><a id="female_cart" href="javascript:;">全部切換母鳥卡</a></p><n>&nbsp;</n><n>&nbsp;</n>-->
        <p><a href="lactate.php">回到LDHA鳥卡輸入</a></p>
    </div>
    <div class="cart_area">


        <?php if($_POST['test_nb'] != ""): ?>
            <div class="cart " id="cart1">
                <div class="bird_pic" id="bird_pic1">
                    <b class="blue">LDHA-鳥卡1</b>
                    <select class="a1">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>
                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>

                <div class="word">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_1'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_1'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_1'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_1'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_1'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                                <?php
                                include(__DIR__ . '/__ldha.php');
                                ?>
                            <?php if($_POST['sex'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex'] ?>
                                </b>
                            <?php elseif($_POST['sex'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex'] ?>
                                </b>
                            <?php elseif($_POST['sex'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex'] ?>
                                </b>
                            <?php endif; ?>

                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb2'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($_POST['test_nb2'] != ""): ?>
            <div class="cart" id=" cart2">
                <div class="bird_pic" id="bird_pic2">
                    <b class="blue">LDHA-鳥卡2</b>
                    <select class="a2">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>
                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>

                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id2'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name2'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name2'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday2'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb2'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_2'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb2'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_2'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_2'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_2'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_2'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb2'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po2'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day2'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex2'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex2'] ?>
                                </b>
                            <?php elseif($_POST['sex2'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex2'] ?>
                                </b>
                            <?php elseif($_POST['sex2'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex2'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($_POST['test_nb3'] != ""): ?>
            <div class="cart" id=" cart3">
                <div class="bird_pic" id="bird_pic3">
                    <b class="blue">LDHA-鳥卡3</b>
                    <select class="a3">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>

                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>


                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id3'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name3'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name3'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday3'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb3'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb3'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_3'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb3'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_3'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_3'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_3'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_3'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb3'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po3'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day3'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex3'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex3'] ?>
                                </b>
                            <?php elseif($_POST['sex3'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex3'] ?>
                                </b>
                            <?php elseif($_POST['sex3'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex3'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb4'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($_POST['test_nb4'] != ""): ?>
            <div class="cart" id=" cart4">
                <div class="bird_pic" id="bird_pic4">
                    <b class="blue">LDHA-鳥卡4</b>
                    <select class="a4">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>

                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>


                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id4'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name4'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name4'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday4'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb4'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb4'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_4'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb4'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_4'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_4'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_4'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_4'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb4'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po4'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day4'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex4'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex4'] ?>
                                </b>
                            <?php elseif($_POST['sex4'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex4'] ?>
                                </b>
                            <?php elseif($_POST['sex4'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex4'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb3'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($_POST['test_nb5'] != ""): ?>
            <div class="cart" id=" cart5">
                <div class="bird_pic" id="bird_pic5">
                    <b class="blue">LDHA-鳥卡5</b>
                    <select class="a5">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>

                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>


                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id5'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name5'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name5'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday5'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb5'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb5'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_5'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb5'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_5'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_5'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_5'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_5'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb5'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po5'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day5'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex5'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex5'] ?>
                                </b>
                            <?php elseif($_POST['sex5'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex5'] ?>
                                </b>
                            <?php elseif($_POST['sex5'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex5'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb6'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($_POST['test_nb6'] != ""): ?>
            <div class="cart" id=" cart6">
                <div class="bird_pic" id="bird_pic6">
                    <b class="blue">LDHA-鳥卡6</b>
                    <select class="a6">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>

                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>


                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id6'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name6'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name6'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday6'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb6'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb6'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_6'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb6'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_6'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_6'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_6'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_6'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb6'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po6'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day6'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex6'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex6'] ?>
                                </b>
                            <?php elseif($_POST['sex6'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex6'] ?>
                                </b>
                            <?php elseif($_POST['sex6'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex6'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb5'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($_POST['test_nb7'] != ""): ?>
            <div class="cart" id=" cart7">
                <div class="bird_pic" id="bird_pic7">
                    <b class="blue">LDHA-鳥卡7</b>
                    <select class="a7">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>

                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>


                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id7'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name7'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name7'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday7'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb7'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb7'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_7'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb7'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_7'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_7'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_7'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_7'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb8'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po7'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day7'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex7'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex7'] ?>
                                </b>
                            <?php elseif($_POST['sex7'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex7'] ?>
                                </b>
                            <?php elseif($_POST['sex7'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex7'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb8'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>


        <?php if($_POST['test_nb8'] != ""): ?>
            <div class="cart" id=" cart8">
                <div class="bird_pic" id="bird_pic8">
                    <b class="blue">LDHA-鳥卡8</b>
                    <select class="a8">
                        <?php
                        include(__DIR__ . '/__option.php');
                        ?>
                    </select>
                    <?php
                    include(__DIR__ . '/__bird_pic.php');
                    ?>
                </div>

                    <?php
                    include(__DIR__ . '/__lactate_bg.php');
                    ?>


                <div class="word">
                    <ul>
                        <li><?php
                            include(__DIR__ . '/__name_id.php');
                            ?>
                            <p>
                                <?= $_POST['name_id8'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__bird_name.php');
                            ?>
                            <p>
                                <?= $_POST['bird_name8'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__scientific_name.php');
                            ?>
                            <p>
                                <?= $_POST['scientific_name8'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__birthday.php');
                            ?>
                            <p>
                                <?= $_POST['birthday8'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__foot_nb.php');
                            ?>
                            <?php if($_POST['foot_nb8'] != ""): ?>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb8'] ?>
                                </p>
                                </br>
                                <p>
                                    <?= $_POST['foot_nb2_8'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if($_POST['foot_nb8'] == ""): ?>

                                <table>
                                    <tr>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb3_8'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb4_8'] ?>
                                            </p>
                                        </td>
                                        <td rowspan="2">
                                            <p>
                                                <?= $_POST['foot_nb6_8'] ?>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <?= $_POST['foot_nb5_8'] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__wafer_nb.php');
                            ?>
                            </br>
                            <p>
                                <?= $_POST['wafer_nb8'] ?>
                            </p>
                        </li>

                        <li>
                            <?php
                            include(__DIR__ . '/__test_po.php');
                            ?>
                            <p>
                                <?= $_POST['test_po8'] ?>
                            </p>
                        </li>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_day.php');
                            ?>
                            <p>
                                <?= $_POST['test_day8'] ?>
                            </p>
                        </li>
                        <li class="sex_area">
                            <?php
                            include(__DIR__ . '/__ldha.php');
                            ?>
                            <?php if($_POST['sex8'] == "AA-最佳"): ?>
                                <b class="blue big2">
                                    <?= $_POST['sex8'] ?>
                                </b>
                            <?php elseif($_POST['sex8'] == "AB-好"): ?>
                                <b class="tangerine big2">
                                    <?= $_POST['sex8'] ?>
                                </b>
                            <?php elseif($_POST['sex8'] == "BB-普通"): ?>
                                <b class="gray big2">
                                    <?= $_POST['sex8'] ?>
                                </b>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="word2">
                    <ul>
                        <li>
                            <?php
                            include(__DIR__ . '/__test_nb.php');
                            ?>
                            <p>
                                <?= $_POST['test_nb7'] ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>

</div>


<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
<script src="js/__bird_pic_control.js"></script>


<script>

    $(function(){




    });

</script>
</body>
</html>
