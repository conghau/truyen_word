<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CodePen - Flat Login Form 2.0</title>

<link rel="stylesheet" href="{$fixed_base_url}css/reset.css">

<link rel='stylesheet prefetch'
	href='http://daneden.github.io/animate.css/animate.min.css'>
<link rel='stylesheet prefetch'
	href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
<link rel='stylesheet prefetch'
	href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="{$fixed_base_url}css/login-style.css">
<script src="{$fixed_base_url}js/jquery-1.11.2.min.js"></script>
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
			{if isset($msg_error)}
				<div class="alert alert-error">{$msg_error}</div>
			{/if}
			<h3>{validation_errors('<div class="alert alert-error">', '</div>')}</h3>
			{$base_url|cat:'login'|form_open:'class=form-horizontal'}
			<form action="{$base_url}login" method="post">
				<input name='username' placeholder='Username' type='text' value="{set_value('username')}" > 
				<input name='password' placeholder='Password' type='password'>
				<button>Login</button>
			{''|form_close}
		</div>
		<div class='register'>
			<h2>Create An Account</h2>
			<div class='alert'>
				<div class='fa fa-times-circle'></div>
				There seems to be an issue.
			</div>
			{$base_url|cat:'register'|form_open:'class=form-horizontal'}
				<input placeholder='Username' type='text'> <input
					placeholder='Password' type='password'> <input
					placeholder='Confirm Password' type='password'> <input
					placeholder='Email Address' type='email'> <input
					placeholder='Birth Date (mm/dd/yy)' type='text'>
				<button>Register</button>
			{''|form_close}
		</div>
		<footer>
			<a href='#'>Forgot Password?</a>
		</footer>
	</div>

	<script src="{$fixed_base_url}js/login.js"></script>

</body>

</html>