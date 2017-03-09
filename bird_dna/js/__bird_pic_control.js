$(function(){

$('.a1').change(function(){

    var nb = $(this).val();


    //alert(nb);
    $('#bird_pic1').find("li").removeClass('block');
    $('#bird_pic1 li[value="'+nb+'"]').addClass('block');

});

$('.a2').change(function(){
    var nb = $(this).val();

    //alert(nb);
    $('#bird_pic2').find("li").removeClass('block');
    $('#bird_pic2 li[value="'+nb+'"]').addClass('block');
});

$('.a3').change(function(){
    var nb = $(this).val();

//            alert(nb);
    $('#bird_pic3').find("li").removeClass('block');
    $('#bird_pic3 li[value="'+nb+'"]').addClass('block');
});

$('.a4').change(function(){
    var nb = $(this).val();

//            alert(nb);
    $('#bird_pic4').find("li").removeClass('block');
    $('#bird_pic4 li[value="'+nb+'"]').addClass('block');
});

$('.a5').change(function(){
    var nb = $(this).val();

//            alert(nb);
    $('#bird_pic5').find("li").removeClass('block');
    $('#bird_pic5 li[value="'+nb+'"]').addClass('block');

});

$('.a6').change(function(){
    var nb = $(this).val();

    $('#bird_pic6').find("li").removeClass('block');
    $('#bird_pic6 li[value="'+nb+'"]').addClass('block');
});

$('.a7').change(function(){
    var nb = $(this).val();

    $('#bird_pic7').find("li").removeClass('block');
    $('#bird_pic7 li[value="'+nb+'"]').addClass('block');
});

$('.a8').change(function(){
    var nb = $(this).val();

    $('#bird_pic8').find("li").removeClass('block');
    $('#bird_pic8 li[value="'+nb+'"]').addClass('block');
});


$('.male_cart_area').addClass('cart_block');
$('.female_cart_area').addClass('cart_block');
$('.cart_bg1').addClass('cart_block');



$('#change_cart_back').click(function(){

    $('.cart_bg1,.cart_bg2').removeClass('cart_block');
    $('.word').removeClass('cart_bg');
    $('.word,.bird_pic_area').addClass('cart_bg');
    $('.cart_bg2').addClass('cart_block');
    $('.cart > .aa > .cart_bg1').css({'border-right':'0px dashed #aaa'});
    $('.word2').css({"display":"block"});

});

$('#change_cart_back2').click(function(){

    $('.cart_bg1,.cart_bg2').removeClass('cart_block');
    $('.word,.bird_pic_area').removeClass('cart_bg');
    $('.cart_bg1').addClass('cart_block');
    $('.cart > .aa > .cart_bg1').css({'border-right':'1px dashed #aaa'});
    $('.word2').css({"display":"none"});
});


})