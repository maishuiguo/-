<?php
/* Smarty version 3.1.30, created on 2017-07-07 17:18:11
  from "D:\wamp\www\shuiguoApp\-\tem\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595fa6333949c9_79243269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ac6460f1ca51429956f117d6dabefc4a0edaae' => 
    array (
      0 => 'D:\\wamp\\www\\shuiguoApp\\-\\tem\\admin\\addCon.html',
      1 => 1499440369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595fa6333949c9_79243269 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .aa:first-child{
            display: none;
        }
    </style>
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
<form action="index.php?m=admin&f=content&a=addCon" method="post">
    <div class="col-sm-10">
        <select name="pid" id="" class="form-control">
            <option value="0">
                --一级分类--
            </option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>
    英文标题:<input type="text" name="Engtitle"><br>
    标题: <input type="text" name="title"><br>
    关键字：<input type="text" name="keywords"><br>
    内容2: <textarea name="con2" id="con2" cols="30" rows="10"></textarea><br>
    内容3: <textarea name="con3" id="con3" cols="30" rows="10"></textarea><br>
    库存：<input type="text" name="kucun"><br>
    价格：<input type="text" name="price"><br>
    内容:  <div><?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:500px;height:300px;" name="con"><?php echo '</script'; ?>
></div>
    <input type="hidden" value="" name="cid">

    推荐位：
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>

    <input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <input type="submit" value="提交">

    <div class="yin" style="width:300px;position:absolute;right:60px;top:50px;">
    <input type="hidden" name="thumb" id="thumb">
    </div>




        </form>

        <?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');

    var objj=new Upload();
    objj.createView({
        parent:document.querySelector('.yin'),
    })
    objj.up("index.php?m=admin&f=content&a=upload",function(data){
        console.log(data);
        document.querySelector("#thumb").value=data;
    });

    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
