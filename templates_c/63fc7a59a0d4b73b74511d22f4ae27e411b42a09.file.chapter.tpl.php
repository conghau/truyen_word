<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-25 10:23:40
         compiled from "D:\xampp\htdocs\truyen_word\application\modules\stories\views\chapter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20937555d467838b481-47152114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fc7a59a0d4b73b74511d22f4ae27e411b42a09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\modules\\stories\\views\\chapter.tpl',
      1 => 1432542219,
      2 => 'file',
    ),
    '14cdf02e13527449d96e523ec9ad4adbaec9255b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\views\\layout\\master.tpl',
      1 => 1432537537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20937555d467838b481-47152114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d467879e4f3_31648490',
  'variables' => 
  array (
    'fixed_base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d467879e4f3_31648490')) {function content_555d467879e4f3_31648490($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>
Cart Detail </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="descriptons" content="">

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/reset.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/style.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/theme2.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fixed_base_url']->value;?>
css/general.css">
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

</head>
<body>
	<div id="wrapAll">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle navbar-left"
					data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://mong.vn/"> <!--	<img src="http://mong.vn/public/images/logo.png" height="45px" /> -->
					<i class="fa fa-home"></i> Mộng.VN
				</a>


			</div>
			<!-- end .navbar-header -->
			<!-- Collect the nav links, forms, and other content for toggling -->

			<div class="collapse navbar-collapse navbar-ex1-collapse yamm">
				<ul class="nav navbar-nav">
					<li><a href="http://mong.vn/truyen"> <i class="fa fa-archive"></i>
							Kho Truyện
					</a></li>
					<li><a href="http://mong.vn/truyen-ngan">Truyện Ngắn</a></li>
					<li><a href="http://mong.vn/#" class="show_story_history"> <i
							class="fa fa-bookmark"></i> Lịch Sử<span class="badge">0 </span>
					</a></li>
					<li><a href="http://mong.vn/video"><i class="fa fa-video-camera"> </i>
							Video </a></li>
					<li><a href="http://mong.vn/blog"><i class="fa fa-book"></i> Blog</a></li>



					<li
						style="padding-left: 15px; padding-top: 15px; min-width: 190px;">
						<div class="addthis_toolbox addthis_default_style">

							<a class="addthis_button_google_plusone at300b"><div></div></a> <a
								class="addthis_button_facebook_like at300b"
								fb:like:layout="button_count" fb:like:width="115"><div
									class="fb-like" data-ref=".VVAskoXTxN8.like"
									data-layout="button_count" data-width="115"
									data-show_faces="false" data-share="false" data-action="like"
									data-font="arial" data-href="http://mong.vn/" data-send="false"></div></a>
							<div class="atclear"></div>
						</div> <?php echo '<script'; ?>
 type="text/javascript"><?php echo '</script'; ?>
>

					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">

					<li class="upload_mn"><a href="http://mong.vn/user/upload"><i
							class="fa fa-cloud-upload"></i> UPLOAD</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><i class="fa fa-user"></i> User <b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li></li>
							<li><a href="http://mong.vn/login">Đăng Nhập bằng Facebook</a></li>
						</ul></li>
				</ul>


			</div>
			<!-- /.navbar-collapse -->
		</nav>
		<div class="row"
			style="margin: auto; margin-bottom: 20px; padding: 10px; max-width: 1100px">
			<div class="col-md-3 col-xs-6">
				<div id="logo">

					<a href="http://mong.vn/"><img src="public/images/logo2.png"
						class="img-responsive" alt="mong.vn logo" style="max-width: 200px">
					</a>
				</div>
			</div>
			<div class="col-md-9 col-xs-6">
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<section class="container">
<div class="wrapMain">
	<div style="text-align: center">
		<div class="select2-container input-medium" id="s2id_menu-search-box"
			style="width: 300px;">
			<a href="javascript:void(0)" onclick="return false;"
				class="select2-choice select2-default" tabindex="-1"> <span
				class="select2-chosen">Nhập Tên Truyện ...</span><abbr
				class="select2-search-choice-close"></abbr> <span
				class="select2-arrow"><i class="fa fa-search"></i></span></a><input
				class="select2-focusser select2-offscreen" type="text"
				id="s2id_autogen1" tabindex="0">
			<div class="select2-drop select2-display-none select2-with-searchbox">
				<div class="select2-search">
					<input type="text" autocomplete="off" autocorrect="off"
						autocapitalize="off" spellcheck="false" class="select2-input">
				</div>
				<ul class="select2-results">
				</ul>
			</div>
		</div>
		<input type="hidden" name="optionvalue" id="menu-search-box"
			class="input-medium select2-offscreen"
			data-placeholder="Nhập Tên Truyện ..." tabindex="-1">
	</div>
	<br>
	<div id="row">
		<div class="col-md-12">
			<ul class="breadcrumb" style="background-color: #fff">
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/" itemprop="url"><span itemprop="title"><i
							class="fa fa-home"></i></span></a></li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/truyen" itemprop="url"><span itemprop="title">Truyện</span></a></li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/truyen/Ngon-Tinh.html" itemprop="url"> <span
						itemprop="title">Ngôn Tình</span></a></li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
					itemprop="url"><span itemprop="title">Vợ Trước...</span></a></li>
				<li><span>Chương 632: Anh y...</span></li>
			</ul>
			<!-- START TRUYEN DE CU -->
			<div class="chuong_detail_head">
				<h1 class="text-center name ">
					<a
						href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
stories/<?php echo $_smarty_tpl->tpl_vars['story']->value->key;?>
/<?php echo $_smarty_tpl->tpl_vars['story']->value->id;?>
.html"><?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
</a>
				</h1>
				<h2 class="text-center tinhtrang">
					( <a href="http://mong.vn/truyen/status/truyen-hoan-thanh.html"><?php echo $_smarty_tpl->tpl_vars['story']->value->state;?>
</a> )
				</h2>
				<h2 class="text-center capnhat">
					( Chương Mới Nhất : <a
						href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
stories/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/chapter-<?php echo $_smarty_tpl->tpl_vars['last_chapter']->value->id;?>
.html"><span
						style="color: #999; font-weight: normal"> <?php echo $_smarty_tpl->tpl_vars['last_chapter']->value->title;?>
</span> </a> )
				</h2>


				<div class="row"
					style="background-color: #fafafa; padding: 4px; margin: 5px; border-radius: 3px">
					<div class="col-md-6">
						<i class="fa fa-chevron-down"> </i> Chọn Nhanh <span class="badge"
							style="line-height: 20px"> <input type="text" class="curchuong"
							style="color: #000; width: 35px; border: none; border-radius: 3px"
							value="" id="curchuong"> &nbsp;/&nbsp;632
						</span> &nbsp; <a class="btn btn-warning btn-sm fchuong">Go <i
							class="fa fa-angle-double-right"></i>
						</a>

					</div>
					<div class="col-md-6">
						<div style="height: 10px"></div>
						<div
							class="nouislider noUi-target noUi-ltr noUi-horizontal noUi-background">
							<div class="noUi-base">
								<div class="noUi-origin noUi-stacking" data-style="left"
									style="left: 100%;">
									<div class="noUi-handle noUi-handle-lower"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="btn-group pull-center">
						<a class="btn btn-primary" role="button"
							href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-Chuong-631-Khong-co-say/451010.htm"><i
							class="fa fa-long-arrow-left"></i> Chương Trước</a>
					</div>
				</div>
				<div class="panel-body">


					<h1 class="text-center" style="line-height: 30px; color: #3598ce">
						<?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
<br> <?php echo $_smarty_tpl->tpl_vars['chapter']->value->title;?>

					</h1>
					<span class="pull-right"><img src="public/images/zoom-out.png"
						class="zoom-out zoom-font"> &nbsp;&nbsp;<img
						src="public/images/zoom-in.png" class="zoom-in zoom-font"></span>
					<div class="clearfix"></div>
					<div class="chuong_noidung" style="font-size: 16px;">
						<div><?php echo $_smarty_tpl->tpl_vars['chapter']->value->title;?>
</div>
						<div>
							<?php echo $_smarty_tpl->tpl_vars['chapter']->value->content;?>

						</div>
					</div>
					<!-- End of chuong_noidung -->
					<!-- Ads -->
					<div style="text-align: center">
					</div>
					<!-- End of ads -->
					<div
						style="background-color: #fafafa; padding: 15px; text-align: center; border-radius: 5px; max-width: 600px; margin: auto">
						<strong>Chú Ý :</strong> Bạn đang đọc truyện <?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
. Chương : <?php echo $_smarty_tpl->tpl_vars['chapter']->value->title;?>
 <br> <a href="" class="report_truyen"><b><i
								class="fa fa-warning"></i> Báo Lỗi Chương </b></a>
						&nbsp;&nbsp;&nbsp;&nbsp; <a href="" class="note_story"><b><i
								class="fa fa-bookmark"></i> Đánh Dấu </b></a>
						<!-- <a  class="btn btn-primary show_story_history">Lịch Sử Đọc Truyện  </a> -->

					</div>
					<h2 style="font-size: 10px; color: #999">
						<i class="fa fa-tag"></i> Từ Khóa :Đọc truyện <?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
 , <?php echo $_smarty_tpl->tpl_vars['chapter']->value->title;?>

					</h2>

				</div>
				<!-- End of panel body -->

				<div class="panel-footer">
					<div class="btn-group" style="text-align: center">
						<div class="btn-group">
							<a class="btn btn-primary" role="button"
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-Chuong-631-Khong-co-say/451010.htm"><i
								class="fa fa-long-arrow-left"></i> Chương Trước</a>
						</div>

					</div>
				</div>
				<!-- End panel footer -->
			</div>
			<!-- End of panel -->

			<ul class="breadcrumb" style="background-color: #fff">
				<li><a href="http://mong.vn/"><i class="fa fa-home"></i></a></li>
				<li><a href="http://mong.vn/truyen">Truyện</a></li>
				<li><a href="http://mong.vn/truyen/Ngon-Tinh.html" itemprop="url"> <span
						itemprop="title">Ngôn Tình</span></a></li>
				<li><a
					href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html">Vợ
						Trước...</a></li>
				<li><span>Chương 632: Anh y...</span></li>
			</ul>
		</div>
		<!-- COL MD 9 -->

	</div>
	<!-- end row -->

	<div class="panel panel-default">
		<div class="panel-heading">

			<strong> Thảo Luận về truyện này</strong>
		</div>
		<div class="panel-body">
			<div class="fb-comments"
				data-href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
				data-numposts="5" data-colorscheme="light"></div>
		</div>

	</div>
	<!-- end wrapMain -->
	<div class="clearfix"></div>
</div>
</section>
	<div class="clearfix"></div>
	<div id="wrapFooter">

		<div style="max-width: 620px; margin: auto;">
			<ul class="nav nav-pills">
				<li><a href="http://mong.vn/"><i class="fa fa-home"> </i>Trang Chủ</a></li>
				<li><a href="http://mong.vn/truyen">Truyện</a></li>
				<li><a href="http://mong.vn/blog">Blog</a></li>
				<li><a href="http://mong.vn/video">Video - Music</a></li>
				<li><a href="http://mong.vn/blog/playlist/13.html">Hướng Dẫn</a></li>
				<li><a href="http://mong.vn/index.php?module=user&amp;act=login">Đăng
						Nhập </a></li>


			</ul>
		</div>
		<div id="copyright-footer" class="text-center"
			style="color: #666; font-size: 12px;">

			<div style="max-width: 1000px; margin: auto">
				<span style="line-height: 26px; font-size: 12px">Tất cả những truyện
					post trên Website này đều được sưu tầm từ nhiều nguồn khác nhau,
					chúng tôi không chịu bất cứ trách nhiệm nào về vấn đề bản quyền tác
					giả, nếu bạn có thắc mắc gì về bản quyền tác giả vui lòng cho chúng
					tôi biết sớm.</span> <br>
			</div>
			Truyện Hot Nhất <a title="vợ trước giá trên trời của tổng giám đốc"
				href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html">Vợ
				Trước giá trên trời của tổng giám đốc</a> ,<a
				title="Cô vợ trẻ con của lăng thiếu bá đạo"
				href="http://mong.vn/truyen/Co-Vo-Tre-Con-Cua-Lang-Thieu-Ba-Dao/4527.html">Cô
				vợ trẻ con của lăng thiếu bá đạo</a>,<a
				title="Cô vợ tổng giám đốc xinh đẹp của tôi"
				href="http://mong.vn/truyen/Co-vo-tong-giam-doc-xinh-dep-cua-toi/1.html">Cô
				vợ tổng giám đốc xinh đẹp của tôi</a>,<a href="http://mong.vn"
				title="doc truyen online">Đọc truyện Online</a> ,<a
				href="http://truyentranh8.com/conan-tt8/"
				title="conan, truyện conan" target="_blank">Truyen tranh Conan</a>,<a
				href="http://goccay.vn" target="_blank">Truyện tranh online</a>,<a
				href="http://vechai.info/"
				title="Website đọc truyện tranh online lớn nhất Việt Nam - truyen tranh"
				target="_blank">truyen tranh</a>,<a href="http://anime24h.info/"
				title="Anime Vietsub , Xem anime Online" target="_blank">Anime
				Vietsub</a> <a href="http://truyencuatui.info/" target="_blank">Truyện
				Của Tui</a>,<a
				title=" Xem Truyện Online One Piece: Siêu Đầy Đủ Full Chap Mới Nhất "
				href="http://www.onlineonepiece.com/" target="_blank">Đọc Truyện One
				Piece</a>
			<div style="margin-bottom: 5px;"></div>
		</div>
	</div>
	
<?php echo '<script'; ?>
>
$(document).ready(function(){


});
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
