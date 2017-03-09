$(function() {
    $('.right_area ul li').hover(function () {
        $('.category_word_style').css({'display': 'none'});
        $(this).find('.category_word_style').stop(true,false).fadeIn();
    }, function(){
        $(this).find('.category_word_style').stop(true,false).fadeOut();
    });

});
