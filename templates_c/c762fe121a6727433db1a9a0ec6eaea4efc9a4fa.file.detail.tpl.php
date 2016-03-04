<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-25 09:52:05
         compiled from "D:\xampp\htdocs\truyen_word\application\modules\stories\views\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30970555c52094a1262-22813652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c762fe121a6727433db1a9a0ec6eaea4efc9a4fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\modules\\stories\\views\\detail.tpl',
      1 => 1432540320,
      2 => 'file',
    ),
    '14cdf02e13527449d96e523ec9ad4adbaec9255b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\truyen_word\\application\\views\\layout\\master.tpl',
      1 => 1432537537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30970555c52094a1262-22813652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c52095e5630_37574240',
  'variables' => 
  array (
    'fixed_base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c52095e5630_37574240')) {function content_555c52095e5630_37574240($_smarty_tpl) {?><!DOCTYPE html>
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
	<div id="row">
		<div class="col-md-8">
			<ul class="breadcrumb" style="background-color: #fff">
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/" itemprop="url"> <span itemprop="title"><i
							class="fa fa-home"></i> Home</span></a></li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/truyen" itemprop="url"><span itemprop="title">Truyện</span></a></li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
					href="http://mong.vn/truyen/Ngon-Tinh.html" itemprop="url"> <span
						itemprop="title">Ngôn Tình</span></a></li>

			</ul>

			<!-- START TRUYEN DE CU -->
			<div class="panel panel-default">

				<div class="panel-body">

					<div class="row" itemscope="" itemtype="http://schema.org/Book">

						<div class="col-md-3 col-sm-3 col-xs-12"
							id="truyen-detail-wrapper">
							<div class="item_truyen_box" style="text-align: center">
								<div class="img">
									<img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['story']->value->crawler_img_url;?>
"
										class="img-rounded">
								</div>


								<div id="wrap-rating" class="rating"
									xmlns:v="http://rdf.data-vocabulary.org/#"
									typeof="v:Review-aggregate">
									<h3 style="font-size: 12px; line-height: 18px;"
										property="v:itemreviewed"><?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
</h3>
									<div id="truyen-rating"
										style="margin: 0px auto; height: 20px; width: 115px; overflow: hidden; z-index: 1; position: relative;"
										class="basic" data-average="4.1" data-id="1">
										<div class="jRatingColor" style="width: 94.3px;"></div>
										<div class="jRatingAverage" style="width: 0px; top: -20px;"></div>
										<div class="jStar"
											style="width: 115px; height: 20px; top: -40px; background: url(http://mong.vn/public/images/stars.png) repeat-x;"></div>
									</div>
									<span rel="v:rating">
										<p id="rating-point" typeof="v:Rating">
											<span property="v:average"><?php echo $_smarty_tpl->tpl_vars['story']->value->rating;?>
</span> / <span
												property="v:best">10</span>
										</p>
										<p>
											<span property="v:count">203</span> lượt đánh giá
										</p>
										<p></p>

									</span>
									<p style="display: none; margin-top: 3px;" id="rate_message"></p>



								</div>
								
								<div class="btn-group-vertical">
									<a class="btn btn-info btn-sm" role="button"
										href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-Chuong-632-Anh-yeu-em-chinh-van-Dai-Ket-Cuc/451011.htm">Đọc
										Chương Mới Nhất <i class="fa fa-long-arrow-right"></i>
									</a> <a class="btn btn-info btn-sm" role="button"
										href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-Chuong-1/171008.htm">Đọc
										Từ Đầu <i class="fa fa-thumbs-up"></i>
									</a> <a class="btn btn-info btn-sm follow-story" role="button">Theo
										Dõi Truyện Này <i class="fa fa-bookmark"></i>
									</a>


								</div>

							</div>
							<!-- End item_truyen_box -->
						</div>
						<!-- End of col-md-3 -->

						<div class="col-md-9 col-sm-9 col-xs-12"
							id="truyen-detail-wrapper">
							<a itemprop="url"
								href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
stories/<?php echo $_smarty_tpl->tpl_vars['story']->value->key;?>
/<?php echo $_smarty_tpl->tpl_vars['story']->value->id;?>
.html"><h1
									class="name" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
</h1></a>
							<div class="item_truyen_detail">

								<ul class="nav nav-tabs" id="truyen_detail">
									<li class="active"><a href="#truyen_thongtin" data-toggle="tab">Thông
											Tin</a></li>
									<li><a href="#truyen_noidung" data-toggle="tab">Giới Thiệu</a></li>


								</ul>
								<div style="height: 5px"></div>
								<div class="tab-content truyen_thongtin_tab">
									<div class="tab-pane fade in active" id="truyen_thongtin">
										<table class="table" id="truyen_detail_metadata">

											<tbody>
												<tr>
													<td class="author" width="80" style="padding: 5px;">Tác
														giả:</td>
													<td class="author" style="padding: 5px;"><span><a
															href="http://mong.vn/truyen/author/<?php echo $_smarty_tpl->tpl_vars['story']->value->author;?>
.html"
															itemprop="author" itemscope=""
															itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['story']->value->author;?>
</span></a></span></td>
												</tr>
												<tr>
													<td class="theloai">Thể Loại:</td>
													<td class="theloai" id="metadata-theloai"><a
														href="http://mong.vn/truyen/Ngon-Tinh.html"> <i
															class="fa fa-tags"></i> <?php echo $_smarty_tpl->tpl_vars['story']->value->type;?>

													</a></td>
												</tr>
												<tr>
													<td class="tinhtrang">Tình Trạng:</td>
													<td class="tinhtrang"><span><a
															href="http://mong.vn/truyen/status/truyen-hoan-thanh.html"><?php echo $_smarty_tpl->tpl_vars['story']->value->state;?>
</a></span></td>
												</tr>
												<tr>
													<td class="tinhtrang" style="padding: 4px;">Nguồn</td>
													<td class="nguon"><div itemprop="publisher" itemscope=""
															itemtype="http://schema.org/Organization">
															<span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['story']->value->source;?>
</span>
														</div></td>
												</tr>
												<tr>
													<td class="view">Lượt Xem:</td>
													<td class="view"><span class="badge"
														style="padding-left: 5px;"><?php echo $_smarty_tpl->tpl_vars['story']->value->view;?>
</span></td>
												</tr>
												<tr>
													<td class="view">Số Chương:</td>
													<td class="sochuong" style="padding: 1px 5px;"><span
														class="badge"><?php echo $_smarty_tpl->tpl_vars['total_chapter']->value;?>
</span></td>
												</tr>
												<tr>
													<td class="tukhoa">Từ Khóa:</td>
													<td class="tukhoa"></td>
												</tr>
												<tr style="display: none">
													<td class="stat_info">Đăng bởi:</td>
													<td class="stat_info"><span class="author"
														style="padding-left: 0px;"></span> &nbsp;&nbsp;&nbsp;<span
														class="time"><meta itemprop="datePublished"
																content="2013-12-29 04:44:48">1 năm trước</span></td>
												</tr>
												<tr>
													<td class="stat_info2">Mới Nhất :</td>
													<td class="stat_info2"><span> <a
															href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
stories/<?php echo $_smarty_tpl->tpl_vars['story']->value->key;?>
/chapter-<?php echo $_smarty_tpl->tpl_vars['last_chapter']->value->id;?>
.html">Chương
																<?php echo $_smarty_tpl->tpl_vars['total_chapter']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['last_chapter']->value->title;?>
</a>
													</span></td>
												</tr>
												<tr>
													<td class="stat_info2">Like Truyện :</td>
													<td class="stat_info2"><span
														style="color: #16a085; font-weight: bold">Hãy Like Google+
															và Facebook truyện này để ủng hộ <?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
 và giúp truyện
															ra nhanh hơn</span> <!-- AddThis Button BEGIN -->
														<div class="addthis_toolbox addthis_default_style">
															<a class="addthis_button_facebook_like at300b"
																</a>

															<div class="atclear"></div>
														</div> <!-- AddThis Button END -->
														<div class="fb-like"
															data-href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
															data-layout="standard" data-action="like"
															data-show-faces="false" data-share="true"></div></td>
												</tr>
											</tbody>
										</table>

									</div>
									<div class="tab-pane fade" id="truyen_noidung">
										<div class="noidung" itemprop="description">
											<?php echo $_smarty_tpl->tpl_vars['story']->value->description;?>
 <br>
											<div style="font-size: 11px">
												Bạn đang <strong>đọc truyện <?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
</strong> trên website <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><strong>đọc
														truyện online</strong></a>. Bạn có thể truy cập website
												bằng thiết bị di động như iphone,android,windown phone để
												đọc truyện nhanh hơn. Hiện tại chúng tôi đang cập nhật tính
												năng download truyện <?php echo $_smarty_tpl->tpl_vars['story']->value->title;?>
 full pdf và prc. Hi vọng sẽ sớm ra mắt bạn đọc.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End item_truyen_box -->
						</div>
						<!-- End of col-md-9 -->

						<div class="clearfix"></div>

						<!-- Start footable -->

						<link rel="stylesheet" type="text/css"
							href="public/exts/footable/css/footable.core.min.css">
						<?php echo '<script'; ?>
 type="text/javascript"
							src="public/exts/paging/js/jquery.jqpagination.min.js"><?php echo '</script'; ?>
>

						<br>
						<div class="row"
							style="background-color: #fafafa; padding: 4px; margin: 5px; border-radius: 2px">
							<div class="col-md-6">
								<span style="line-height: 28px;">Chọn nhanh: </span> <span
									class="badge"
									style="line-height: 20px; border-radius: 2px; background: #359e9d;">
									<input type="text" class="curchuong"
									style="color: #000; text-align: center; width: 35px; border: none; border-radius: 2px"
									value="0" id="curchuong">&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['total_chapter']->value;?>

								</span> <a class="btn btn-warning btn-sm fchuong">Go <i
									class="fa fa-angle-double-right"></i>
								</a>

							</div>
							<div class="col-md-6">
								<div
									class="nouislider noUi-target noUi-ltr noUi-horizontal noUi-background"
									style="margin-top: 7px;">
									<div class="noUi-base">
										<div class="noUi-origin" data-style="left" style="left: 0%;">
											<div class="noUi-handle noUi-handle-lower"></div>
										</div>
									</div>
								</div>


							</div>
						</div>

						<div id="wrap_chuong_table">
							<div id="chuong_table">
								<table id="table_data" class="footable table  table-striped">
									<thead>
										<tr>
											<th>Danh Sách Chương</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['chapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_chapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->key => $_smarty_tpl->tpl_vars['chapter']->value) {
$_smarty_tpl->tpl_vars['chapter']->_loop = true;
?>
										<tr>
											<td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
stories/<?php echo $_smarty_tpl->tpl_vars['story']->value->key;?>
/chapter-<?php echo $_smarty_tpl->tpl_vars['chapter']->value->id;?>
.html"
												title="<?php echo $_smarty_tpl->tpl_vars['chapter']->value->title;?>
"> <?php echo $_smarty_tpl->tpl_vars['chapter']->value->title;?>
</a></td>
										</tr>
										<?php } ?>
									</tbody>

								</table>
							</div>
							<!-- End table chuong -->
						</div>
						<!-- end wrap_chuong_table -->
						<div style="width: 300px; margin: auto">
							<div class="pagination">
								<a href="#" class="first disabled" data-action="first">«</a> <a
									href="#" class="previous disabled" data-action="previous">‹</a>
								<input type="text" data-max-page="22" data-current-page="1"> <a
									href="#" class="next" data-action="next">›</a> <a href="#"
									class="last" data-action="last">»</a>
							</div>
						</div>


						<div class="clearfix"></div>
						<div class="chuong_page" style="color: #999">
							<i class="fa fa-tags"></i> Trang : <a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/1">1</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/2">2</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/3">3</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/4">4</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/5">5</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/6">6</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/7">7</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/8">8</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/9">9</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/10">10</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/11">11</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/12">12</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/13">13</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/14">14</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/15">15</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/16">16</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/17">17</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/18">18</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/19">19</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/20">20</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/21">21</a>,
							<a
								href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html/22">22</a>,
						</div>


						<br>

						<div class="truyen_tags">
							<i class="fa fa-tags"></i> Từ Khóa :<a
								href="http://mong.vn/truyen/tag/doc-truyen-truc-tuyen.html">doc
								truyen truc tuyen</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-online.html">đọc
								truyện online</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-tren-dien-thoai.html">đoc
								truyen tren dien thoai</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-tren-android.html">doc
								truyen tren android</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-tren-iphone.html">doc
								truyen tren iphone</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-tron-bo.html">doc
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc tron bo</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-full.html">doc
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc full</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-tren-di-dong.html">doc
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc tren di dong</a>
							,<a
								href="http://mong.vn/truyen/tag/doc-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc.html">doc
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc</a> ,<a
								href="http://mong.vn/truyen/tag/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-full.html">Vợ
								Trước Giá Trên Trời Của Tổng Giám Đốc full</a> ,<a
								href="http://mong.vn/truyen/tag/doc-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-tren-dien-thoai.html">doc
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc tren dien thoai</a>
							,<a
								href="http://mong.vn/truyen/tag/download-ebook-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-full.html">download
								ebook Vợ Trước Giá Trên Trời Của Tổng Giám Đốc full</a> ,<a
								href="http://mong.vn/truyen/tag/download-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-full.html">download
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc full</a> ,<a
								href="http://mong.vn/truyen/tag/download-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-full-pdf.html">download
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc full pdf</a> ,<a
								href="http://mong.vn/truyen/tag/download-truyen-Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-full-prc.html">download
								truyen Vợ Trước Giá Trên Trời Của Tổng Giám Đốc full prc</a>
						</div>

					</div>
					<!-- End of row -->
					
					<?php echo '<script'; ?>
>

                <?php echo '</script'; ?>
>
					


				</div>
				<!-- End of panel body -->
			</div>
			<!-- End of panel -->

			<!-- End truyen de cu -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<ul class="mn_nav">
						<li><span class="head">Thảo Luận</span></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<!-- Truyen moi content -->
					<div class="fb-comments"
						data-href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
						data-numposts="5" data-colorscheme="light"></div>
					<!-- End truyen moi content -->


				</div>
				<!-- End of panel body -->
			</div>
			<!-- End of panel -->

		</div>



	</div>
	<!-- end row -->
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

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$('#truyen_detail').click(function (e) {
	
	 
  	e.preventDefault();
  	
  	if($(this).find('.active').find('a').attr('href') != '#truyen_noidung'){
  	  	
	  	if($('.noidung').height() > 150){
			$('.noidung').css('height', '140').css('overflow', 'hidden');
			$('.truyen_thongtin_tab').append('<p id="threedots" style="text-align:center; font-size: 15px;">...</p><p class="viewmore extend">Xem thêm</p>');
			
		}
  }else{
	$('#threedots').remove();
	$('.viewmore').remove();
	$('.noidung').css('height', '');
  }
		  
  	$(this).tab('show');
  
});

$('.item_truyen_detail .viewmore').on('click', function(e){
	if($(this).hasClass('shorten')){
		$('.noidung').css('height', '140').css('overflow', 'hidden');
		$(this).addClass('extend');
		$(this).html('Xem thêm');
		$(this).removeClass('shorten');
		$('#threedots').html('...');
		window.scroll(0,findPos(document.getElementById("truyen_detail")) - 50);
		
	}else{
		$('.noidung').css('height', 'auto');
		$(this).addClass('shorten');
		$(this).html('Rút gọn');
		$(this).removeClass('extend');
		$('#threedots').html('');
	}
});

});
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
