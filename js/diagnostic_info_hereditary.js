$(function(){
    var ul_dog_length = $('.ul_dog li').length;  //犬類列表長度
    var ul_cat_length = $('.ul_cat li').length;  //貓類列表長度

    //console.log(ul_dog_length);
    //console.log(ul_cat_length);

    //列表初始化
    function restart(){
        $('.hereditary_area').hide();
        $('.hereditary_description > ul,.hereditary_description > ul > li').hide();
    }

    //關閉動作
    $('.delete_btn,.hereditary_bg').click(function() {
        restart();
    });

    //開啟動作
    $('.table tr td ul li a').click(function() {

        var li_index = $(this).parent().index();
        var ul_index  = $(this).parent().parent().parent().parent().parent().parent().index();

        $('.hereditary_area').show();
        $('.hereditary_description').children().eq( ul_index).show().children().eq(li_index).show();

        //alert(ul_index);
        //alert(li_index);

    });

});