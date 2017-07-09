<?php
/* Smarty version 3.1.30, created on 2017-07-09 06:12:19
  from "F:\wamp\wamp\www\php\shuiguoApp\fruit\tem\index\zcy-bank.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961ad23ef2714_62601312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db30509087436494fae62ff9d2e03f7dbdae2396' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\fruit\\tem\\index\\zcy-bank.html',
      1 => 1499573540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961ad23ef2714_62601312 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
zcy-bank.css">
<body>
    <div class="title">
        <p>·选择银行卡·</p>
        <p>XUANZHEYINHANGKA</p>
    </div>
    <div class="num">
        <div>
            <p class="num1">已绑定银行卡数量</p>
            <p class="num2">BANGDINGYINHANGKASHULIANG</p>
        </div>
        <div class="num3">03</div>
    </div>
    <div class="img">
        <a href="index.php?m=index&f=pay&a=end">
            <img src="<?php echo IMG_PATH;?>
zcy-img/8.png" alt="">
        </a>
        <a href="index.php?m=index&f=pay&a=end">
            <img src="<?php echo IMG_PATH;?>
zcy-img/9.png" alt="">
        </a>
        <a href="index.php?m=index&f=pay&a=end">
            <img src="<?php echo IMG_PATH;?>
zcy-img/10.png" alt="">
        </a>

    </div>
</body>
</html><?php }
}
