<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php';?>
	
	<!-- SPECIFIC CSS -->
	<link href="<?= $publicFolder ?>css/skins/square/grey.css" rel="stylesheet">


</head>

<body>
	
	<div id="page" class="theia-exception">
		
	<?php include 'include/menu.php';?>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Khoá học trực tuyến</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">Tất cả khóa học</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Phổ biến nhất</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Mới nhất</label>
						</div>
					</li>
					<li>
						<select name="orderby" class="selectbox">
							<option value="Danh mục">Danh mục</option>
							<option value="Danh mục 2">HTML</option>
							<option value="Danh mục 3">CSS</option>
							<option value="Danh mục 4">JAVA</option>
						</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col"> <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Danh mục</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck" checked>Tất cả <small>(945)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">HTML <small>(45)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">CSS <small>(30)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">JAVA <small>(25)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">PHP <small>(56)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">PHOTOSHOP <small>(10)</small>
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Đánh giá</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck">
											<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">
											<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> <small>(25)</small></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">
											<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(68)</small></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">
											<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(34)</small></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">
											<span class="rating"><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(10)</small></span>
										</label>
									</li>
								</ul>
							</div>
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9">
					<div class="row">
						<div class="col-md-6">
							<div class="box_grid wow">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
								
									<a href="<?= $baseUrl?>coursesdetail"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg" class="img-fluid" alt=""></a>
									<div class="price">5.400.000 VND</div>
									<div class="preview"><span>Xem chi tiết</span></div>
								</figure>
								<div class="wrapper">
									<small>Danh mục</small>
									<h3>Khóa học demo 1</h3>
									<p>Thông tin chi tiết khóa học demo 1 abc, xyz,123</p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><i class="icon_clock_alt"></i> 1h 30min</li>
									<li><i class="icon_like"></i> 890</li>
									<li><a href="<?= $baseUrl?>coursesdetail">Học ngay</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_grid -->
						<div class="col-md-6">
							<div class="box_grid wow">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
								
									<a href="<?= $baseUrl?>coursesdetail"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_2.jpg" class="img-fluid" alt=""></a>
									<div class="price">5.400.000 VND</div>
									<div class="preview"><span>Xem chi tiết</span></div>
								</figure>
								<div class="wrapper">
									<small>Danh mục</small>
									<h3>Khóa học demo 1</h3>
									<p>Thông tin chi tiết khóa học demo 1 abc, xyz,123</p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><i class="icon_clock_alt"></i> 1h 30min</li>
									<li><i class="icon_like"></i> 890</li>
									<li><a href="<?= $baseUrl?>coursesdetail">Học ngay</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_grid -->
						<div class="col-md-6">
							<div class="box_grid wow">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
								
									<a href="<?= $baseUrl?>coursesdetail"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_3.jpg" class="img-fluid" alt=""></a>
									<div class="price">400.000 VND</div>
									<div class="preview"><span>Xem chi tiết</span></div>
								</figure>
								<div class="wrapper">
									<small>Danh mục</small>
									<h3>Khóa học demo 1</h3>
									<p>Thông tin chi tiết khóa học demo 1 abc, xyz,123</p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><i class="icon_clock_alt"></i> 1h 30min</li>
									<li><i class="icon_like"></i> 890</li>
									<li><a href="<?= $baseUrl?>coursesdetail">Học ngay</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_grid -->
						<div class="col-md-6">
							<div class="box_grid wow">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
								
									<a href="<?= $baseUrl?>coursesdetail"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_4.jpg" class="img-fluid" alt=""></a>
									<div class="price">650.000.000 VND</div>
									<div class="preview"><span>Xem chi tiết</span></div>
								</figure>
								<div class="wrapper">
									<small>Danh mục</small>
									<h3>Khóa học demo 1</h3>
									<p>Thông tin chi tiết khóa học demo 1 abc, xyz,123</p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><i class="icon_clock_alt"></i> 1h 30min</li>
									<li><i class="icon_like"></i> 890</li>
									<li><a href="<?= $baseUrl?>coursesdetail">Học ngay</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_grid -->
						<div class="col-md-6">
							<div class="box_grid wow">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
								
									<a href="<?= $baseUrl?>coursesdetail"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_5.jpg" class="img-fluid" alt=""></a>
									<div class="price">564.000 VND</div>
									<div class="preview"><span>Xem chi tiết</span></div>
								</figure>
								<div class="wrapper">
									<small>Danh mục</small>
									<h3>Khóa học demo 1</h3>
									<p>Thông tin chi tiết khóa học demo 1 abc, xyz,123</p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><i class="icon_clock_alt"></i> 1h 30min</li>
									<li><i class="icon_like"></i> 890</li>
									<li><a href="<?= $baseUrl?>coursesdetail">Học ngay</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_grid -->
						<div class="col-md-6">
							<div class="box_grid wow">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
								
									<a href="<?= $baseUrl?>coursesdetail"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_6.jpg" class="img-fluid" alt=""></a>
									<div class="price">982.555 VND</div>
									<div class="preview"><span>Xem chi tiết</span></div>
								</figure>
								<div class="wrapper">
									<small>Danh mục</small>
									<h3>Khóa học demo 1</h3>
									<p>Thông tin chi tiết khóa học demo 1 abc, xyz,123</p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><i class="icon_clock_alt"></i> 1h 30min</li>
									<li><i class="icon_like"></i> 890</li>
									<li><a href="<?= $baseUrl?>coursesdetail">Học ngay</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Xem thêm</a></p>
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Bạn cần trợ giúp ? Liên hệ với chúng tôi</h4>
							<p>Cum appareat maiestatis interpretaris et, et sit.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Thanh toán và hoàn trả</h4>
							<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Chất lượng`</h4>
							<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	<?php include 'include/footer.php';?>
	<!--/footer-->
	</div>
	<!-- page -->

	<!-- COMMON SCRIPTS -->
    <?php include 'include/js-footer.php';?>
  
</body>
</html>