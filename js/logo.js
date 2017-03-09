
$(function() {

    /*判斷瀏覽器做動作*/
    var explorer = window.navigator.userAgent ;
    if (explorer.indexOf("MSIE") >= 0) {//ie10及以下
        $('.logo-area').css({'display':'none'});
        $('.logo-area2').fadeIn(1400);
    }else if (explorer.indexOf("Firefox") >= 0){//Firefox
        $('.logo-area').css({'display':'none'});
        $('.logo-area2').fadeIn(1400);
    }else if (explorer.indexOf("Chrome") >= 0){//Chrome
        $('.logo-area2').css({'display':'none'});
    }else if (explorer.indexOf("Opera") >= 0){//Opera
        $('.logo-area').css({'display':'none'});
        $('.logo-area2').fadeIn(1400);
    }else if (explorer.indexOf("Safari") >= 0){//Safari
        $('.logo-area').css({'display':'none'});
        $('.logo-area2').fadeIn(1400);
    }else if (explorer.indexOf("Trident/7.0") >= 0){//IE11
        $('.logo-area').css({'display':'none'});
        $('.logo-area2').fadeIn(1400);
    }

});