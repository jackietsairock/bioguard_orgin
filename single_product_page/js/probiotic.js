$(function() {

    var box_top_offset = $('.select').offset().top,
        scrollbar_top = $(window).scrollTop(),
        win_resize = $(window).width();

    console.log('box的頂端距離是' + box_top_offset);


    $('.container').fadeIn(1000);

    $(window).width(function(){
        var box_top_offset = $('.select').offset().top,
            scrollbar_top = $(window).scrollTop();

        if(win_resize > 0){
            if(scrollbar_top >= 114){
                $('.select').css({'position':'fixed','top':0 ,'z-index':4 });

            }else{
                $('.select').css({'position':'relative','top':0,'z-index':0 });
            }
        }
    });


    $(window).scroll(function() {

        var scrollbar_top = $(window).scrollTop(),
            box_top_offset = $('.select').offset().top;

        console.log('視窗卷軸距離頂端是 ' + scrollbar_top);

        if(scrollbar_top >= 114){
            $('.select').css({'position':'fixed','top':0 ,'z-index':4 });

        }else{
            $('.select').css({'position':'relative','top':0,'z-index':0 });
        }

        if(scrollbar_top > 1700){

            $('.box3_cat').addClass('cat_move');


        }else{

            $('.box3_cat').removeClass('cat_move');
        }

        if(scrollbar_top > 600){

            $('#goToTop_area').fadeIn(1000);
            $('#goToTop_area').addClass('cat_move');


        }else{

            $('#goToTop_area').fadeOut(1000);
            $('#goToTop_area').removeClass('cat_move');
        }

    });


    //
    //$('.menu1').click(function(){
    //
    //    $('body').stop(true,false).animate({scrollTop: 463},1000,"swing");
    //});
    //
    //$('.menu2').click(function(){
    //    $('body').stop(true,false).animate({scrollTop: 1271},1000,"swing");
    //});
    //
    //$('.menu3').click(function(){
    //    $('body').stop(true,false).animate({scrollTop: 2074},1000,"swing");
    //});
    //
    //$('.menu4').click(function(){
    //    $('body').stop(true,false).animate({scrollTop: 2870},1000,"swing");
    //});
    //
    //$('.menu5').click(function(){
    //    $('body').stop(true,false).animate({scrollTop: 3680},1000,"swing");
    //});
    //
    //$('.goToTop_area').click(function(){
    //    $('body').stop(true,false).animate({scrollTop: 0},1000,"swing");
    //});


    var li_index = 0;
    var slider_length = $('.box_2 > .box_2_style').length;

    $('.box_2 > .box_2_style').eq(li_index).fadeIn();
    $('.box_2 .box_2_style').eq(li_index).addClass('now');

    $('.box2_left_bottom').click(function(){
        if( li_index > 0){
            li_index --;
        }else{
            li_index = slider_length-1;
        }
        sliderplay();
    });


    function sliderplay(){
        $('.box_2_style .now').removeClass();
        $('.box_2  .box_2_style').eq( li_index).addClass('now');
        $('.box_2  .box_2_style').css({'display':'none'});
        $('.box_2  .box_2_style').eq(li_index).stop(true, false).fadeIn();

    }

    $('.box2_right_bottom').click(function(){
        auto_play();
    });

    function auto_play (){
        if( li_index < slider_length-1){
            li_index ++;
        }else{
            li_index = 0;
        }
        sliderplay();
    }




    // 幫 a.abgne_gotoheader 加上 click 事件
    $('.menu1').click(function(){
        // 讓捲軸用動畫的方式移動到 #header 的 top 位置
        // 並加入動畫效果
        // 感謝網友 sam 修正 Opera 問題
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: 463
        }, 1000, 'swing');

        return false;
    });

    $('.menu2').click(function(){

        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: 1271
        }, 1000, 'swing');

        return false;
    });

    $('.menu3').click(function(){

        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: 2074
        }, 1000, 'swing');

        return false;
    });

    $('.menu4').click(function(){

        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: 2765
        }, 1000, 'swing');

        return false;
    });

    $('.menu5').click(function(){

        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: 3512
        }, 1000, 'swing');

        return false;
    });

    $('#goToTop_area').click(function(){

        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: 0
        }, 1000, 'swing');

        return false;
    });





});