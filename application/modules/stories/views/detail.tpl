{* Extend our master template *} {extends file="layout/master.tpl"}
{*This block is defined in the master.php template *} {block name=title}
Cart Detail {/block} {* This block is defined in the master.php
template*} {block name=body}
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
									<img itemprop="image" src="{$story->crawler_img_url}"
										class="img-rounded">
								</div>


								<div id="wrap-rating" class="rating"
									xmlns:v="http://rdf.data-vocabulary.org/#"
									typeof="v:Review-aggregate">
									<h3 style="font-size: 12px; line-height: 18px;"
										property="v:itemreviewed">{$story->title}</h3>
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
											<span property="v:average">{$story->rating}</span> / <span
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
								href="{$base_url}stories/{$story->key}/{$story->id}.html"><h1
									class="name" itemprop="name">{$story->title}</h1></a>
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
															href="http://mong.vn/truyen/author/{$story->author}.html"
															itemprop="author" itemscope=""
															itemtype="http://schema.org/Person"><span itemprop="name">{$story->author}</span></a></span></td>
												</tr>
												<tr>
													<td class="theloai">Thể Loại:</td>
													<td class="theloai" id="metadata-theloai"><a
														href="http://mong.vn/truyen/Ngon-Tinh.html"> <i
															class="fa fa-tags"></i> {$story->type}
													</a></td>
												</tr>
												<tr>
													<td class="tinhtrang">Tình Trạng:</td>
													<td class="tinhtrang"><span><a
															href="http://mong.vn/truyen/status/truyen-hoan-thanh.html">{$story->state}</a></span></td>
												</tr>
												<tr>
													<td class="tinhtrang" style="padding: 4px;">Nguồn</td>
													<td class="nguon"><div itemprop="publisher" itemscope=""
															itemtype="http://schema.org/Organization">
															<span itemprop="name">{$story->source}</span>
														</div></td>
												</tr>
												<tr>
													<td class="view">Lượt Xem:</td>
													<td class="view"><span class="badge"
														style="padding-left: 5px;">{$story->view}</span></td>
												</tr>
												<tr>
													<td class="view">Số Chương:</td>
													<td class="sochuong" style="padding: 1px 5px;"><span
														class="badge">{$total_chapter}</span></td>
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
															href="{$base_url}stories/{$story->key}/chapter-{$last_chapter->id}.html">Chương
																{$total_chapter}: {$last_chapter->title}</a>
													</span></td>
												</tr>
												<tr>
													<td class="stat_info2">Like Truyện :</td>
													<td class="stat_info2"><span
														style="color: #16a085; font-weight: bold">Hãy Like Google+
															và Facebook truyện này để ủng hộ {$base_url} và giúp truyện
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
											{$story->description} <br>
											<div style="font-size: 11px">
												Bạn đang <strong>đọc truyện {$story->title}</strong> trên website <a href="{$base_url}"><strong>đọc
														truyện online</strong></a>. Bạn có thể truy cập website
												bằng thiết bị di động như iphone,android,windown phone để
												đọc truyện nhanh hơn. Hiện tại chúng tôi đang cập nhật tính
												năng download truyện {$story->title} full pdf và prc. Hi vọng sẽ sớm ra mắt bạn đọc.
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
						<script type="text/javascript"
							src="public/exts/paging/js/jquery.jqpagination.min.js"></script>

						<br>
						<div class="row"
							style="background-color: #fafafa; padding: 4px; margin: 5px; border-radius: 2px">
							<div class="col-md-6">
								<span style="line-height: 28px;">Chọn nhanh: </span> <span
									class="badge"
									style="line-height: 20px; border-radius: 2px; background: #359e9d;">
									<input type="text" class="curchuong"
									style="color: #000; text-align: center; width: 35px; border: none; border-radius: 2px"
									value="0" id="curchuong">&nbsp;/&nbsp;{$total_chapter}
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
										{foreach $arr_chapters as $chapter}
										<tr>
											<td><a href="{$base_url}stories/{$story->key}/chapter-{$chapter->id}.html"
												title="{$chapter->title}"> {$chapter->title}</a></td>
										</tr>
										{/foreach}
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
					{literal}
					<script>

                </script>
					{/literal}


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
{/block} {block name="javascript"}
								<script>

</script>
<script>
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
</script>
{/block}
