<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:26:47
  from "F:\wamp\wamp\www\php\shuiguoApp\fruit\tem\index\hyylocation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a277008883_01530406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae4fb78dd5ed5ab5ba39e5fc4eb8a7380e24ee28' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\fruit\\tem\\index\\hyylocation.html',
      1 => 1499570806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a277008883_01530406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>地址管理</title>
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
hyylocation.css">
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
        <div class="return">
            <a href="javascript:;" onclick="history.go(-1)">
                <img src="<?php echo IMG_PATH;?>
hyyreturn.png" alt="">
            </a>
        </div>
        <p>·地址管理·</p>
        <p>LOCATION MANAGE</p>
    </nav>
    <div class="iscroll">
        <div class="zhuti">
            <form action="">
                <label>
                    <span>姓名:</span>
                    <input type="text" autofocus>
                </label>
                <label>
                    <span>邮编:</span>
                    <input type="text">
                </label>
                <label>
                    <span>所在地区:</span>
                    <input type="text">
                </label>
                <label>
                    <span>街道:</span>
                    <input type="text">
                </label>
                <label>
                    <span>地址详情:</span>
                    <input type="text">
                </label>
            </form>
            <h2 class="biao">已添加地址</h2>
            <ul class="history">
                <li>
                    <p>张三 <span>13467438634</span></p>
                    <p>太原市小店区平原路学府街口凯通大厦</p>
                </li>
                <li>
                    <p>李素 <span>13467438634</span></p>
                    <p>太原市小店区平原路学府街口凯通大厦</p>
                </li>
                <li>
                    <p>白白 <span>13467438634</span></p>
                    <p>太原市小店区平原路学府街口凯通大厦</p>
                </li>
                <li>
                    <p>欣欣 <span>13467438634</span></p>
                    <p>太原市小店区平原路学府街口凯通大厦</p>
                </li>
                <li>
                    <p>九九 <span>13467438634</span></p>
                    <p>太原市小店区平原路学府街口凯通大厦</p>
                </li>
            </ul>
        </div>
    </div>
    <footer>
        <p>立即保存</p>
        <p>LIJIBAOCUN</p>
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
