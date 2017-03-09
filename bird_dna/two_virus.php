<?php

if(! isset($_SESSION)){
    session_start();
}

$_SESSION['test_nb'] = "";
$_SESSION['test_nb2'] = "";
$_SESSION['test_nb3'] = "";
$_SESSION['test_nb4'] = "";
$_SESSION['test_nb5'] = "";
$_SESSION['test_nb6'] = "";
$_SESSION['test_nb7'] = "";
$_SESSION['test_nb8'] = "";


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
        height: 1920px;
    }

    .container .word{
        display: inline-block;
        margin: 20px;
    }

    #submit1{

        margin-left: 40px;
        margin-top: 30px;
        cursor: pointer;
    }

    .title{
        font-size: 24px;
        color: #00f;
    }

    .form-group{
        margin: 10px 0;
    }

    .aa{
        margin-top: 50px;
        margin-left: 20px;
        font-size: 18px;
        color: #0000bf;
    }


    .aa:hover{
        text-decoration: underline;
        color: #f00;
    }

    .red{
        color: #f00;
    }



</style>


<body>


<div class="container">
    </br>
    <?php
    include(__DIR__ . '/__link.php');
    ?>
    <form name="form2" class="form-horizontal" method="post" action="two_virus_out_put.php">
        <div class="word"><b class="title">雙病毒-鳥卡1</b>

            <div class="form-group">
                <label for="name_id" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id" name="name_id" placeholder="飼主名" >
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name" name="bird_name" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name" name="scientific_name" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb" name="foot_nb" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_1" name="foot_nb2_1" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_1" name="foot_nb3_1" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_1" name="foot_nb4_1" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_1" name="foot_nb5_1" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_1" name="foot_nb6_1" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb" name="wafer_nb" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb" name="test_nb" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po" name="test_po" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day" name="test_day" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd" name="pbfd" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd" name="pbfd" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv" name="apv" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv" name="apv" value="陰性">陰性
                </div>
            </div>



        </div>


        <div class="word"><b class="title">雙病毒-鳥卡2</b>

            <div class="form-group">
                <label for="name_id2" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id2" name="name_id2" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name2" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name2" name="bird_name2" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name2" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name2" name="scientific_name2" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday2" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday2" name="birthday2" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb2" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb2" name="foot_nb2" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_2" name="foot_nb2_2" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_2" name="foot_nb3_2" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_2" name="foot_nb4_2" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_2" name="foot_nb5_2" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_2" name="foot_nb6_2" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb2" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb2" name="wafer_nb2" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb2" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb2" name="test_nb2" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po2" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po2" name="test_po2" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day2" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day2" name="test_day2" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd2" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd2" name="pbfd2" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd2" name="pbfd2" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv2" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv2" name="apv2" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv2" name="apv2" value="陰性">陰性
                </div>
            </div>



        </div>


        <div class="word"><b class="title">雙病毒-鳥卡3</b>

            <div class="form-group">
                <label for="name_id3" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id3" name="name_id3" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name3" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name3" name="bird_name3" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name3" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name3" name="scientific_name3" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday3" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday3" name="birthday3" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb3" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb3" name="foot_nb3" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_3" name="foot_nb2_3" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_3" name="foot_nb3_3" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_3" name="foot_nb4_3" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_3" name="foot_nb5_3" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_3" name="foot_nb6_3" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb3" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb3" name="wafer_nb3" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb3" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb3" name="test_nb3" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po3" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po3" name="test_po3" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day3" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day3" name="test_day3" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd3" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd3" name="pbfd3" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd3" name="pbfd3" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv3" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv3" name="apv3" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv3" name="apv3" value="陰性">陰性
                </div>
            </div>



        </div>


        <div class="word"><b class="title">雙病毒-鳥卡4</b>

            <div class="form-group">
                <label for="name_id4" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id4" name="name_id4" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name4" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name4" name="bird_name4" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name4" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name4" name="scientific_name4" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday4" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday4" name="birthday4" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb4" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb4" name="foot_nb4" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_4" name="foot_nb2_4" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_4" name="foot_nb3_4" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_4" name="foot_nb4_4" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_4" name="foot_nb5_4" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_4" name="foot_nb6_4" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb4" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb4" name="wafer_nb4" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb4" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb4" name="test_nb4" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po4" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po4" name="test_po4" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day4" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day4" name="test_day4" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd4" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd4" name="pbfd4" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd4" name="pbfd4" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv4" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv4" name="apv4" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv4" name="apv4" value="陰性">陰性
                </div>
            </div>


        </div>


        </br>

        <div class="word"><b class="title">雙病毒-鳥卡5</b>

            <div class="form-group">
                <label for="name_id5" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id5" name="name_id5" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name5" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name5" name="bird_name5" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name5" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name5" name="scientific_name5" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday5" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday5" name="birthday5" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb5" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb5" name="foot_nb5" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_5" name="foot_nb2_5" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_5" name="foot_nb3_5" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_5" name="foot_nb4_5" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_5" name="foot_nb5_5" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_5" name="foot_nb6_5" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb5" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb5" name="wafer_nb5" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb5" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb5" name="test_nb5" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po5" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po5" name="test_po5" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day5" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day5" name="test_day5" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd5" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd5" name="pbfd5" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd5" name="pbfd5" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv5" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv5" name="apv5" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv5" name="apv5" value="陰性">陰性
                </div>
            </div>



        </div>

        <div class="word"><b class="title">雙病毒-鳥卡6</b>

            <div class="form-group">
                <label for="name_id6" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id6" name="name_id6" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name6" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name6" name="bird_name6" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name6" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name6" name="scientific_name6" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday6" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday6" name="birthday6" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb6" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb6" name="foot_nb6" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_6" name="foot_nb2_6" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_6" name="foot_nb3_6" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_6" name="foot_nb4_6" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_6" name="foot_nb5_6" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_6" name="foot_nb6_6" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb6" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb6" name="wafer_nb6" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb6" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb6" name="test_nb6" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po6" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po6" name="test_po6" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day6" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day6" name="test_day6" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd6" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd6" name="pbfd6" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd6" name="pbfd6" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv6" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv6" name="apv6" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv6" name="apv6" value="陰性">陰性
                </div>
            </div>



        </div>

        <div class="word"><b class="title">雙病毒-鳥卡7</b>

            <div class="form-group">
                <label for="name_id7" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id7" name="name_id7" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name7" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name7" name="bird_name7" placeholder="鳥名">
                </div>
            </div>

            <div class="form-group">
                <label for="scientific_name7" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name7" name="scientific_name7" placeholder="鳥類學名">
                </div>
            </div>

            <div class="form-group">
                <label for="birthday7" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday7" name="birthday7" placeholder="生日">
                </div>
            </div>

            <div class="form-group">
                <label for="foot_nb7" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb7" name="foot_nb7" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_7" name="foot_nb2_7" placeholder="右">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_7" name="foot_nb3_7" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_7" name="foot_nb4_7" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_7" name="foot_nb5_7" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_7" name="foot_nb6_7" placeholder="右">
                </div>
            </div>

            <div class="form-group">
                <label for="wafer_nb7" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb7" name="wafer_nb7" placeholder="晶片號碼">
                </div>
            </div>

            <div class="form-group">
                <label for="test_nb7" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb7" name="test_nb7" placeholder="送檢編號">
                </div>
            </div>

            <div class="form-group">
                <label for="test_po7" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po7" name="test_po7" placeholder="送檢單位">
                </div>
            </div>

            <div class="form-group">
                <label for="test_day7" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day7" name="test_day7" placeholder="檢測日期">
                </div>
            </div>

            <div class="form-group">
                <label for="pbfd7" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd7" name="pbfd7" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd7" name="pbfd7" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv7" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv7" name="apv7" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv7" name="apv7" value="陰性">陰性
                </div>
            </div>



        </div>

        <div class="word"><b class="title">雙病毒-鳥卡8</b>

            <div class="form-group">
                <label for="name_id8" class="col-sm-2 control-label">飼主名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id8" name="name_id8" placeholder="飼主名">
                </div>
            </div>
            <div class="form-group">
                <label for="bird_name8" class="col-sm-2 control-label">鳥名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bird_name8" name="bird_name8" placeholder="鳥名">
                </div>
            </div>


            <div class="form-group">
                <label for="scientific_name8" class="col-sm-2 control-label">鳥類學名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name8" name="scientific_name8" placeholder="鳥類學名">
                </div>
            </div>


            <div class="form-group">
                <label for="birthday8" class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthday8" name="birthday8" placeholder="生日">
                </div>
            </div>


            <div class="form-group">
                <label for="foot_nb8" class="col-sm-2 control-label">腳環環號1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="foot_nb8" name="foot_nb8" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb2_8" name="foot_nb2_8" placeholder="下">
                    </br>
                    腳環環號2
                    </br>
                    <input type="text" class="form-control" id="foot_nb3_8" name="foot_nb3_8" placeholder="左">
                    </br>
                    <input type="text" class="form-control" id="foot_nb4_8" name="foot_nb4_8" placeholder="上">
                    </br>
                    <input type="text" class="form-control" id="foot_nb5_8" name="foot_nb5_8" placeholder="下">
                    </br>
                    <input type="text" class="form-control" id="foot_nb6_8" name="foot_nb6_8" placeholder="右">
                </div>
            </div>


            <div class="form-group">
                <label for="wafer_nb8" class="col-sm-2 control-label">晶片號碼</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wafer_nb8" name="wafer_nb8" placeholder="晶片號碼">
                </div>
            </div>


            <div class="form-group">
                <label for="test_nb8" class="col-sm-2 control-label red">*送檢編號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_nb8" name="test_nb8" placeholder="送檢編號">
                </div>
            </div>


            <div class="form-group">
                <label for="test_po8" class="col-sm-2 control-label">送檢單位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_po8" name="test_po8" placeholder="送檢單位">
                </div>
            </div>


            <div class="form-group">
                <label for="test_day8" class="col-sm-2 control-label">檢測日期</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="test_day8" name="test_day8" placeholder="檢測日期">
                </div>
            </div>


            <div class="form-group">
                <label for="pbfd8" class="col-sm-2 control-label red">PBFD病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="pbfd8" name="pbfd8" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="pbfd8" name="pbfd8" value="陰性">陰性
                </div>
            </div>

            <div class="form-group">
                <label for="apv8" class="col-sm-2 control-label red">APV病毒</label>
                <div class="col-sm-10 sexCheck">
                    <input type="radio" class="form-control" id="apv8" name="apv8" value="陽性" checked="checked">陽性
                    <input type="radio" class="form-control" id="apv8" name="apv8" value="陰性">陰性
                </div>
            </div>
        </div>

        <div id="submit1">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" style="width:120px;height:40px;font-size:20px;" class="btn btn-default">送出</button>
            </div>
        </div>
    </form>

</div>


<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>


<script>

    $(function(){

        $('.check_male').click(function(){
            window.location.reload();
        });

        $('.check_female').click(function(){
            $(".sexCheck > input:nth-child(1)").removeAttr("checked");
            $(".sexCheck > input:nth-child(2)").attr("checked",'checked');

        });



    });

</script>
</body>
</html>