<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 10:14:44
         compiled from "D:\xampp\htdocs\truyen_word\application\modules\admin_tools\views\listconfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26237555c4274220e58-69955955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb034831e7f9a23e2fea2fb91f05e42c1634f7b0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\modules\\admin_tools\\views\\listconfig.tpl',
      1 => 1431590544,
      2 => 'file',
    ),
    '784f97c6a3f247bb9d75fe2665c71e764d60d51e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\views\\layout\\master_admin.tpl',
      1 => 1431590446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26237555c4274220e58-69955955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fixed_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c42748ef2f9_02745998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c42748ef2f9_02745998')) {function content_555c42748ef2f9_02745998($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title> Crawler Config </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/reset.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/style.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/font-awesome.min.css">
<link rel="stylesheet"
	href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/bootstrap-theme.min.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>

<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<style type="text/css">
</style>

</head>
<body>
	<div class="container"> <?php  $_smarty_tpl->tpl_vars['config'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['config']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['config']->key => $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['config']->key;
?>
<div>
	<div class="panel panel-success">
		<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Key</th>
						<th>Value</th>
						<th>Edit</th>
					</tr>
				</thead>
			
				<tbody>
<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<tr>
						<th scope="row"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</th>
						<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
						<td><i class="fa fa-camera-retro"></i></td>
					</tr>
<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<?php } ?>
</div>
	
<?php echo '<script'; ?>
 language="javascript">
	$(document).ready(function(){
	
	
	});
<?php echo '</script'; ?>
>


</body>
</html><?php }} ?>
