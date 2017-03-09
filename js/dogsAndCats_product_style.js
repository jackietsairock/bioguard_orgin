$(function(){


    var li_index = 0;
    var slider_length = $('.sliderContent li').length;


    $('.sliderContent li').eq(li_index).fadeIn();
    $('.control li').eq(li_index).addClass('now');
    $('.control2 li').eq(li_index).addClass('now');


    $('.control li,.control2 li').click(function(){
        $('.control .now').removeClass();
        $('.control2 .now').removeClass();

        $('.sliderContent li').css({'display':'none'});
        $('.sliderContent li').css({'display':'none'});
        li_index = $(this).index();
        $('.sliderContent li').eq(li_index).stop(true, false).fadeIn();
        $('.control li').eq(li_index).addClass('now');
        $('.control2 li').eq(li_index).addClass('now');
    });


    $('.prev').click(function(){
        if( li_index > 0){
            li_index --;
        }else{
            li_index = slider_length-1;
        }
        sliderplay();
    });

    $('.prev2').click(function(){
        if( li_index > 0){
            li_index --;
        }else{
            li_index = slider_length-1;
        }
        sliderplay();
    });


    function sliderplay(){
        $('.control .now').removeClass();
        $('.control2 .now').removeClass();
        $('.control li').eq( li_index).addClass('now');
        $('.control2 li').eq( li_index).addClass('now');

        $('.sliderContent li').css({'display':'none'});
        $('.sliderContent li').eq(li_index).stop(true, false).fadeIn();

    }

    $('.next').click(function(){
        auto_play();
    });

    $('.next2').click(function(){
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

    /*----------*/


    /*gototop bottom js*/
    var scrollbar_top = $(window).scrollTop();

    $('.go_to_top_bottom').hide();

    $(window).scroll(function() {
        scrollbar_top = $(window).scrollTop();

        if(scrollbar_top >= 700){
            $('.go_to_top_bottom').stop(true,false).fadeIn(200);

        }else{
            $('.go_to_top_bottom').stop(true,false).fadeOut(50);
        }
    })

    $('.go_to_top_bottom').click(function(){
        $('body').stop(true,false).animate({scrollTop: 0},1000,"swing");
    });

    /*----------*/
    $('.detail_bottom').click(function(){
        if($(this).next().hasClass('yo')){
            $(this).find('.detail_icon_2').css({'display':'none'});
            $(this).find('.detail_icon_1').css({'display':'block'});
            $(this).next().removeClass('yo');
            $(this).next().slideUp(700);
        }else{
            $(this).find('.detail_icon_1').css({'display':'none'});
            $(this).find('.detail_icon_2').css({'display':'block'});
            $(this).next().addClass('yo');
            $(this).next().slideDown(700);
        }
    }); //kation商品的說明slidedown跟slideup






})