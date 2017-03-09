$(function() {
    $(".company_pic_1").click(function (){
        $(".companyPic_area_fixed, .companyPic_fixed_box, .companyPic_fixed_1").stop(true,false).fadeIn();
    });

    $(".company_pic_2").click(function (){
        $(".companyPic_area_fixed, .companyPic_fixed_box, .companyPic_fixed_2").stop(true,false).fadeIn();
    });

    $(".company_pic_3").click(function (){
        $(".companyPic_area_fixed, .companyPic_fixed_box, .companyPic_fixed_3").stop(true,false).fadeIn();
    });

    $(".companyPic_area_fixed, .companyPic_delete_icon").click(function (){
        $(".companyPic_area_fixed, .companyPic_fixed_box, .companyPic_fixed_1, .companyPic_fixed_2, .companyPic_fixed_3").stop(true,false).fadeOut();
    });

});
