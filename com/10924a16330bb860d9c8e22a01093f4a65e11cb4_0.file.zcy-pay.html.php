<?php
/* Smarty version 3.1.30, created on 2017-07-10 03:35:58
  from "F:\Program Files\soft\wamp\www\shuiguoApp\-\tem\index\zcy-pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962d9fe3e9e12_41457401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10924a16330bb860d9c8e22a01093f4a65e11cb4' => 
    array (
      0 => 'F:\\Program Files\\soft\\wamp\\www\\shuiguoApp\\-\\tem\\index\\zcy-pay.html',
      1 => 1499593140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962d9fe3e9e12_41457401 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
zcy-pay.css">

</head>
<style>
    #wrapper{
        position:absolute;
        top: 0;
        bottom: 0;
        left:0;
        width: 100%;
        overflow: hidden;
    }
    #scroller{
        position: absolute;
        width: 100%;
    }
</style>
<body>
<div class="top">
    <div class="title">
        <p>·订单·</p>
        <p>WODEDINAN</p>
        <div></div>
    </div>
</div>
<div id="wrapper">
    <div id="scroller">
        <div class="con">
            <ul>
                <li class="list">
                    <img src="<?php echo IMG_PATH;?>
zcy-img/15.png" alt="" style="width: .97rem;float: left;margin:.2rem">
                    <div class="zhong">
                        <div class="one">
                            <span>HAIN</span>
                            <span>DAYLIANW</span>
                            <img src="<?php echo IMG_PATH;?>
zcy-img/18.png" alt="">
                        </div>
                        <div class="two"></div>
                        <div class="three">
                            <span>01</span>
                            <span>47.10</span>
                            <span>RMB</span>
                            <span></span>
                            <span>4556</span>
                        </div>
                    </div>
                    <div class="xia">
                        <p>RMB</p>
                        <p>47.10</p>
                    </div>
                </li>
                <li class="list">
                    <img src="<?php echo IMG_PATH;?>
zcy-img/16.png" alt="" style="width: .97rem;float: left;margin:.2rem">
                    <div class="zhong">
                        <div class="one">
                            <span>KGFO</span>
                            <span>HUANGTA</span>
                            <img src="<?php echo IMG_PATH;?>
zcy-img/18.png" alt="">
                        </div>
                        <div class="two"></div>
                        <div class="three">
                            <span>01</span>
                            <span>21.50</span>
                            <span>RMB</span>
                            <span></span>
                            <span>7456</span>
                        </div>
                    </div>
                    <div class="xia">
                        <p>RMB</p>
                        <p>21.50</p>
                    </div>
                </li>
                <li class="list">
                    <img src="<?php echo IMG_PATH;?>
zcy-img/17.png" alt="" style="width: .97rem;float: left;margin:.2rem">
                    <div class="zhong">
                        <div class="one">
                            <span>HAIN</span>
                            <span>DAYLIANW</span>
                            <img src="<?php echo IMG_PATH;?>
zcy-img/18.png" alt="">
                        </div>
                        <div class="two"></div>
                        <div class="three">
                            <span>01</span>
                            <span>19.80</span>
                            <span>RMB</span>
                            <span></span>
                            <span>1591</span>
                        </div>
                    </div>
                    <div class="xia">
                        <p>RMB</p>
                        <p>19.80</p>
                    </div>
                </li>

            </ul>
            <div class="line"></div>
        </div>
        <div class="mid">
            <img src="<?php echo IMG_PATH;?>
zcy-img/1.png" alt="">
            <div class="money">
                <!--<div class="youhui">-->
                    <!--<p class="five">-5.00</p>-->
                    <!--<p class="uuu">优惠券</p>-->
                <!--</div>-->
                <span class="eight">83.40</span>
            </div>
        </div>

        <div class="wuliu">
            <div class="ll">
                <img src="<?php echo IMG_PATH;?>
zcy-img/7.jpg" alt="">
            </div>
            <ul class="rr">
                <li>
                    <img src="<?php echo IMG_PATH;?>
zcy-img/2.png" style="margin-top: -.25rem">
                    <p class="numD">2346 89753 8965432</p>
                </li>
                <li><img src="<?php echo IMG_PATH;?>
zcy-img/3.png" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>
zcy-img/4.png" alt=""></li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
zcy-img/5.png" alt="">
                    <p class="DDD">山西省太原市小店区皇后大道东里皇后大道西</p>
                </li>
            </ul>
        </div>
        <div class="buy">
            <a href="index.php?m=index&f=pay&a=bank"><img src="<?php echo IMG_PATH;?>
zcy-img/6.png" alt=""></a>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    window.onload=function () {
        var myScroll = new IScroll('#wrapper', {
            mouseWheel: true,
            scrollbars: false,
            click:true,
        });
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
