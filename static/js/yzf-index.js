window.onload=function () {

    var swiper = new Swiper('.swiper1', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay:1500,
        loop:true,
    });

    //特价、热卖板块选项卡的点击
    $('.yzf-tjtitle').children("section").eq(0).on("touchstart",function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $(".yzf-tione").css("display","block");
        $(".yzf-titwo").css("opacity","0");
    })
    $('.yzf-tjtitle').children("section").eq(1).on("touchstart",function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $(".yzf-tione").css("display","none");
        $(".yzf-titwo").css("opacity","1");
    })
    //特价、热卖板的滑动
    var swiper2 = new Swiper('.swiper2', {
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 3,
        // autoplay:1000,
        // loop:true,
        // slidesPerView:'auto',
    });
    var swiper3 = new Swiper('.swiper3', {
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 3
    });
    var myScroll = new IScroll('.scrolls', {
        mousewheel:true,
        click:true,
    });
}

