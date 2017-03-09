<?php


require __DIR__. '/__connect_db.php';



$rs = $mysqli->query("SELECT * FROM `news_update_chs` ORDER BY `id` DESC ");


?>
<!DOCTYPE html>
<html lang="en" prefix='og: http://www.bioguard.com.tw/bioguard/index.php'>
<head>
    <meta charset="UTF-8">
    <title>百卫生物科技股份有限公司 Bioguard corporation</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta property="og:title" content="Bioguard corporation 百衛生物科技股份有限公司" />
    <meta property="og:type" content="web-design" />
    <meta property="og:url" content="http://www.bioguard.com.tw/bioguard/index.php" />
    <meta property="og:image" content="http://www.bioguard.com.tw/bioguard/images/logo/logo-png.png" />
    <meta name="keywords" content="bioguard,百衛生物科技,百衛生技,百衛,生技公司,動物疾病檢測中心,寵物保健食品,鳥類檢測,鳥類保健食品,疾病快篩,疫苗,實驗室,寵物藥品" />
    <meta name="description" content="bioguard,百衛生物科技,百衛生技,百衛,生技公司,動物疾病檢測中心,寵物保健食品,寵物健康食品,犬貓保健,鳥類檢測,鳥類保健食品,疾病快篩,rapid test,疫苗,實驗室,寵物藥品,最優惠,KATION行星治療計畫,食慾促進配方,皮毛保健配方,關節保健配方,眼睛保健配方,抑制口臭配方" />
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
    <div class="slider">
        <div class="sliderContent">
            <ul>
                <li><img src="images/banner/pic1.png"></li>
                <li><img src="images/banner/pic2.png"></li>
                <li><img src="images/banner/pic3.png"></li>
                <li><img src="images/banner/pic4.png"></li>
                <li><img src="images/banner/pic5.png"></li>
                <li><img src="images/banner/pic6.png"></li>
            </ul>
        </div>

        <div class="control">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="main_info">
        <div class="mainInfo_area_style">
            <div class="mainInfo_title_style"><b>最新消息</b></div>
            <ul class="news_area_box">
                <?php  while($row = $rs->fetch_assoc()): ?>
                    <li>
                        <a href="news1_chs.php?id=<?= $row['id'] ?>"><b><?= $row['title'] ?></b></a>
                        </br>
                        <p><?= $row['bookdate'] ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="mainInfo_link_style"><img src="images/icon/arrow_right.png" alt="" width="5" height="9"><a href="news_chs.php"><p>最新消息专区</p></a></div>
        </div>
        <div class="mainInfo_area_style">
            <div class="mainInfo_title_style"><b>成果发表</b></div>
            <div class="presentation_area_box">
                <div class="slider2">
                    <div class="sliderContent2">
                        <ul>
                            <li><a href="images/news/all3.5.jpg"><img src="images/news/all3.5.jpg"></a></li>
                            <li><a href="images/news/2015-3-5.jpg"><img src="images/news/2015-3-5.jpg"></a></li>
                            <li><a href="images/news/VIV Asia 2015-3.jpg"><img src="images/news/VIV Asia 2015-3.jpg"></a></li>
                            <li><a href="images/news/VIV Asia 2015-2.jpg"><img src="images/news/VIV Asia 2015-2.jpg"></a></li>
                            <li><a href="images/news/VIV Asia 2015-1.jpg"><img src="images/news/VIV Asia 2015-1.jpg"></a></li>
                            <li><a href="images/news/20150413-2.jpg"><img src="images/news/20150413-2.jpg"></a></li>
                            <li><a href="images/news/20150413-1.jpg"><img src="images/news/20150413-1.jpg"></a></li>
                            <li><a href="images/news/2015ng_viras_party.png"><img src="images/news/2015ng_viras_party.png"></a></li>
                            <li><a href="images/news/20150730-2.jpg"><img src="images/news/20150730-2.jpg"></a></li>
                            <li><a href="images/news/20150730-1.jpg"><img src="images/news/20150730-1.jpg"></a></li>
                            <li><a href="images/news/20150818 Invitation card600.jpg"><img src="images/news/20150818 Invitation card600.jpg"></a></li>
                            <li><a href="images/news/20150818 News conference600.jpg"><img src="images/news/20150818 News conference600.jpg"></a></li>
                            <li><a href="images/news/shohei-pet-3.jpg"><img src="images/news/shohei-pet-3.jpg"></a></li>
                            <li><a href="images/news/shohei-pet-2.jpg"><img src="images/news/shohei-pet-2.jpg"></a></li>
                            <li><a href="images/news/shohei-pet-1.jpg"><img src="images/news/shohei-pet-1.jpg"></a></li>
                            <li><a href="images/news/CJVM_news.jpg"><img src="images/news/CJVM_news.jpg"></a></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="prev2"><i class="fa fa-arrow-circle-left"></i></a>
                    <a href="javascript:;" class="next2"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="mainInfo_area_style">
            <div class="mainInfo_title_style"><b>关於我们</b></div>
            <div class="news_area_box">
                <ui>
                    <li><img src="images/index/首頁關於我們.jpg" alt="" width="280" ></li>
                    <li>我们的使命是成为动物保健行业的领导品牌，致力於动物的健康与安全性。 Bioguard侧重於全球市场，不断创新我们的业务内容。我们倾听消费者的需求并提供客制化的服务。我们注重企业社会责任，以确保您的权利。我们生产安全且有效的动物疫苗，造福全世界。我们不仅致力於动物的健康，并为我们的客户提供专门的检测试剂盒，证明农产品的安全性，给人更安心的食用。我们是一家以研究为导向的公司，透过我们创新的动物健康产品为动物健康把关。
                    </li>
                </ui>
            </div>
            <div class="mainInfo_link_style"><img src="images/icon/arrow_right.png" alt="" width="5" height="9"><a href="javascript:;"><p>位於新北市五股工业园区</p></a></div>
            <div class="mainInfo_link_style"><img src="images/icon/arrow_right.png" alt="" width="5" height="9"><a href="innovation_chs.php"><p>R&D 研究中心</p></a></div>
        </div>
    </div>

</div>
<div class="location_fixed_area">
    <div class="location_box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1807.0576369867485!2d121.4527951!3d25.0640818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a89b38606c07%3A0x4cbfcd25832bb7b7!2z55m-6KGb55Sf54mp56eR5oqA6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1464244926432" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="location_delete_icon"></div>
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
<script src="js/logo.js"></script>

<!--↓ 繁简体转换-->
<!--<script type="text/javascript" src="http://www.bioguard.com.tw/bioguard/js/tw_cn.js"></script>-->
<!--<script type="text/javascript">-->
<!--    var defaultEncoding = 1;-->
<!--    var translateDelay = 0;-->
<!--    var cookieDomain = "http://www.bioguard.com.tw/";-->
<!--    var msgToTraditionalChinese = "繁体";-->
<!--    var msgToSimplifiedChinese = "简体";-->
<!--    var translateButtonId = "translateLink";-->
<!--    translateInitilization();-->
<!--</Script>-->
<!--**************-->

<script>

    $(function(){

        var slider_width = $('.slider').width();
        var slider_length = $('.sliderContent li').length;
        var control_index = 0;
        var speed = 4000;
        var tt = setTimeout(auto_play, speed);
        var li_index = 0;




        /*第一个slider---------------------------------------------------------*/

        $('.control li').eq(control_index).addClass('now');

        $('.sliderContent ul').width( slider_width * slider_length );
        $('.sliderContent li').width(slider_width);

        $('.control li').click(function(){
            control_index = $(this).index();
            sliderplay();
        })

//    $('.next').click(function(){
//        auto_play();
//    })

        function auto_play (){
            if(control_index < slider_length-1){
                control_index ++;   // 等同於control_index = control_index+1;
            }else{
                control_index = 0;
            }
            sliderplay();
            tt = setTimeout(auto_play, speed);
            console.log('被呼叫了');
        }

//    $('.prev').click(function(){
//        if(control_index > 0){
//            control_index --;   // 等同於control_index = control_index-1;
//        }else{
//            control_index = slider_length-1;
//        }
//        sliderplay();
//    })

        function sliderplay(){
            $('.control .now').removeClass();
            $('.control li').eq(control_index).addClass('now');
            $('.sliderContent ul').css({   'left': slider_width * control_index * -1});
        }

        $('.sliderContent').hover(
            function(){
                clearTimeout( tt );
                console.log('摸到罗');
            },
            function(){
                tt = setTimeout(auto_play, speed);
                console.log('离开罗');
            }
        )

        /*第二个slider---------------------------------------------------------*/
        var slider_width2 = $('.sliderContent2').width(); //不带参数的时候是返回第一个匹配元素的当前的宽度。
        var slider_length2 = $('.sliderContent2 li').length;//取得阵列的长度
        var control_index2 = 0;



        $('.sliderContent2 ul').width( slider_width2 * slider_length2); /*定义ul的宽为slider_width的宽度(也就是第一个元素的宽度)*/
        $('.sliderContent2 li').width( slider_width2);/*定义li的宽为slider_width的宽度(也就是第一个元素的宽度)*/

        $('.control2 li').click(function(){
            /* $('.control li').eq(control_index).removeClass(); */
            control_index2 = $(this).index();/*取得元素的数值*/
            sliderplaya();
        })

        if(control_index2 < slider_length2){
            $('.next2').click();
        }

        /*---window.setInterval(function() {   },3000);  周期性的执行大括号内的内容---*/
//    window.setInterval(function() {
//        if(control_index2 < slider_length2 -1){
//            control_index2 ++;
//        }else{
//            control_index2=0;
//        }
//
//        sliderplaya();
//    },5000);
        /*------------------*/

        /*------左箭头--------*/
        $('.next2').click(function(){
            if(control_index2 < slider_length2 -1){
                /* $('.control li').eq(control_index).removeClass(); */
                control_index2 ++;
            }else{
                /* $('.control li').eq(control_index).removeClass();*/
                control_index2=0;
            }
            sliderplaya();
        })

        /*------右箭头--------*/
        $('.prev2').click(function(){
            if(control_index2 > 0){
                /* $('.control li').eq(control_index).removeClass(); */
                control_index2 --;
            }else{
                /* $('.control li').eq(control_index).removeClass(); */
                control_index2=slider_length2-1;
            }
            sliderplaya();
        })

        /*------命名一个播放的function,将代码( sliderplay(); )放入原本位子,未来只需改一次就不用改3遍*/
        /*----实名含式用法可将同样的function(){内容} 内容里的动作凑成一个*/
        function sliderplaya(){
            $('.control2 li').removeClass(); // 将原本$('.control li').eq(control_index).removeClass(); 拉出来并将中间.eq(control_index)删除
            $('.sliderContent2 ul').css({ 'left': slider_width2 * control_index2 * -1});

        }

        /*---------------------------------------------------------*/

        $('.mainInfo_link_style').click(function(){
            $('.location_fixed_area').stop(true,false).fadeIn();
        })

        $('.location_delete_icon, .location_fixed_area').click(function(){
            $('.location_fixed_area').stop(true,false).fadeOut();
        })


    });

</script>
</body>
</html>