$(function() {

    $('.container').fadeIn(1000);
    $('.earth').css({'top':650,'left':-150});
    $('.dog_man').css({'left':560});

    $('.dog_man').click(function(){
        $('.info_block_bg,.aboutKation_box').fadeIn(500);
    });

    $('.delete,.info_block_bg').click(function(){
        $('.info_block_bg,.aboutKation_box,.product_info_box,.info_area1,.info_area2,.info_area3,.info_area4').fadeOut(500);
    });

    $('.venus,.jupiter,.mercury,.mars,.saturn').click(function(){
        $('.product_w2 ul .li_1,.product_w2 ul .li_2,.product_w2 ul .li_3,.info_area3,.product_w3 ul .li_1,.product_w3 ul .li_2,.product_w3 ul .li_3,.info_area4').fadeOut(200);
        $('.control_1,.control_2,.control_3').removeClass('now');
    });

    $('.venus').click(function(){
        $('.box1,.info_block_bg,.info_area1').fadeIn(500);
        $('.control_1').addClass('now');
    });

    $('.jupiter').click(function(){
        $('.box2,.info_block_bg,.info_area1').fadeIn(500);
        $('.control_1').addClass('now');
    });

    $('.mercury').click(function(){
        $('.box3,.info_block_bg,.info_area1').fadeIn(500);
        $('.control_1').addClass('now');
    });

    $('.mars').click(function(){
        $('.box4,.info_block_bg,.info_area1').fadeIn(500);
        $('.control_1').addClass('now');
    });

    $('.saturn').click(function(){
        $('.box5,.info_block_bg,.info_area1').fadeIn(500);
        $('.control_1').addClass('now');
    });

    $('.product_bottom_area li').click(function(){
        $('.info_area1,.info_area2,.info_area3,.info_area4').fadeOut(1);
    });

    $('.bottom1').click(function(){
        $('.info_area1').fadeIn(200);
    });

    $('.bottom2').click(function(){
        $('.info_area2').fadeIn(200);
        $('.product_w2 ul .li_1,.product_w2 ul .li_2,.product_w2 ul .li_3,.product_w3 ul .li_1,.product_w3 ul .li_2,.product_w3 ul .li_3').fadeOut(10);
        $('.control_1,.control_2,.control_3').removeClass('now');
        $('.product_w2 ul .li_1').fadeIn(200);
        $('.control_1').addClass('now');
    });

    $('.bottom3').click(function(){
        $('.info_area3').fadeIn(200);

    });

    $('.bottom4').click(function(){
        $('.info_area4').fadeIn(200);
        $('.product_w2 ul .li_1,.product_w2 ul .li_2,.product_w2 ul .li_3,.product_w3 ul .li_1,.product_w3 ul .li_2,.product_w3 ul .li_3').fadeOut(10);
        $('.control_1,.control_2,.control_3').removeClass('now');
        $('.product_w3 ul .li_1').fadeIn(200);
        $('.control_1').addClass('now');
    });


    $('.product_w2 ul .li_1').fadeIn(200);

    $('.control ul li').click(function(){
        $('.product_w2 ul .li_1,.product_w2 ul .li_2,.product_w2 ul .li_3,.product_w3 ul .li_1,.product_w3 ul .li_2,.product_w3 ul .li_3').fadeOut(10);
        $('.control_1,.control_2,.control_3').removeClass('now');
    });

    $('.control_1').click(function(){
        $('.product_w2 ul .li_1,.product_w3 ul .li_1').fadeIn(200);
        $('.control_1').addClass('now');
    });

    $('.control_2').click(function(){
        $('.product_w2 ul .li_2,.product_w3 ul .li_2').fadeIn(200);
        $('.control_2').addClass('now');
    });

    $('.control_3').click(function(){
        $('.product_w2 ul .li_3,.product_w3 ul .li_3').fadeIn(200);
        $('.control_3').addClass('now');
    });


});
