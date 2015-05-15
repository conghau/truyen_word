<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>{block name=title}{/block}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{$fixed_base_url}css/reset.css">
<link rel="stylesheet" href="{$fixed_base_url}css/style.css">
<link rel="stylesheet" href="{$fixed_base_url}css/bootstrap.min.css">
<link rel="stylesheet" href="{$fixed_base_url}css/font-awesome.min.css">
<link rel="stylesheet"
	href="{$fixed_base_url}css/bootstrap-theme.min.css">
<script src="{$fixed_base_url}js/jquery-1.11.2.min.js"></script>
<script src="{$fixed_base_url}js/bootstrap.min.js"></script>
{block name=stylesheet}{/block}
</head>
<body>
	<div class="container">{block name=body}{/block}</div>
	{block name=javascript}{/block}
</body>
</html>