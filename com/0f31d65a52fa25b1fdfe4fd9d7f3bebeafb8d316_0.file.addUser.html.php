<?php
/* Smarty version 3.1.30, created on 2017-07-06 10:15:49
  from "F:\Program Files\soft\wamp\www\shuiguoApp\-\tem\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595df1b51ed2c2_00737140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f31d65a52fa25b1fdfe4fd9d7f3bebeafb8d316' => 
    array (
      0 => 'F:\\Program Files\\soft\\wamp\\www\\shuiguoApp\\-\\tem\\admin\\addUser.html',
      1 => 1499328096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595df1b51ed2c2_00737140 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=user&a=addCon">

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label" name="rid">选择角色</label>
        <div class="col-sm-10">
            <select name="rid" id="" class="form-control">
                <option value="">
                    --选择角色--
                </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

                </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="uname">
        </div>
    </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="upass">
    </div>
</div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">昵称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="昵称" name="nichen">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加用户</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
