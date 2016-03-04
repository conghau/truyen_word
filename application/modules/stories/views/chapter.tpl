{* Extend our master template *} {extends file="layout/master.tpl"}
{*This block is defined in the master.php template *} {block name=title}
Cart Detail {/block} {* This block is defined in the master.php
template*} {block name=body}
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
						href="{$base_url}stories/{$story->key}/{$story->id}.html">{$story->title}</a>
				</h1>
				<h2 class="text-center tinhtrang">
					( <a href="http://mong.vn/truyen/status/truyen-hoan-thanh.html">{$story->state}</a> )
				</h2>
				<h2 class="text-center capnhat">
					( Chương Mới Nhất : <a
						href="{$base_url}stories/{$key}/chapter-{$last_chapter->id}.html"><span
						style="color: #999; font-weight: normal"> {$last_chapter->title}</span> </a> )
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
						{$story->title}<br> {$chapter->title}
					</h1>
					<span class="pull-right"><img src="public/images/zoom-out.png"
						class="zoom-out zoom-font"> &nbsp;&nbsp;<img
						src="public/images/zoom-in.png" class="zoom-in zoom-font"></span>
					<div class="clearfix"></div>
					<div class="chuong_noidung" style="font-size: 16px;">
						<div>{$chapter->title}</div>
						<div>
							{$chapter->content}
						</div>
					</div>
					<!-- End of chuong_noidung -->
					<!-- Ads -->
					<div style="text-align: center">
					</div>
					<!-- End of ads -->
					<div
						style="background-color: #fafafa; padding: 15px; text-align: center; border-radius: 5px; max-width: 600px; margin: auto">
						<strong>Chú Ý :</strong> Bạn đang đọc truyện {$story->title}. Chương : {$chapter->title} <br> <a href="" class="report_truyen"><b><i
								class="fa fa-warning"></i> Báo Lỗi Chương </b></a>
						&nbsp;&nbsp;&nbsp;&nbsp; <a href="" class="note_story"><b><i
								class="fa fa-bookmark"></i> Đánh Dấu </b></a>
						<!-- <a  class="btn btn-primary show_story_history">Lịch Sử Đọc Truyện  </a> -->

					</div>
					<h2 style="font-size: 10px; color: #999">
						<i class="fa fa-tag"></i> Từ Khóa :Đọc truyện {$story->title} , {$chapter->title}
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
{/block} {block name="javascript"}
<script>
$(document).ready(function(){


});
</script>
{/block}
