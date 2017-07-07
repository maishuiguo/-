<?php
/* Smarty version 3.1.30, created on 2017-07-06 11:58:55
  from "D:\wamp\www\shuiguoApp\-\tem\admin\editCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595e09df1e1fa7_17581061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '821cccf8c5c484a8277b424167e40fab6ac06020' => 
    array (
      0 => 'D:\\wamp\\www\\shuiguoApp\\-\\tem\\admin\\editCategory.html',
      1 => 1499330538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595e09df1e1fa7_17581061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>

</head>
<body>
<form action="addConConCon.php">
    标题: <input type="text" name="title"><br>
    关键字：<input type="text" name="keywords"><br>
    内容:  <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:500px;height:300px;" name="con"><?php echo '</script'; ?>
>

    <input type="hidden" value="" name="cid">
        <input type="hidden" name="imgurl">
        <div class="uploadbox"></div>
        推荐位：
    <input type="checkbox" name="posid[]" value="">
    <input type="submit" value="提交">
        </form>

        <?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');


    var obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadbox")
    });
    obj.up("index.php?m=admin&d=con&f=add",function(data){
        document.querySelector("input[name=imgurl]").value=data;
    });

    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
