<?php
require __DIR__. '/__connect_db.php';
include __DIR__ . '/__is_login.php';
//if (version_compare(PHP_VERSION, '5.4.0') >= 0) {
//    echo ' [OK] PHP version is newer than 5.4: '.phpversion();
//} else {
//    echo ' [ERROR] Your PHP version is too old for CKFinder 3.x.';
//}
//
//if (!function_exists('gd_info')) {
//    echo ' [ERROR] GD extension is NOT enabled.';
//} else {
//    echo ' [OK] GD extension is enabled.';
//}
//
//if (!function_exists('finfo_file')) {
//    echo ' [ERROR] Fileinfo extension is NOT enabled.';
//} else {
//    echo ' [OK] Fileinfo extension is enabled.';
//}

//  ↑為了檢驗PHP系統是否支援



// ↑判斷有沒有post出去，有就顯示沒有就不顯示錯誤訊息

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>百衛官網後台-最新消息-中(簡體)</title>
    <link rel="stylesheet" type="text/css" href="css/bioguard_edit_news_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/環抱logo(網業用).png">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>

    <script>
        function processData(){
            // getting data
            var data = CKEDITOR.instances.content.getData();
            alert(data);
            form.submit();/*送出表單*/
        }
    </script><!--此javascript為了要測試內容編輯器有沒有安裝完全，我們可以利用javascript來測試看看是否讀取的到CKEditor裡面的內容-->

</head>
<style>






</style>


<body>

<div class="container">
    </br>
    <div class="news_link">
        <a href="logout.php">*--登出後台--*</a>
    </div></br>
    <div class="news_link">
        <a href="bioguard_edit_news_ch.php">最新消息-中(簡體版)</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="bioguard_edit_news_chs.php">最新消息-中(簡)</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="bioguard_edit_news_english.php">最新消息-英文</a>
    </div>
    </br></br>
    <form name = 'form' action = '__news_update_chs.php' method='post'>
        <h1 class="title_word blue">百卫生物科技官网后台-最新消息-中(簡體版)*注意事簡體版唷！*</h1>
        </br>
        <p></p>
        </br>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label red" >**請輸入標題：</label>
            <div class="col-sm-12">
                <input type="text" class="form-control w_2" id="title" name="title" placeholder="請輸入標題">
            </div>
        </div>
        </br>
        <div class="form-group">
            <label for="bookdate" class="col-sm-2 control-label red">**日期：</label>
            <div class="col-sm-10">
                <input type="date" id="bookdate" name="bookdate" placeholder="2014-09-18">
            </div>
        </div>
        </br>
        </br>
        </br>
        <div class="form-group">
            <div class="col-sm-12">
                <textarea name="content" id="content" rows="10" cols="34" wrap="soft"></textarea><!--輸入文字超過長度會自動換行；會依照螢幕所見到的樣式，送出資料。-->
                <script>
                    CKFinder.setupCKEditor();
                    CKEDITOR.replace( 'content', {
                        //輸入客製化條件
                        width:1020,//設定內容編輯器寬度

                    });

                </script>
            </div>
        </div>
        </br>
        <input type = 'button' value = '送出' onclick = 'processData()'>
    </form>
    </br>
    <div class="news_link">
        <n>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</n><a href="bioguard_delete_news_chs.php">→前往刪除最新消息←</a>
    </div>
    </br>
    </br>

</div>





<script src="lib/jquery-1.12.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>

<!--<script src="js/products_farmAnimals_vaccines.js"></script>-->
<!--<script src="js/logo.js"></script>-->

<script>

    $(function(){




    });

</script>
</body>
</html>