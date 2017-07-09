/**
 * Created by Administrator on 2017/7/6 0006.
 */
$(document).ready(function () {
    touch.on(".lose section:first-child","tap",function () {
        $(".bottom p").toggleClass("jizhu");
        $(".bottom").toggleClass("jizhu");
    });
    $("input").focus(function () {
        $(".login").css("margin-top","0.2rem");
        $(".loginword").css("display","none");
        $(".loginbtn").css("margin-top","0.1rem");
    })


    $("#Form").validate({
        rules: {
            mname: "required",
            mpass: {
                required: true,
                minlength: 3
            },
        },
        messages: {
            mname: "请输入用户名",
            mpass: {
                required: "请输入密码",
                minlength: $.validator.format("密码不能小于{0}个字符")
            },
        },
        errorPlacement: function(error, element) {
            $('<div id="box">').html(error).css({width:'300px',height:'20px',marginLeft:'10px',position:'absolute',left:'315px'}).insertAfter(element);
            error.css({'color':'red',fontSize:'12px'});
        },
        success:function(val,element){
            $(val).html('ok').insertAfter(element)
        }

    });

});