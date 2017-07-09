<?php
/* Smarty version 3.1.30, created on 2017-07-06 10:15:34
  from "F:\Program Files\soft\wamp\www\shuiguoApp\-\tem\admin\editCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595df1a6cb7ce5_85992883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5d95f88ae20446c1fe4f23e25d57fdc109fca2' => 
    array (
      0 => 'F:\\Program Files\\soft\\wamp\\www\\shuiguoApp\\-\\tem\\admin\\editCon.html',
      1 => 1499328096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595df1a6cb7ce5_85992883 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
checcontentk.js"><?php echo '</script'; ?>
>
    <title>Document</title>
    <style>
        html,body{
            background:#F0F0F0;
        }
        form{
            width:800px;
            height:auto;
            padding-top:20px;
            padding-left:20px;
            border:1px solid #ccc;
            margin:35px auto;
        }
        form ul{
            width:100%;
            height:100%;
            list-style: none;
        }
        form ul li:first-child span{
            color:#277FC9;
        }
        form ul li:first-child select{
            background:#F0F0F0;
            color:#000;
        }
        form ul li:nth-child(2){
            width:100%;
        }
        table{
            width:100%;
            height:auto;
            overflow: hidden;
        }
        table thead{
            width:100%;
            height:100%;
        }
        table thead tr{
            color:#277FC9;
            text-align: center;
            width:100%;
            height:60px;
        }
        table tr:nth-child(even){
            background:#fff;
        }
        table thead tr th{
            width:12.5%;
            height:60px;
            text-align: center;
            line-height: 60px;
        }
        img{
            width:60px;
            height:60px;
        }
        tbody{
            width:100%;
            height:auto;
        }
        tbody tr{
            color:#000;
            text-align: center;
            width:100%;
            height:60px;
        }
        tbody tr td{
            width:12.5%;
            height:auto;
            overflow: hidden;
        }
        tbody tr td a{
            color:red;
        }
    </style>
</head>
<body>
<form action="index.php?d=admin&f=content&a=check">
    <ul>
        <li>
            <span>上级栏目:</span>
            <select name="id" id="top">
                <option value="0">作为一级栏目</option>
                <?php echo '<?php ';?>echo $obj->str<?php echo '?>';?>
            </select>
        </li>
        <li>
            <table cellpadding="0" >
                <thead>
                <tr>
                    <th>zid</th>
                    <th>文章标题</th>
                    <th>文章内容</th>
                    <th>时间</th>
                    <th>缩略图</th>
                    <th>所在栏目的id</th>
                    <th>推荐位id</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </li>
    </ul>

</form>
</body>
</html><?php }
}
