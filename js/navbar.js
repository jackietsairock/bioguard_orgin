
$(function() {

    var container_top_offset = $('.container').offset().top;
    var win_resize = $(window).width();
    var scrollbar_top = $(window).scrollTop();

    //console.log('container的頂端距離是' + container_top_offset);

    /*內文淡入----------*/
    $('.container,.footer').hide().fadeIn(500);
    /*----------*/

    $(window).scroll(function() {
        scrollbar_top = $(window).scrollTop();
        //console.log('視窗卷軸距離頂端是 ' + scrollbar_top);

        if(scrollbar_top >= 200){
            //naverbar滑下來特效
            //$('.header').css({'position':'fixed','top':'-155px','display':'none'});

            $('.fake_header').css({'display':'block'});
            if(scrollbar_top >= 250){
                $('.header').css({'display':'block'});
            }
            if(scrollbar_top >= 300){
                $('.header').css({'top':'0'});
                $('.header').css({'z-index':'3'});

                $('.detection-report-online-link').css({'top':'85px'});
                $('.line-link').css({'top':'82px'});

            }
        }else{
            $('.header').css({'position':'relative','display':'block','top':'0'});

            $('.fake_header').css({'display':'none'});

            $('.detection-report-online-link').css({'top':'85px'});
            $('.line-link').css({'top':'82px'});

        }

    });

    /*----選單的fadeIn fadeOut------------------------*/

    /*about us-------*/
    $(".link-1_area, .link-1, .select-area-1").hover(function() {
        $(".select-area-1").stop(true,false).fadeIn(300);

    }, function(){
        $(".select-area-1").stop(true,false).fadeOut(300);
    });
    /*-----------*/

    /*products-------*/
    $(".link-2_area, .link-2, .select-area-2").hover(function() {
        $(".select-area-2").stop(true,false).fadeIn(300);
    }, function(){
        $(".select-area-2").stop(true,false).fadeOut(300);
    });

    //以下為第二層

    $(".select-area-1-link, .select-area-2-1").hover(function() {
        $(".select-area-2-1").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-2-1").stop(true,false).fadeOut(300);
    });

    $(".select-area-2-link, .select-area-2-2").hover(function() {
        $(".select-area-2-2").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-2-2").stop(true,false).fadeOut(300);
    });

    $(".select-area-3-link, .select-area-2-3").hover(function() {
        $(".select-area-2-3").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-2-3").stop(true,false).fadeOut(300);
    });

    /*-----------*/


    /*DIAGNOSTIC CENTER-------*/
    $(".link-3_area, .link-3, .select-area-3").hover(function() {
        $(".select-area-3").stop(true,false).fadeIn(300);
    }, function(){
        $(".select-area-3").stop(true,false).fadeOut(300);
    });

    $(".select-area-1-link, .select-area-3-1").hover(function() {
        $(".select-area-3-1").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-3-1").stop(true,false).fadeOut(300);
    });

    $(".select-area-2-link, .select-area-3-2").hover(function() {
        $(".select-area-3-2").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-3-2").stop(true,false).fadeOut(300);
    });

    $(".select-area-3-link, .select-area-3-3").hover(function() {
        $(".select-area-3-3").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-3-3").stop(true,false).fadeOut(300);
    });

    $(".select-area-4-link, .select-area-3-4").hover(function() {
        $(".select-area-3-4").stop(true, false).fadeIn(300);
    }, function(){
        $(".select-area-3-4").stop(true,false).fadeOut(300);
    });



    /*----------------------------*/

    $(".line-link").hover(function() {
        $(".line-link a").css({'background':'url("./images/icon/line-icon-09.png") 0 0 no-repeat'});
    }, function(){
        $(".line-link a").css({'background':'url("./images/icon/line-icon-08.png") 0 0 no-repeat'});
    }); //line icon的變顏色


    $(".Language-link-area li p").hover(function() {
        $(this).css({'color':'#58B542'});
    }, function(){
        $(".Language-link-area li p").css({'color':'#296E49'});
    });



    /*-瀏覽器偵測視窗rwd-------------*/

    var winresize = function(){
        var win_resize = $(window).width();

        if(win_resize <= 1024){
            $('.menu-area').css({'display':'none'});
            $('.header, .header_bg ,.fake_header').css({'height':'120px'});
            $('.menu-area2').css({'display':'block'});
        }else{
            $('.menu-area').css({'display':'block'});
            $('.header, .header_bg ,.fake_header').css({'height':'155px'});
            $('.menu-area2').css({'display':'none'});

        }
    };


    $(window).width(function(){
        winresize();
    });

    $(window).resize(function(){
        winresize();
    });

        /*menu_bar*/

    $('.menu-area2 ul,.select-area-style22, .select-area-style33').css({'display':'none'});

    $('.sandwich_icon').click(function() {
        if($('.menu-area2 ul').hasClass('retract')) {
            $('.sandwich_icon').css({'background':'url("./images/icon/sandwich_icon.png")'});
            $('.menu-area2 ul').removeClass('retract');
            $('.menu-area2 ul').stop(true, false).slideUp();
        } else {
            $('.sandwich_icon').css({'background':'url("./images/icon/sandwich_icon_2.png")'});
            $('.menu-area2 ul').addClass('retract');
            $('.menu-area2 ul').stop(true, false).slideDown();
        }
    });



    $('.link2-1').click(function() {
        if($('.select-area2-1').hasClass('retract')) {
            $('.select-area2-1').removeClass('retract');
            $('.select-area2-1').stop(true, false).slideUp();
        } else {
            $('.select-area2-1').addClass('retract');
            $('.select-area2-1').stop(true, false).slideDown();
        }
    });

    $('.link2-2').click(function() {
        if($('.select-area2-2').hasClass('retract')) {
            $('.select-area2-2').removeClass('retract');
            $('.select-area2-2').stop(true, false).slideUp();
        } else {
            $('.select-area2-2').addClass('retract');
            $('.select-area2-2').stop(true, false).slideDown();
        }
    });

    $('.link2-3').click(function() {
        if($('.select-area2-3').hasClass('retract')) {
            $('.select-area2-3').removeClass('retract');
            $('.select-area2-3').stop(true, false).slideUp();
        } else {
            $('.select-area2-3').addClass('retract');
            $('.select-area2-3').stop(true, false).slideDown();
        }
    });

    $('.link3-1').click(function() {
        if($('.select-area2-2-1').hasClass('retract')) {
            $('.select-area2-2-1').removeClass('retract');
            $('.select-area2-2-1').stop(true, false).slideUp();
        } else {
            $('.select-area2-2-1').addClass('retract');
            $('.select-area2-2-1').stop(true, false).slideDown();
        }
    });

    $('.link3-2').click(function() {
        if($('.select-area2-2-2').hasClass('retract')) {
            $('.select-area2-2-2').removeClass('retract');
            $('.select-area2-2-2').stop(true, false).slideUp();
        } else {
            $('.select-area2-2-2').addClass('retract');
            $('.select-area2-2-2').stop(true, false).slideDown();
        }
    });

    $('.link3-3').click(function() {
        if($('.select-area2-2-3').hasClass('retract')) {
            $('.select-area2-2-3').removeClass('retract');
            $('.select-area2-2-3').stop(true, false).slideUp();
        } else {
            $('.select-area2-2-3').addClass('retract');
            $('.select-area2-2-3').stop(true, false).slideDown();
        }
    });

    $('.link3-4').click(function() {
        if($('.select-area2-3-2').hasClass('retract')) {
            $('.select-area2-3-2').removeClass('retract');
            $('.select-area2-3-2').stop(true, false).slideUp();
        } else {
            $('.select-area2-3-2').addClass('retract');
            $('.select-area2-3-2').stop(true, false).slideDown();
        }
    });

        /*----------------*/

    /*----------------*/


});

