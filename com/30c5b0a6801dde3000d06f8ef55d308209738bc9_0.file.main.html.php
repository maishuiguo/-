<?php
/* Smarty version 3.1.30, created on 2017-07-09 03:59:59
  from "F:\wamp\wamp\www\php\shuiguoApp\-\tem\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59618e1f981e02_33137383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c5b0a6801dde3000d06f8ef55d308209738bc9' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\-\\tem\\admin\\main.html',
      1 => 1499565588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59618e1f981e02_33137383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    html,body{
    width:100%;height:100%;
}
body{
    padding:0;margin:0;
    overflow: hidden;
}
header{
    width:100%;height:20%;
    border-bottom: 2px solid #000;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;

}
.box{
    width:100%;height:80%;
}
.box .left{
    float:left;
    width:20%;height:100%;
    border-right:2px solid #000;
    box-sizing: border-box;
}
.box .right{
    float:left;
    width:80%;height:100%;
}
iframe{
    width:100%;height:100%;
}
</style>
</head>
<body>

<header>
欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
来到管理系统

<span>
<a href="index.php?m=admin&f=login&a=logout">安全退出</a>
    </span>
    <span>
    <a href="index.php" target="_blank">主页</a>
    </span>
    </header>
    <div class="box">
    <div class="left">

    <ul>
        <li>
            <a href="javascript:;">管理员管理</a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=user&a=add" target="iframe">添加用户</a>
                    </li>
                </ul>
        </li>


        <li>
            <a href="javascript:;">分类管理</a>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=category&a=add" target="iframe">添加分类</a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=category&a=edit" target="iframe">管理分类</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;">内容管理</a>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=content&a=add" target="iframe">添加内容</a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=content&a=editcon" target="iframe">查看内容</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">推荐位管理</a>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=position&a=add" target="iframe">添加位置</a>
                </li>

                <li>
                    <a href="showPos.php" target="iframe">查看位置</a>
                </li>
            </ul>
        </li>

    </ul>
    </div>
    <div class="right">
    <iframe src="welcome.html" frameborder="0" name="iframe">

    </iframe>
    </div>
    </div>

    </body>
    </html><?php }
}
