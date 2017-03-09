$(function() {
    $('.right_area_li').hover(function () {
        $(this).stop(true,false).animate({'opacity':.6},200,"swing");
    }, function(){
        $(this).stop(true,false).animate({'opacity':1},200,"swing");
    });
});