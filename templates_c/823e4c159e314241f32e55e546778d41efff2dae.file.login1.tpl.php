<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 11:21:47
         compiled from "D:\xampp\htdocs\TRUONG_CONG_HAU\application\modules\test\views\login1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:586955502df10eafb0-13115818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823e4c159e314241f32e55e546778d41efff2dae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TRUONG_CONG_HAU\\application\\modules\\test\\views\\login1.tpl',
      1 => 1431335559,
      2 => 'file',
    ),
    '35af121eae466b6dbcd03caba654db796438f320' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TRUONG_CONG_HAU\\application\\views\\layout\\master.tpl',
      1 => 1431336104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '586955502df10eafb0-13115818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55502df11c9a36_20317401',
  'variables' => 
  array (
    'fixed_base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55502df11c9a36_20317401')) {function content_55502df11c9a36_20317401($_smarty_tpl) {?><!DOCTYPE html>
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
				<a href="http://ghengoibet.vn/gioi-thieu-san-pham-ghe-ngoi-bet"
					target="_blank" title="ghế ngồi bệt, ghế ngồi bệt đa năng"> <img
					src="http://image.manga24h.com/upload/images/2014/10/03/manga24h-ghe-ngoi-bet-tatami-ori.jpg"
					class="img-responsive">
				</a>

			</div>
		</div>
		<div class="clearfix"></div>
		<blockquote
			style="border-left: 2px solid #00F; background-color: #FFF; font-size: 16px; font-weight: bold; margin-bottom: 10px; max-width: 1080px; margin: auto">
			<a href="http://ghengoibet.vn/gioi-thieu-san-pham-ghe-ngoi-bet"
				target="_blank">[Ghengoibet.vn] Ghế ngồi bệt nhật bản - Đọc truyện,
				làm việc, thư giãn ... cực kỳ thoải mái, khỏi lo đau lưng , mỏi cổ</a>
		</blockquote>


	</div>
	<section class="container">
<div class="wrapMain">
	<div id="row">
		<div class="col-md-8">

			<!-- START TRUYEN DE CU -->
			<div class="panel panel-warning my-panel"
				style="border-radius: 0px;; position: relative; background-color: #FFF;">
				<span
					style="background-color: #EE3E78; text-transform: uppercase; font-weight: bold; font-family: tahoma; padding: 8px; box-shadow: 1px 2px 3px #999; border-radius: 0px; padding-right: 5px; font-size: 12px; color: #fff">Truyện
					Đề Cử <span class="show-current-page" id="decu-show-current-page">1</span>
				</span>

				<div class="clearfix"></div>
				<div style="height: 15px"></div>
				<input type="hidden" id="decu-slider-total-page"
					name="decu-slider-total-page" value="9"> <input type="hidden"
					id="decu-slider-current-page" name="decu-slider-current-page"
					value="1"> <a href="#" class="arrow_preview  btn-slider"
					style="display: block;" id="decu-btn-slider-prev" data-rel="decu"></a>
				<a href="#" class="arrow_next  btn-slider" id="decu-btn-slider-next"
					data-rel="decu" style="display: block;"></a>

				<div id="decu-wrapper" data-href="1">
					<div class="wrap-loading" id="wrap-decu-loading"
						style="display: none; position: relative;">
						<div class="loading" id="decu-loading"
							style="position: absolute; height: 0px; top: 50%; margin-top: 0px; width: 0px; left: 50%; margin-left: 0px;">
							<img alt="loading" src="public/images/loading11.gif">
						</div>
						<br>
					</div>
					<div id="decu-content-slide-1" class="decu-content">

						<div class="panel panel-success my-panel">
							<div class="panel-body">

								<div class="row">

									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">
												<div class="ribbon ribbon_hot"></div>
												<a
													href="http://mong.vn/truyen/Co-Vo-Tre-Con-Cua-Lang-Thieu-Ba-Dao/4527.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/ksl9ll8pxg08gg80g8.jpg"
													src="http://sv1.mong.vn/mong/upload/ksl9ll8pxg08gg80g8.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Co-Vo-Tre-Con-Cua-Lang-Thieu-Ba-Dao/4527.html">Cô
														Vợ Trẻ Con Của Lăng Thiếu Bá Đạo</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/status/truyen-hoan-thanh.html">Hoàn
														Thành</a>&nbsp;&nbsp;459 Chương
												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Ức Tích Nhan</span> <span class="pull-left time">1 năm
														trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
														,<a href="http://mong.vn/truyen/Tieu-thuyet.html"
															itemprop="url"> <span itemprop="title">Tiểu Thuyết</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">
												<div class="ribbon ribbon_hot"></div>
												<a
													href="http://mong.vn/truyen/Trong-Sinh-Chi-On-Uyen/574.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/18h46ehm85z4w4g80w.jpg"
													src="http://sv1.mong.vn/mong/upload/18h46ehm85z4w4g80w.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Trong-Sinh-Chi-On-Uyen/574.html">Trọng
														Sinh Chi Ôn Uyển</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Trong-Sinh-Chi-On-Uyen-Quyen-6-Chuong-188-Ba-cai-hong-bao/569283.htm">Quyển
														6: Chương 188: Ba c...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Lục Nguyệt Hạo Tuyết</span> <span class="pull-left time">1
														năm trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Truyen-xuyen-khong.html"
															itemprop="url"> <span itemprop="title">Xuyên Không</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">
												<div class="ribbon ribbon_hot"></div>
												<a href="http://mong.vn/truyen/Quoc-Sac-Sinh-Kieu/464.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/wocrybvyz7k40ggk0c.jpg"
													src="http://sv1.mong.vn/mong/upload/wocrybvyz7k40ggk0c.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen/Quoc-Sac-Sinh-Kieu/464.html">Quốc
														Sắc Sinh Kiêu</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Quoc-Sac-Sinh-Kieu-Quyen-8-Chuong-1540-Nu-cuong-nhan/569005.htm">Quyển
														8: Chương 1540: Nữ ...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Sa Mạc</span> <span class="pull-left time">1 năm trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Truyen-Lich-su.html"
															itemprop="url"> <span itemprop="title">Lịch Sử</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">
												<div class="ribbon ribbon_hot"></div>
												<a
													href="http://mong.vn/truyen/Mao-Bai-Dai-Anh-Hung/206.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/mfj39smd1c00k0gskk.jpg"
													src="http://sv1.mong.vn/mong/upload/mfj39smd1c00k0gskk.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Mao-Bai-Dai-Anh-Hung/206.html">Mạo
														Bài Đại Anh Hùng</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Mao-Bai-Dai-Anh-Hung-Quyen-7-Chuong-112-Hoi-su-[-8-]/568850.htm">Quyển
														7: Chương 112: Hội ...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Thất Thập Nhị Biên</span> <span class="pull-left time">1
														năm trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Truyen-khoa-huyen.html"
															itemprop="url"> <span itemprop="title">Khoa Huyễn</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->

								</div>
							</div>
							<!-- End of panel body -->
						</div>
						<!-- End of panel -->
					</div>
					<!-- End of cucu content -->
				</div>
				<!-- End of decu wrapper -->

			</div>
			<!-- End of panel -->

			<!-- End truyen de cu -->



			<div class="panel panel-warning my-panel"
				style="border-radius: 0px;; position: relative; background-color: #FFF;">
				<span class="pull-left"
					style="background-color: #c0392b; text-transform: uppercase; font-weight: bold; font-family: tahoma; padding: 8px; box-shadow: 1px 1px 2px #999; border-radius: 0px; padding-right: 5px; font-size: 12px; color: #fff">Mới
					Cập Nhật <span class="show-current-page"
					id="truyenmoi-show-current-page">1</span>
				</span> <span class="pull-right"
					style="background-color: #c0392b; padding: 4px 7px; box-shadow: -1px 1px 1px #999; font-size: 11px"><a
					href="http://mong.vn/truyen"><span style="color: #fff">Xem Thêm <span
							class="glyphicon glyphicon-arrow-right"> </span>
					</span></a></span>
				<div class="clearfix"></div>

				<div class="clearfix"></div>
				<div style="height: 15px"></div>
				<input type="hidden" id="truyenmoi-slider-total-page"
					name="truyenmoi-slider-total-page" value="20"> <input type="hidden"
					id="truyenmoi-slider-current-page"
					name="truyenmoi-slider-current-page" value="1"> <a href="#"
					class="arrow_preview  btn-slider" style="display: block;"
					id="truyenmoi-btn-slider-prev" data-rel="truyenmoi"></a> <a
					href="#" class="arrow_next  btn-slider"
					id="truyenmoi-btn-slider-next" data-rel="truyenmoi"
					style="display: block;"></a>

				<div id="truyenmoi-wrapper" data-href="1">
					<div class="wrap-loading" id="wrap-truyenmoi-loading"
						style="display: none; position: relative;">
						<div class="loading" id="truyenmoi-loading"
							style="position: absolute; height: 0px; top: 50%; margin-top: 0px; width: 0px; left: 50%; margin-left: 0px;">
							<img alt="loading" src="public/images/loading11.gif">
						</div>
						<br>
					</div>
					<div id="truyenmoi-content-slide-1" class="truyenmoi-content">

						<div class="panel panel-success my-panel">
							<div class="panel-body">

								<div class="row">

									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a href="http://mong.vn/truyen/Ba-Chu-Thu-Mua/5858.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/ezpr67mgtw8c0wckc.jpg"
													src="http://sv1.mong.vn/mong/upload/ezpr67mgtw8c0wckc.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen/Ba-Chu-Thu-Mua/5858.html">Bá
														Chủ Thu Mua</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Ba-Chu-Thu-Mua-Chuong-107-Gia-tri-lon/571952.htm">Chương
														107: Giá trị lớn...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Ngốc Tiểu Tứ</span> <span class="pull-left time">2 tháng
														trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Truyen-do-thi.html"
															itemprop="url"> <span itemprop="title">Đô Thị</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a href="http://mong.vn/truyen/Vuot-Khuon/5851.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/3afri17n5ke88cs4sk.jpg"
													src="http://sv1.mong.vn/mong/upload/3afri17n5ke88cs4sk.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen/Vuot-Khuon/5851.html">Vượt
														Khuôn</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Vuot-Khuon-Chuong-35/571943.htm">Chương
														35</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Tử Liễm</span> <span class="pull-left time">3 tháng trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a
													href="http://mong.vn/truyen/Toi-Nay-Khai-Trai-Sep-That-Manh-Me/5844.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/ubrn2yqrymo8o84s4c.jpg"
													src="http://sv1.mong.vn/mong/upload/ubrn2yqrymo8o84s4c.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Toi-Nay-Khai-Trai-Sep-That-Manh-Me/5844.html">Tối
														Nay Khai Trai Sếp Thật Mạnh Mẽ</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Toi-Nay-Khai-Trai-Sep-That-Manh-Me-Chuong-84-Giong-qua-giong/571941.htm">Chương
														84: Giống, quá giố...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Hàn Dẫn Tố</span> <span class="pull-left time">3 tháng
														trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a href="http://mong.vn/truyen/Xin-Nuoi-Ta/5843.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/35w2rbryd8mco0koc0.jpg"
													src="http://sv1.mong.vn/mong/upload/35w2rbryd8mco0koc0.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen/Xin-Nuoi-Ta/5843.html">Xin
														Nuôi Ta</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Xin-Nuoi-Ta-Chuong-21-Ai-da-cau-huyet-lam-ly/571921.htm">Chương
														21: Ai da, cẩu huy...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Sửu Tước</span> <span class="pull-left time">3 tháng trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Vong-du.html" itemprop="url">
															<span itemprop="title">Võng Du</span>
														</a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->

								</div>

								<div class="row">

									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a
													href="http://mong.vn/truyen/Canh-Gioi-Mau-Hong-Phan/5841.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/9ohb11klf6cco8k80.jpg"
													src="http://sv1.mong.vn/mong/upload/9ohb11klf6cco8k80.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Canh-Gioi-Mau-Hong-Phan/5841.html">Cảnh
														Giới Màu Hồng Phấn</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Canh-Gioi-Mau-Hong-Phan-Chuong-23-Chuong-23-/571919.htm">Chương
														23: Chương 23 ...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i> Ô
														Sao</span> <span class="pull-left time">3 tháng trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a
													href="http://mong.vn/truyen/Trung-Sinh-Kieu-The-Vo-Dich/5840.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/1ex3u3etd9c08g84k.jpg"
													src="http://sv1.mong.vn/mong/upload/1ex3u3etd9c08g84k.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Trung-Sinh-Kieu-The-Vo-Dich/5840.html">Trùng
														Sinh Kiều Thê Vô Địch</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Trung-Sinh-Kieu-The-Vo-Dich-Chuong-21-Kich-ban-so-dinh/571916.htm">Chương
														21: Kịch bản sơ đị...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Mị Dạ Thủy Thảo</span> <span class="pull-left time">3
														tháng trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a href="http://mong.vn/truyen/Cuong-Ba/5838.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/6qikynydcv8kw084g.jpg"
													src="http://sv1.mong.vn/mong/upload/6qikynydcv8kw084g.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen/Cuong-Ba/5838.html">Cuồng Ba</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Cuong-Ba-Chuong-26-Nhuoc-diem-ngot-ngao/571914.htm">Chương
														26: Nhược điểm ng...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Mị Dạ Thủy Thảo</span> <span class="pull-left time">3
														tháng trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->


									<div class="col-md-3 col-sm-3 col-xs-6">
										<div class="item_truyen_box">

											<div class="img">

												<a
													href="http://mong.vn/truyen/Quan-Chinh-Tam-Thieu-Dung-Qua-Phan/5837.html"><img
													class="lazy img-responsive"
													data-original="http://sv1.mong.vn/mong/upload/14oxu31grn5wk8o8gg.jpg"
													src="http://sv1.mong.vn/mong/upload/14oxu31grn5wk8o8gg.jpg"
													style="display: block;"></a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen/Quan-Chinh-Tam-Thieu-Dung-Qua-Phan/5837.html">Quân
														Chính Tam Thiếu Đừng Quá Phận</a>
												</div>
												<div class="chuong_name">
													<a
														href="http://mong.vn/truyen/Quan-Chinh-Tam-Thieu-Dung-Qua-Phan-Chuong-41-Giong-nhu-vat-te-thom-ngon-me-nguoi/571913.htm">Chương
														41: Giống như vật ...</a>

												</div>

												<div class="stat_info">
													<span class="pull-left author"><i class="fa fa-user"></i>
														Tam Thiên Trường Ca</span> <span class="pull-left time">3
														tháng trước</span>
													<div class="clearfix"></div>
													<div class="tags">
														<i class="fa fa-tags"></i> <a
															href="http://mong.vn/truyen/Ngon-Tinh.html"
															itemprop="url"> <span itemprop="title">Ngôn Tình</span></a>
													</div>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-3 -->

								</div>
							</div>
							<!-- End of panel body -->
						</div>
						<!-- End of panel -->
					</div>
					<!-- End of cucu content -->
				</div>
				<!-- End of decu wrapper -->
			</div>
			<!-- End of panel -->




			<div class="panel panel-warning my-panel"
				style="border-radius: 0px;; position: relative; background-color: #FFF;">
				<span class="pull-left"
					style="background-color: #e67e22; text-transform: uppercase; font-weight: bold; font-family: tahoma; padding: 8px; box-shadow: 1px 1px 2px #999; border-radius: 0px; padding-right: 5px; font-size: 12px; color: #fff">Truyện
					ngắn mới <span class="show-current-page"
					id="truyenngan-show-current-page">1</span>
				</span> <span class="pull-right"
					style="background-color: #e67e22; padding: 4px 7px; box-shadow: -1px 1px 1px #999; font-size: 11px"><a
					href="http://mong.vn/truyen-ngan"><span style="color: #fff">Xem
							Thêm <span class="glyphicon glyphicon-arrow-right"> </span>
					</span></a></span>
				<div class="clearfix"></div>


				<div class="clearfix"></div>

				<input type="hidden" id="truyenngan-slider-total-page"
					name="truyenngan-slider-total-page" value="20"> <input
					type="hidden" id="truyenngan-slider-current-page"
					name="truyenngan-slider-current-page" value="1"> <a href="#"
					class="arrow_preview  btn-slider" style="display: block;"
					id="truyenngan-btn-slider-prev" data-rel="truyenngan"></a> <a
					href="#" class="arrow_next  btn-slider"
					id="truyenngan-btn-slider-next" data-rel="truyenngan"
					style="display: block;"></a>

				<div id="truyenngan-wrapper" data-href="1">
					<div class="wrap-loading" id="wrap-truyenngan-loading"
						style="display: none; position: relative;">
						<div class="loading" id="truyenngan-loading"
							style="position: absolute; height: 0px; top: 50%; margin-top: 0px; width: 0px; left: 50%; margin-left: 0px;">
							<img alt="loading" src="public/images/loading11.gif">
						</div>
						<br>
					</div>
					<div id="truyenngan-content-slide-1" class="truyenngan-content">

						<div class="panel panel-success my-panel truyenngan-panel">
							<div class="panel-body">

								<div class="row">

									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="item_truyen_box">
											<div class="img">
												<a
													href="http://mong.vn/truyen/Ky-Uc-Dam-Mau-Co-Nhoc-Hai-Mat/3936.html">
													<img class="lazy img-responsive"
													data-original="http://mong.vn/images/truyenngan/2cxdcvkhld8gcgsow8.jpg"
													src="http://mong.vn/images/truyenngan/2cxdcvkhld8gcgsow8.jpg"
													style="display: block;">
												</a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen-ngan/Gui-Lai-Cho-Em/31.html">Gửi
														Lại Cho Em</a>
												</div>

												<div class="stat_info">
													<div class="tags">
														<a href="http://mong.vn/truyen-ngan/Tinh-yeu.html"> <i
															class="fa fa-tags"></i> Tình Yêu
														</a>
													</div>
													<span class="pull-left author"><i class="fa fa-user"></i>
														Sưu tầm</span> <span class="pull-left time">11 tháng trước</span>
													<div class="clearfix"></div>
													<p class="tndescription">Sau nhiều năm yêu nhau, cô gái cảm
														thấy chán nản, cuối cùng đã dùng hết can đảm nói với chàng
														trai : “Chúng ta chia tay đi !”</p>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-6 -->



									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="item_truyen_box">
											<div class="img">
												<a
													href="http://mong.vn/truyen/Ky-Uc-Dam-Mau-Co-Nhoc-Hai-Mat/3936.html">
													<img class="lazy img-responsive"
													data-original="http://mong.vn/images/truyenngan/2yv7lddvb6iook8sgs.jpg"
													src="http://mong.vn/images/truyenngan/2yv7lddvb6iook8sgs.jpg"
													style="display: block;">
												</a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen-ngan/NHU-CHUA-BAT-DAU/27.html">NHƯ
														CHƯA BẮT ĐẦU</a>
												</div>

												<div class="stat_info">
													<div class="tags">
														<a href="http://mong.vn/truyen-ngan/Tinh-yeu.html"> <i
															class="fa fa-tags"></i> Tình Yêu
														</a>
													</div>
													<span class="pull-left author"><i class="fa fa-user"></i>
														Chili Pepper</span> <span class="pull-left time">11 tháng
														trước</span>
													<div class="clearfix"></div>
													<p class="tndescription">"Có phải chia tay một người mình
														vẫn còn yêu, thì còn đau khổ hơn gấp nhiều lần người bị
														chia tay? Và người ta thường nuối tiếc- biết tìm lại những
														gì của quá khứ khi đã buông?"</p>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-6 -->



								</div>
								<!-- End of row -->
								<div class="row">

									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="item_truyen_box">
											<div class="img">
												<a
													href="http://mong.vn/truyen/Ky-Uc-Dam-Mau-Co-Nhoc-Hai-Mat/3936.html">
													<img class="lazy img-responsive"
													data-original="http://mong.vn/images/truyenngan/cuo6yy4nza0csoccgw.jpg"
													src="http://mong.vn/images/truyenngan/cuo6yy4nza0csoccgw.jpg"
													style="display: block;">
												</a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a
														href="http://mong.vn/truyen-ngan/Buc-Chan-Dung-Khong-Ban/28.html">Bức
														Chân Dung Không Bán</a>
												</div>

												<div class="stat_info">
													<div class="tags">
														<a href="http://mong.vn/truyen-ngan/Tinh-ban.html"> <i
															class="fa fa-tags"></i> Tình Bạn
														</a>
													</div>
													<span class="pull-left author"><i class="fa fa-user"></i>
														Tháng Giêng</span> <span class="pull-left time">11 tháng
														trước</span>
													<div class="clearfix"></div>
													<p class="tndescription">Năm mười bảy tuổi, hay thậm chí
														sớm hơn nữa, tôi nhận ra là mình không đẹp. Điều đó rõ
														ràng đến nỗi, nếu giả sử lúc ấy có ai đó nói là yêu tôi,
														thì tôi sẽ phá lêncười, và chỉ ngay vào Lan, cô bạn gái
														ngồi cạnh tôi. Lan xinh vô cùng, một vẻ đẹp tự tin...</p>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-6 -->



									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="item_truyen_box">
											<div class="img">
												<a
													href="http://mong.vn/truyen/Ky-Uc-Dam-Mau-Co-Nhoc-Hai-Mat/3936.html">
													<img class="lazy img-responsive"
													data-original="http://mong.vn/images/truyenngan/i6yoa9smp48ok0840w.jpg"
													src="http://mong.vn/images/truyenngan/i6yoa9smp48ok0840w.jpg"
													style="display: block;">
												</a>
											</div>
											<div class="wrap_bottom_item">
												<div class="chuong_info">/</div>
												<div class="title">
													<a href="http://mong.vn/truyen-ngan/TAM-BIET-RAINY/29.html">TẠM
														BIỆT RAINY</a>
												</div>

												<div class="stat_info">
													<div class="tags">
														<a href="http://mong.vn/truyen-ngan/Tan-man.html"> <i
															class="fa fa-tags"></i> Tản Mạn
														</a>
													</div>
													<span class="pull-left author"><i class="fa fa-user"></i>
														Đặng Nguyễn Đông Vy</span> <span class="pull-left time">11
														tháng trước</span>
													<div class="clearfix"></div>
													<p class="tndescription">Đầu tiên là "Tạm biệt Rainy",
														truyện này ngày xưa ám ảnh mãi, vì 2 câu trong truyện 1 là
														câu "Em về điểm phấn tô son lại - Ngạo với nhân gian một
														nét cười" 2 là câu "Nếu chạy một mình, hay nếu luôn dẫn
														đầu, Lam sẽ không biết mình đang chạy nhanh hay ...</p>


												</div>
											</div>
										</div>
										<!-- End item_truyen_box -->
									</div>
									<!-- End of col-md-6 -->



								</div>
								<!-- End of row -->









							</div>
							<!-- end .panel-body -->
						</div>
						<!-- end .truyenngan-panel -->

					</div>
					<!-- End of cucu content -->
				</div>
				<!-- End of decu wrapper -->
			</div>
			<!-- End of panel -->



			<br>


			<link type="text/css" rel="stylesheet"
				href="http://truyencuatui.info/public/exts/css/blocks.css">
			<div class="row">
				<div class="col-md-6">
					<div class="right-block" id="video-block">
						<span class="right-block-title">Hot Video <a
							href="http://truyencuatui.info/video" class="right-view-all"
							target="_blank" rel="nofollow">Xem hết »</a></span>
						<div class="right-block-content">
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/142/Anime-Onepunch-Man-Trailer-Ban-Dep.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/6Bdb1V0Io_g/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/142/Anime-Onepunch-Man-Trailer-Ban-Dep.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Anime
									Onepunch Man - Trailer Bản Đẹp</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/133/Nhung-anime-dang-mong-cho-SS-moi.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/80xZv5yYd3c/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/133/Nhung-anime-dang-mong-cho-SS-moi.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Những
									anime đáng mong chờ SS mới</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/132/Tong-hop-nhung-ban-nhac-anime-hay-nhat-Phan-2.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/MMxmPsSm_dY/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/132/Tong-hop-nhung-ban-nhac-anime-hay-nhat-Phan-2.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Tổng
									hợp những bản nhạc anime hay nhất - Phần 2</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/131/Tong-Hop-nhung-ban-nhac-Anime-Hay-Nhat-Phan-1.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/JEQKx2ucqwg/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/131/Tong-Hop-nhung-ban-nhac-Anime-Hay-Nhat-Phan-1.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Tổng
									Hợp những bản nhạc Anime Hay Nhất - Phần 1</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/130/Trailer-High-school-DxD-Season-3-Xem-Do-Nghien.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/tD_8ZhKFtzk/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/130/Trailer-High-school-DxD-Season-3-Xem-Do-Nghien.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Trailer
									High school DxD Season 3 - Xem Đỡ Nghiền</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/129/Minecraft-Animation-Gods-Dont-Die-2.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/FVs6XgjCRWs/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/129/Minecraft-Animation-Gods-Dont-Die-2.html"
									class="right-block-item-title" target="_blank" rel="nofollow">[Minecraft
									Animation] Gods Don't Die ( 2 )</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/126/「AMV」★-Nanatsu-No-Taizai-The-Seven-Deadly-Sins-★-Demon-Meliodas-VS-Helbram-Holy-Knight-VS-Ban.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/WbJHgwMBRlg/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/126/「AMV」★-Nanatsu-No-Taizai-The-Seven-Deadly-Sins-★-Demon-Meliodas-VS-Helbram-Holy-Knight-VS-Ban.html"
									class="right-block-item-title" target="_blank" rel="nofollow">「AMV」★
									Nanatsu No Taizai (The Seven Deadly Sins) ★ Demon Meliodas VS
									Helbram (Holy Knight) VS Ban</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/125/AMV-Gangnam-Style.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/QKkBN_uCZqE/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/125/AMV-Gangnam-Style.html"
									class="right-block-item-title" target="_blank" rel="nofollow">[AMV]
									Gangnam Style</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/124/Stop-Motion-Parkour.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/g3p2TZ5q9to/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/124/Stop-Motion-Parkour.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Stop-Motion
									Parkour</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/video/123/Portal-Trick-Shots.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://i.ytimg.com/vi/OhCQeFX9GSg/mqdefault.jpg" alt=""></a><a
									href="http://truyencuatui.info/video/123/Portal-Trick-Shots.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Portal
									Trick Shots</a><br>
								<span class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i> 2 tháng trước</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-block" id="blog-block">
						<span class="right-block-title">Hot Blog <a
							href="http://truyencuatui.info/blog" class="right-view-all"
							target="_blank" rel="nofollow">Xem hết »</a></span>
						<div class="right-block-content">
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/86/Top-5-nhan-vat-mang-gioi-tinh-gay-tranh-cai-nhat-truyen-Naruto.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://2.bp.blogspot.com/-o2Xtx81bDCY/VNcJzyeRAEI/AAAAAAAAvNY/tY0AYCmasdI/s0/1.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/86/Top-5-nhan-vat-mang-gioi-tinh-gay-tranh-cai-nhat-truyen-Naruto.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Top
									5 nhân vật mang giới tính gây tranh cãi nhất truyện Naruto</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>Kura0Kuro0Kuri</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/85/Xuat-hien-du-an-truyen-tranh-hai-Viet-Nam-dang-Kim-Chi-Cu-Cai.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://truyencuatui.info/images/user/rhtox4fkf9cwsgcwsc.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/85/Xuat-hien-du-an-truyen-tranh-hai-Viet-Nam-dang-Kim-Chi-Cu-Cai.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Xuất
									hiện dự án truyện tranh hài Việt Nam dạng "Kim Chi Củ Cải"</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>miller.time2601</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/84/Ban-Khoai-nhat-bao-boi-nao-cua-Doraemon-va-ban-se-lam-gi-voi-no-neu-vo-tinh-lum-duoc-bao-boi.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://1.bp.blogspot.com/-7hfSMEAogKg/VKes1gtrmgI/AAAAAAAAF4I/JPIPaZ3r8FA/s0/default-avatar.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/84/Ban-Khoai-nhat-bao-boi-nao-cua-Doraemon-va-ban-se-lam-gi-voi-no-neu-vo-tinh-lum-duoc-bao-boi.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Bạn
									Khoái nhất bảo bối nào của Doraemon và bạn sẽ làm gì với nó nếu
									vô tình lụm được bảo bối ?</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>jenni</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/83/Onepunch-Man-Sap-Ra-Mat-Anime.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://3.bp.blogspot.com/-gQtmom-lSxg/VUDxwjFhVnI/AAAAAAAAIqE/TUCvBPb-4BM/s0/1.png"
									alt=""></a><a
									href="http://truyencuatui.info/blog/83/Onepunch-Man-Sap-Ra-Mat-Anime.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Onepunch
									Man - Sắp Ra Mắt Anime</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>RikiMan</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/82/Nhung-cau-do-hai-nao-phan-9.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://2.bp.blogspot.com/-o2Xtx81bDCY/VNcJzyeRAEI/AAAAAAAAvNY/tY0AYCmasdI/s0/1.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/82/Nhung-cau-do-hai-nao-phan-9.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Những
									câu đố hại não (phần 9)</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>Kura0Kuro0Kuri</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/79/Su-huu-dung-cua-cac-sieu-anh-hung-trong-Avengers.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://3.bp.blogspot.com/-gQtmom-lSxg/VUDxwjFhVnI/AAAAAAAAIqE/TUCvBPb-4BM/s0/1.png"
									alt=""></a><a
									href="http://truyencuatui.info/blog/79/Su-huu-dung-cua-cac-sieu-anh-hung-trong-Avengers.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Sự
									hữu dụng của các siêu anh hùng trong Avengers</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>RikiMan</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/78/Dragon-Ball-Z-Light-of-Hope-Phim-ngan-7-vien-ngoc-rong-dang-gay-sot-cu-dan-mang.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://3.bp.blogspot.com/-gQtmom-lSxg/VUDxwjFhVnI/AAAAAAAAIqE/TUCvBPb-4BM/s0/1.png"
									alt=""></a><a
									href="http://truyencuatui.info/blog/78/Dragon-Ball-Z-Light-of-Hope-Phim-ngan-7-vien-ngoc-rong-dang-gay-sot-cu-dan-mang.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Dragon
									Ball Z: Light of Hope – Phim ngắn 7 viên ngọc rồng đang gây sốt
									cư dân mạng</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>RikiMan</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>2 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/76/Nhung-cau-do-hai-nao-phan-8.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://2.bp.blogspot.com/-o2Xtx81bDCY/VNcJzyeRAEI/AAAAAAAAvNY/tY0AYCmasdI/s0/1.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/76/Nhung-cau-do-hai-nao-phan-8.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Những
									câu đố hại não (phần 8)</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>Kura0Kuro0Kuri</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>3 tháng trước</span>
							</div>
							<div class="each-right-item right-even">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/75/Nhung-cau-do-hai-nao-phan-7.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://2.bp.blogspot.com/-o2Xtx81bDCY/VNcJzyeRAEI/AAAAAAAAvNY/tY0AYCmasdI/s0/1.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/75/Nhung-cau-do-hai-nao-phan-7.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Những
									câu đố hại não (phần 7)</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>Kura0Kuro0Kuri</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>3 tháng trước</span>
							</div>
							<div class="each-right-item right-odd">
								<a class="right-item-img-a"
									href="http://truyencuatui.info/blog/74/Nhung-cau-do-hai-nao-phan-6.html"
									title="" target="_blank" rel="nofollow"><img
									src="http://2.bp.blogspot.com/-o2Xtx81bDCY/VNcJzyeRAEI/AAAAAAAAvNY/tY0AYCmasdI/s0/1.jpg"
									alt=""></a><a
									href="http://truyencuatui.info/blog/74/Nhung-cau-do-hai-nao-phan-6.html"
									class="right-block-item-title" target="_blank" rel="nofollow">Những
									câu đố hại não (phần 6)</a><br>
								<span class="right-item-metadata right-item-author"><i
									class="fa fa-user"></i>Kura0Kuro0Kuri</span><span
									class="right-item-metadata right-item-time"><i
									class="fa fa-clock-o"></i>3 tháng trước</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- COL MD 9 -->

		<div class="col-md-4">




			<div style="text-align: center">
				<div class="select2-container input-medium"
					id="s2id_menu-search-box" style="width: 300px;">
					<a href="javascript:void(0)" onclick="return false;"
						class="select2-choice select2-default" tabindex="-1"> <span
						class="select2-chosen">Nhập Tên Truyện hoặc tác giả...</span><abbr
						class="select2-search-choice-close"></abbr> <span
						class="select2-arrow"><i class="fa fa-search"></i></span></a><input
						class="select2-focusser select2-offscreen" type="text"
						id="s2id_autogen1" tabindex="0">
					<div
						class="select2-drop select2-display-none select2-with-searchbox">
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
					data-placeholder="Nhập Tên Truyện  hoặc tác giả..." tabindex="-1">
			</div>
			<br>

			<div id="donate_box">
				<p class="donate_box_title">Hãy đăng kí để upload và chia sẻ:</p>
				<p style="padding-left: 10px;">
					<img src="http://mong.vn/public/images/donate_icons.png"
						alt="Đăng kí upload tại mong.vn"><a
						class="push-right button-register-upload user_post_register">Đăng
						kí</a>
				</p>
				<div style="clear: both;"></div>
				<p></p>

			</div>
			<blockquote
				style="border-left: 2px solid #00F; background-color: #FFF; font-size: 16px; font-weight: bold; color: #00F">
				LIÊN HỆ QUẢNG CÁO <br> Ad.manga24h@gmail.com
			</blockquote>

			<!-- START Render TRUYEN category -->
			<a name="category"></a>
			<div class="panel panel-info my-panel right-panel" id="">
				<div class="panel-heading">
					<ul class="mn_nav">
						<li><span class="head">Kho Truyện</span></li>


					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body box_news">
					<table class="table  table_truyen_theloai">
						<tbody>
							<tr style="background-color: #e84c3d">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Tien-Hiep.html" title="Tiên Hiệp">Tiên
										Hiệp</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Kiem-Hiep.html" title="Kiếm Hiệp">Kiếm
										Hiệp</a></td>
							</tr>
							<tr style="background-color: #e67e22">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Ngon-Tinh.html" title="Ngôn Tình">Ngôn
										Tình</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-Teen.html"
									title="Truyện Teen">Truyện Teen</a></td>
							</tr>
							<tr style="background-color: #f1c40f">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-do-thi.html" title="Đô Thị">Đô
										Thị</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-quan-su.html"
									title="Quân Sự">Quân Sự</a></td>
							</tr>
							<tr style="background-color: #2ecc71">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-Lich-su.html"
									title="Lịch Sử">Lịch Sử</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-xuyen-khong.html"
									title="Xuyên Không">Xuyên Không</a></td>
							</tr>
							<tr style="background-color: #27ae60">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-ma.html" title="Truyện Ma">Truyện
										Ma</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-trinh-tham.html"
									title="Trinh Thám">Trinh Thám</a></td>
							</tr>
							<tr style="background-color: #1abc9c">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-huyen-huyen.html"
									title="Huyền Huyễn">Huyền Huyễn</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Truyen-khoa-huyen.html"
									title="Khoa Huyễn">Khoa Huyễn</a></td>
							</tr>
							<tr style="background-color: #16a085">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Di-Gioi.html" title="Dị  Giới">Dị
										Giới</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Vong-du.html" title="Võng Du">Võng
										Du</a></td>
							</tr>
							<tr style="background-color: #3498db">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/Tieu-thuyet.html"
									title="Tiểu Thuyết">Tiểu Thuyết</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/status/truyen-hoan-thanh.html"
									title="Truyện Full">Truyện Full</a></td>
							</tr>
							<tr style="background-color: #2980b9">
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/status/truyen-moi.html"
									title="Truyện Mới">Truyện Mới</a></td>
								<td><i class="fa fa-tags"></i><a
									href="http://mong.vn/truyen/status/truyen-hay.html"
									title="Truyện Hay">Truyện Hay</a></td>
							</tr>
							<tr style="background-color: #c0392b">
								<td><i class="fa fa-tags"></i><a href="http://mong.vn/truyen"
									title="Mới Cập Nhật">Mới Cập Nhật</a></td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>




			<!-- BEGIN CBOX - www.cbox.ws - v001 -->
			<div style="text-align: center">
				<a href="http://ghengoibet.vn/gioi-thieu-san-pham-ghe-ngoi-bet"
					target="_blank" title="ghế ngồi bệt, ghế ngồi bệt đa năng"><img
					src="http://2.bp.blogspot.com/-juDOyJhX9Xk/VRvfRyTpqgI/AAAAAAAAYDs/5Ria4rq1S6U/s0/anime24h_320-600_2015-04-01.jpg"
					class="img-responsive"></a>
			</div>
			<br> <br>
			<!-- END CBOX -->
			<!-- START Render TRUYEN View -->
			<div class="panel panel-info my-panel right-panel"
				id="right_view_story">
				<div class="panel-heading">

					<ul class="nav nav-tabs mn_tab pull-left">
						<li><span class="head">Truyện</span></li>

					</ul>
					<ul class="nav nav-tabs mn_tab pull-right" id="tab_truyen_view">

						<li class="active li-list-cat-small"><a href="#ngay_truyen"><span
								class="label panel-label-small-title">Ngày</span></a></li>
						<li class="li-list-cat-small"><a href="#tuan_truyen"><span
								class="label panel-label-small-title">Tuần</span></a></li>
						<li class="li-list-cat-small"><a href="#thang_truyen"><span
								class="label panel-label-small-title">Tháng</span></a></li>
						<li class="li-list-cat-small"><a href="#nam_truyen"><span
								class="label panel-label-small-title">Năm</span></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>

				<div class="panel-body box_news">


					<div class="tab-content mn_tab_content truyen_view">
						<div class="tab-pane active" id="ngay_truyen">
							<div class="list-group">
								<a href="http://mong.vn/truyen/Than-Khong-Thien-Ha/4899.html"
									class="list-group-item top_video_item top_truyen_bg">
									<p class="box-news-image">
										<img width="60" height="94"
											src="http://sv1.mong.vn/mong/upload/3clpf73euh4wwksc0s.jpg">
									</p>Thần Khống Thiên Hạ <br>
								<span class="view">287663 Lượt xem</span>
									<p class="chuong">Chương 2777: Ta có lẽ còn chưa xem như vô
										địch! (2)</p>
								</a><a
									href="http://mong.vn/truyen/Cuu-Tinh-Thien-Than-Quyet/5262.html"
									class="list-group-item"><span class="medal">2</span>Cửu Tinh
									Thiên Thần Quyết<span class="view pull-right">197499 Lượt xem</span></a><a
									href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
									class="list-group-item"><span class="medal">3</span>Vợ Trước
									Giá Trên Trời Của Tổng Giám Đốc<span class="view pull-right">134560
										Lượt xem</span></a><a
									href="http://mong.vn/truyen/Tinh-Yeu-Ba-Dao-Trien-Mien-Voi-De-Nhat-Phu-Nhan/5752.html"
									class="list-group-item"><span class="medal">4</span>Tình Yêu Bá
									Đạo Triền Miên Với Đệ Nhất Phu Nhân<span
									class="view pull-right">95691 Lượt xem</span></a><a
									href="http://mong.vn/truyen/Ngao-The-Cuu-Trong-Thien/2828.html"
									class="list-group-item"><span class="medal">5</span>Ngạo Thế
									Cửu Trọng Thiên<span class="view pull-right">95303 Lượt xem</span></a><a
									href="http://mong.vn/truyen/Kiem-Nghich-Thuong-Khung/624.html"
									class="list-group-item"><span class="medal">6</span>Kiếm Nghịch
									Thương Khung<span class="view pull-right">87127 Lượt xem</span></a><a
									href="http://mong.vn/truyen/Nu-Nhan-Sau-Lung-De-Quoc-Thien-Tai-Tieu-Vuong-Phi/5313.html"
									class="list-group-item"><span class="medal">7</span>Nữ Nhân Sau
									Lưng Đế Quốc Thiên Tài Tiểu Vương Phi<span
									class="view pull-right">77812 Lượt xem</span></a><a
									href="http://mong.vn/truyen/Co-vo-tong-giam-doc-xinh-dep-cua-toi/1.html"
									class="list-group-item"><span class="medal">8</span>Cô vợ tổng
									giám đốc xinh đẹp của tôi<span class="view pull-right">75851
										Lượt xem</span></a><a
									href="http://mong.vn/truyen/Dau-pha-thuong-khung/14.html"
									class="list-group-item"><span class="medal">9</span>Đấu phá
									thương khung<span class="view pull-right">65246 Lượt xem</span></a><a
									href="http://mong.vn/truyen/Y-Thu-Che-Thien/594.html"
									class="list-group-item"><span class="medal">10</span>Y Thủ Che
									Thiên<span class="view pull-right">63913 Lượt xem</span></a>
							</div>
						</div>
						<!-- End tab 1 -->
						<div class="tab-pane" id="tuan_truyen">
							<div class="list-group">
								<a href="http://mong.vn/truyen/Than-Khong-Thien-Ha/4899.html"
									class="list-group-item top_video_item">
									<p class="box-news-image">
										<img
											src="http://sv1.mong.vn/mong/upload/3clpf73euh4wwksc0s.jpg">
									</p>Thần Khống Thiên Hạ <br>
								<span class="view"> Lượt xem</span>
									<p class="chuong">Chương 2777: Ta có lẽ còn chưa xem như vô
										địch! (2)</p>
								</a><a
									href="http://mong.vn/truyen/Ngao-The-Cuu-Trong-Thien/2828.html"
									class="list-group-item">Ngạo Thế Cửu Trọng Thiên<span
									class="view pull-right">324 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Y-Tien-Thieu/5748.html"
									class="list-group-item">Y Tiên Thiểu<span
									class="view pull-right">281 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Vu-Nghich-Can-Khon/647.html"
									class="list-group-item">Vũ Nghịch Càn Khôn<span
									class="view pull-right">260 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Dau-pha-thuong-khung/14.html"
									class="list-group-item">Đấu phá thương khung<span
									class="view pull-right">239 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Dai-Chua-Te/159.html"
									class="list-group-item">Đại Chúa Tể<span
									class="view pull-right">232 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Sat-Than/164.html"
									class="list-group-item">Sát Thần<span class="view pull-right">191
										Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
									class="list-group-item">Vợ Trước Giá Trên Trời Của Tổng Giám
									Đốc<span class="view pull-right">185 Lượt xem</span>
								<div class="clearfix"></div>
								</a><a
									href="http://mong.vn/truyen/Nu-Nhan-Sau-Lung-De-Quoc-Thien-Tai-Tieu-Vuong-Phi/5313.html"
									class="list-group-item">Nữ Nhân Sau Lưng Đế Quốc Thiên Tài Tiểu
									Vương Phi<span class="view pull-right">183 Lượt xem</span>
								<div class="clearfix"></div>
								</a><a
									href="http://mong.vn/truyen/Nguoi-Phu-Nu-Cua-Tong-Giam-Doc/1048.html"
									class="list-group-item">Người Phụ Nữ Của Tổng Giám Đốc<span
									class="view pull-right">179 Lượt xem</span>
								<div class="clearfix"></div></a>
							</div>
						</div>
						<div class="tab-pane" id="thang_truyen">
							<div class="list-group">
								<a href="http://mong.vn/truyen/Than-Khong-Thien-Ha/4899.html"
									class="list-group-item top_video_item">
									<p class="box-news-image">
										<img
											src="http://sv1.mong.vn/mong/upload/3clpf73euh4wwksc0s.jpg">
									</p>Thần Khống Thiên Hạ <br>
								<span class="view"> Lượt xem</span>
									<p class="chuong">Chương 2777: Ta có lẽ còn chưa xem như vô
										địch! (2)</p>
								</a><a
									href="http://mong.vn/truyen/Cuu-Tinh-Thien-Than-Quyet/5262.html"
									class="list-group-item">Cửu Tinh Thiên Thần Quyết<span
									class="view pull-right">11919 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
									class="list-group-item">Vợ Trước Giá Trên Trời Của Tổng Giám
									Đốc<span class="view pull-right">7843 Lượt xem</span>
								<div class="clearfix"></div>
								</a><a
									href="http://mong.vn/truyen/Co-vo-tong-giam-doc-xinh-dep-cua-toi/1.html"
									class="list-group-item">Cô vợ tổng giám đốc xinh đẹp của tôi<span
									class="view pull-right">7297 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Dau-pha-thuong-khung/14.html"
									class="list-group-item">Đấu phá thương khung<span
									class="view pull-right">6552 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Trieu-Hoan-Than-Binh/5814.html"
									class="list-group-item">Triệu Hoán Thần Binh<span
									class="view pull-right">6427 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Ngao-The-Cuu-Trong-Thien/2828.html"
									class="list-group-item">Ngạo Thế Cửu Trọng Thiên<span
									class="view pull-right">6064 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Y-Thu-Che-Thien/594.html"
									class="list-group-item">Y Thủ Che Thiên<span
									class="view pull-right">5577 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Kiem-Nghich-Thuong-Khung/624.html"
									class="list-group-item">Kiếm Nghịch Thương Khung<span
									class="view pull-right">4710 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Pham-nhan-tu-tien/15.html"
									class="list-group-item">Phàm nhân tu tiên<span
									class="view pull-right">4453 Lượt xem</span>
								<div class="clearfix"></div></a>
							</div>
						</div>
						<div class="tab-pane" id="nam_truyen">
							<div class="list-group">
								<a
									href="http://mong.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc/4561.html"
									class="list-group-item top_video_item">
									<p class="box-news-image">
										<img
											src="http://sv1.mong.vn/mong/upload/2lhkq1lhfe048cgcgk.jpg">
									</p>Vợ Trước Giá Trên Trời Của Tổng Giám Đốc <br>
								<span class="view"> Lượt xem</span>
									<p class="chuong">Chương 632: Anh yêu em (chính văn Đại Kết
										Cục)</p>
								</a><a
									href="http://mong.vn/truyen/Co-vo-tong-giam-doc-xinh-dep-cua-toi/1.html"
									class="list-group-item">Cô vợ tổng giám đốc xinh đẹp của tôi<span
									class="view pull-right">1160539 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Tong-Giam-Doc-Xin-Anh-Nhe-Mot-Chut/4556.html"
									class="list-group-item">Tổng Giám Đốc, Xin Anh Nhẹ Một Chút!!!<span
									class="view pull-right">1152589 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Ngao-The-Cuu-Trong-Thien/2828.html"
									class="list-group-item">Ngạo Thế Cửu Trọng Thiên<span
									class="view pull-right">909524 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Co-Vo-Tre-Con-Cua-Lang-Thieu-Ba-Dao/4527.html"
									class="list-group-item">Cô Vợ Trẻ Con Của Lăng Thiếu Bá Đạo<span
									class="view pull-right">863156 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Vu-Nghich-Can-Khon/647.html"
									class="list-group-item">Vũ Nghịch Càn Khôn<span
									class="view pull-right">698000 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Dau-pha-thuong-khung/14.html"
									class="list-group-item">Đấu phá thương khung<span
									class="view pull-right">686425 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Cha-Toi-Roi-Me-Chay-Mau/4523.html"
									class="list-group-item">Cha Tới Rồi, Mẹ Chạy Mau<span
									class="view pull-right">599555 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Kiem-dao-doc-ton/5.html"
									class="list-group-item">Kiếm đạo độc tôn<span
									class="view pull-right">572059 Lượt xem</span>
								<div class="clearfix"></div></a><a
									href="http://mong.vn/truyen/Am-Duc/3522.html"
									class="list-group-item">Ám Dục<span class="view pull-right">546889
										Lượt xem</span>
								<div class="clearfix"></div></a>
							</div>
						</div>
					</div>
					<!-- End tab content -->

				</div>
				<!-- End of body panel -->
			</div>
			<!-- End of panel-->
			<?php echo '<script'; ?>
>
$('#tab_truyen_view a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
<?php echo '</script'; ?>
>

			<!-- START pick blog video -->
			<!--End pick blog video -->
			<!-- START RENDER video comment -->
			<!-- End RENDER video comment -->
			<!-- START RENDER video Xem Nhieu -->
			<!-- end video xem nhieu -->

		</div>
		<!-- End col -md -4 right -->

	</div>
	<!-- End of Row -->
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
	
</body>
</html><?php }} ?>
