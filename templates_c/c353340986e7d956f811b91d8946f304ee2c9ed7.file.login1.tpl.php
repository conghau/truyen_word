<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 06:16:51
         compiled from "D:\xampp\htdocs\TRUONG_CONG_HAU\application\views\auth\login1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1693955502d33dd3ab4-41389306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c353340986e7d956f811b91d8946f304ee2c9ed7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TRUONG_CONG_HAU\\application\\views\\auth\\login1.tpl',
      1 => 1430816495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693955502d33dd3ab4-41389306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fixed_base_url' => 0,
    'msg_error' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55502d3406a130_27869372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55502d3406a130_27869372')) {function content_55502d3406a130_27869372($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CodePen - Flat Login Form 2.0</title>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/reset.css">

<link rel='stylesheet prefetch'
	href='http://daneden.github.io/animate.css/animate.min.css'>
<link rel='stylesheet prefetch'
	href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
<link rel='stylesheet prefetch'
	href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/login-style.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
</head>

<body>
	<div class='info'>
		<h1>Login Form</h1>
	</div>
	<div class='form aniamted bounceIn'>
		<div class='switch'>
			<i class='fa fa-pencil fa-times'></i>
			<div class='tooltip'>Click Me</div>
		</div>
		<div class='login'>
			<h2>Login To Your Account</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['msg_error']->value)) {?>
				<div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['msg_error']->value;?>
</div>
			<?php }?>
			<h3><?php echo validation_errors('<div class="alert alert-error">','</div>');?>
</h3>
			<?php echo form_open(($_smarty_tpl->tpl_vars['base_url']->value).('login'),'class=form-horizontal');?>

			<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login" method="post">
				<input name='username' placeholder='Username' type='text' value="<?php echo set_value('username');?>
" > 
				<input name='password' placeholder='Password' type='password'>
				<button>Login</button>
			<?php echo form_close('');?>

		</div>
		<div class='register'>
			<h2>Create An Account</h2>
			<div class='alert'>
				<div class='fa fa-times-circle'></div>
				There seems to be an issue.
			</div>
			<?php echo form_open(($_smarty_tpl->tpl_vars['base_url']->value).('register'),'class=form-horizontal');?>

				<input placeholder='Username' type='text'> <input
					placeholder='Password' type='password'> <input
					placeholder='Confirm Password' type='password'> <input
					placeholder='Email Address' type='email'> <input
					placeholder='Birth Date (mm/dd/yy)' type='text'>
				<button>Register</button>
			<?php echo form_close('');?>

		</div>
		<footer>
			<a href='#'>Forgot Password?</a>
		</footer>
	</div>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
js/login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }} ?>
