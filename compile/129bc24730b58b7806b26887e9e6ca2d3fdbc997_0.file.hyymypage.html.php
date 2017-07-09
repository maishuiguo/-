<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:27:29
  from "F:\wamp\wamp\www\php\shuiguoApp\fruit\tem\index\hyymypage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a2a11594f8_41119838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129bc24730b58b7806b26887e9e6ca2d3fdbc997' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\fruit\\tem\\index\\hyymypage.html',
      1 => 1499570848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a2a11594f8_41119838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人主页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="x5-orientation" content="portrait | landscape" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no, email=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
hyymypage.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
</head>
<body>
    <nav>
        <p>·我的·</p>
        <p>MYPAGE</p>
    </nav>
    <div class="iscroll">
        <div class="zhuti">
            <header>
                <div class="back"></div>
                <div class="photo">
                    <div class="position">
                        <img src="<?php echo IMG_PATH;?>
hyytouxiang.png" alt="">
                    </div>
                    <div class="jianjie">
                        <p>KEAIXIAOLTOU</p>
                        <p>快乐小老头</p>
                        <p>********</p>
                        <p>良驹宝马，温酒煮茶，月落可归家</p>
                    </div>
                </div>
            </header>
            <ul class="bodys">
                <li>
                    <a href="">
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
hyydingdan.png" alt="">
                        </div>
                        <p>修改信息 <span>XIUGAIXINXI</span> <span class="more">&gt;</span></p>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=location&a=add">
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
hyyxiaoxi.png" alt="">
                        </div>
                        <p>地址管理 <span>DIZHIGUANLI</span> <span class="more">&gt;</span></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
            <footer>
                <div>
                    <img src="<?php echo IMG_PATH;?>
index26.png" alt="">
                    <p>首页</p>
                </div>
                <div>
                    <img src="<?php echo IMG_PATH;?>
index26.png" alt="">
                    <p>首页</p>
                </div>
                <div>
                    <img src="<?php echo IMG_PATH;?>
index26.png" alt="">
                    <p>首页</p>
                </div>
                <div>
                    <img src="<?php echo IMG_PATH;?>
index26.png" alt="">
                    <p>首页</p>
                </div>
            </footer>

</body>
</html>
<?php echo '<script'; ?>
>
    window.onload=function () {
        var myScroll = new IScroll('.iscroll',
            {
                mouseWheel: true,
                click:true,
            });
    }

<?php echo '</script'; ?>
><?php }
}
