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
<meta name="keywords" content="">
<meta name="descriptons" content="">

<link rel="stylesheet" href="{$fixed_base_url}css/reset.css">
<link rel="stylesheet" href="{$fixed_base_url}css/style.css">
<link rel="stylesheet" href="{$fixed_base_url}css/bootstrap.min.css">
<link rel="stylesheet" href="{$fixed_base_url}css/font-awesome.min.css">
<link rel="stylesheet" href="{$fixed_base_url}css/theme2.css">
<link rel="stylesheet" href="{$fixed_base_url}css/general.css">
<link rel="stylesheet"
	href="{$fixed_base_url}css/bootstrap-theme.min.css">
<script src="{$fixed_base_url}js/jquery-1.11.2.min.js"></script>
<script src="{$fixed_base_url}js/bootstrap.min.js"></script>
{block name=stylesheet}{/block}
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
						</div> <script type="text/javascript"></script>

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
	<section class="container">{block name=body}{/block}</section>
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
	{block name=javascript}{/block}
</body>
</html>