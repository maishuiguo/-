<?php
/* Smarty version 3.1.30, created on 2017-07-11 05:06:01
  from "F:\Program Files\soft\wamp\www\shuiguoApp\-\tem\index\zcy-bank.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596440990b6bc5_87327207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f16a32fe88b6b84816c4c83e67a61b3a80b7c5' => 
    array (
      0 => 'F:\\Program Files\\soft\\wamp\\www\\shuiguoApp\\-\\tem\\index\\zcy-bank.html',
      1 => 1499742064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596440990b6bc5_87327207 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="#" class="md-trigger" data-modal="modal-1"><img src="<?php echo IMG_PATH;?>
zcy-img/8.png" alt=""></a>
        <a href="#" class="md-trigger" data-modal="modal-1"><img src="<?php echo IMG_PATH;?>
zcy-img/9.png" alt=""></a>
        <a href="#" class="md-trigger" data-modal="modal-1"><img src="<?php echo IMG_PATH;?>
zcy-img/10.png" alt=""></a>
    </div>
    <div class="md-modal md-effect-16" id="modal-1">
        <div class="md-content">
            <div class="white">
                <img src="<?php echo IMG_PATH;?>
zcy-img/1.png" alt="">
                <div class="money">83.40</div>
                <form action="" method="post" class="lemo">
                    <p style="margin-top: .2rem">马来西亚红心柠檬 &nbsp; 3个</p>
                    <p>地址：太原市小店区康宁街26号</p>
                    <p>订单号：2201 7095 5468 7894</p>
                    <h1 style="margin-top: .2rem">输入支付密码</h1>
                    <p>
                        <span class="pay">PAYMENT</span><span class="pay1">PASSWORD</span>
                    </p>
                    <input type="password" id="pass">
                </form>
            </div>
            <a href="index.php?m=index&f=pay&a=end" class="md-close">立即支付</a>
        </div>
    </div>
    <div class="md-overlay"></div>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
classie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
modalEffects.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
