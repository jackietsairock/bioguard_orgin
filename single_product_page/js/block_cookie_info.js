$(function() {

    $('.container').fadeIn(1000);

    $('.info_box ul li:nth-child(1)').stop(true,false).fadeIn(500);



    $('.bottom_area li').click(function(){
        var li_nb = $(this).index();
        $('.info_box .info_box_ul > li').stop(true,false).fadeOut(500).eq(li_nb).stop(true,false).fadeIn(500);

    });


});