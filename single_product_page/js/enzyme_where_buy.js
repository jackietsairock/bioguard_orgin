$(function() {

    var box_top_offset = $('.select').offset().top,
        scrollbar_top = $(window).scrollTop(),
        win_resize = $(window).width();

    console.log('box的頂端距離是' + box_top_offset);


    $('.container').fadeIn(1000);

    $(window).width(function(){
        if(win_resize > 0){
            if(scrollbar_top >= box_top_offset){
                $('.select').css({'position':'fixed','top':0 ,'z-index':4 });

            }else{
                $('.select').css({'position':'relative','top':0,'z-index':0 });
            }
        }
    });

    $(window).scroll(function() {

        var scrollbar_top = $(window).scrollTop();

        console.log('視窗卷軸距離頂端是 ' + scrollbar_top);

        if(scrollbar_top >= box_top_offset){
            $('.select').css({'position':'fixed','top':0 ,'z-index':4 });

        }else{
            $('.select').css({'position':'relative','top':0,'z-index':0 });
        }


    });



    $('.box_info1').addClass('block');

    $('.box2_left_bottom').click(function(){
        $('.box_2_style').removeClass('block');
        $('.box_info1').addClass('block');
    });

    $('.box2_right_bottom').click(function(){
        $('.box_2_style').removeClass('block');
        $('.box_info2').addClass('block');
    });

    $('body').on('mousemove', function(event){
        $('.eye').each(function(){
            var dx = event.pageX  - $(this).position().left - 500;
            var dy = event.pageY  - $(this).position().top - 200;
            var ang = Math.atan2(dy, dx) / Math.PI *180;
            $(this).css('transform', 'rotate('+ang+'deg)');

        });
    });

});