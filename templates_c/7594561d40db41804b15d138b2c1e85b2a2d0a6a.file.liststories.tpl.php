<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 10:21:52
         compiled from "D:\xampp\htdocs\truyen_word\application\modules\admin_tools\views\liststories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32125555c4420d403b6-11800883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7594561d40db41804b15d138b2c1e85b2a2d0a6a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\modules\\admin_tools\\views\\liststories.tpl',
      1 => 1432110084,
      2 => 'file',
    ),
    '784f97c6a3f247bb9d75fe2665c71e764d60d51e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\views\\layout\\master_admin.tpl',
      1 => 1431590446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32125555c4420d403b6-11800883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fixed_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c4420e74d80_04641245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c4420e74d80_04641245')) {function content_555c4420e74d80_04641245($_smarty_tpl) {?><!DOCTYPE html>
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
	<div class="container">
<div>
	<div class="panel panel-success">
		<div class="panel-heading"></div>
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
<?php  $_smarty_tpl->tpl_vars['stories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_stories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stories']->key => $_smarty_tpl->tpl_vars['stories']->value) {
$_smarty_tpl->tpl_vars['stories']->_loop = true;
?>
					<tr>
						<th scope="row"><?php echo $_smarty_tpl->tpl_vars['stories']->value->id;?>
</th>
						<td><?php echo $_smarty_tpl->tpl_vars['stories']->value->title;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['stories']->value->key;?>
</td>
						<td><i class="fa fa-camera-retro"></i></td>
					</tr>
<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
</div>
	
<?php echo '<script'; ?>
 language="javascript">
	$(document).ready(function(){
	
	
	});
<?php echo '</script'; ?>
>


</body>
</html><?php }} ?>
