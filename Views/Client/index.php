<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php';?>
</head>

<body>
		
	<div id="page">
		
	<?php include 'include/menu.php';?>
	
	<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Bạn muốn tìm khóa học nào ?</h3>
					<p>Tăng chuyên môn của bạn trong kinh doanh, công nghệ và phát triển cá nhân</p>
					<form>
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query" placeholder="Ví dụ: HTML, CSS, JAVA,...">
								<input type="submit" class="btn_search" value="Tìm kiếm">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="features clearfix">
			<div class="container">
				<ul>
					<li><i class="pe-7s-study"></i>
						<h4>+200 Khóa học</h4><span>Khám phá nhiều chủ đề mới</span>
					</li>
					<li><i class="pe-7s-cup"></i>
						<h4>Giáo viên chuyên môn</h4><span>Tìm người hướng dẫn phù hợp với bạn</span>
					</li>
					<li><i class="pe-7s-target"></i>
						<h4>Tập trung vào mục tiêu</h4><span>Tăng chuyên môn cá nhân của bạn</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- /features -->

		<div class="container-fluid margin_120_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>KHÓA HỌC PHỔ BIẾN TRÊN F-LMS</h2>
				<p>Tất cả những khóa học được nhiều học viên học nhất tại F-LMS</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<!-- Dữ liệu tạm thời, sử dụng for để lặp -->
				<?php for($i = 0; $i < 10; $i++): ?>
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_2.jpg" class="img-fluid" alt=""></a>
							<div class="price">10000045 VND</div>
							<div class="preview"><span>Chi tiết khóa học</span></div>
						</figure>
						<div class="wrapper">
							<small>Danh mục</small>
							<h3><?= $faker->name; ?></h3>
							<p>Thông tin khóa học demo abc xyz</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Học ngay</a></li>
						</ul>
					</div>
				</div>
				<?php endfor; ?>
				<!-- Kết thúc vòng lặp -->
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<div class="container">
				<p class="btn_home_align"><a href="courses-grid.html" class="btn_1 rounded">Xem tất cả khóa học</a></p>
			</div>
			<!-- /container -->
			<hr>
		</div>
		<!-- /container -->

		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>DANH MỤC KHÓA HỌC F-LMS</h2>
				<p>Các danh mục khóa học mới nhất của</p>
			</div>
			<div class="row">
				<!-- Dữ liệu tạm thời, sử dụng for để lặp -->
				<?php for($i = 0; $i < 6; $i++): ?>
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_1.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>15 Khóa học</small>
								<h3>HTML</h3>
							</div>
						</figure>
					</a>
				</div>
				<?php endfor; ?>
				<!-- Kết thúc vòng lặp -->
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>TIN TỨC VÀ SỰ KIỆN</h2>
					<p>Các tin tức và sự kiện mới nhất của F-LMS</p>
				</div>
				<div class="row">
					<!-- Dữ liệu tạm thời, sử dụng for để lặp -->
					<?php for($i = 0; $i < 4; $i++): ?>
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_1.jpg" alt="">
								<figcaption><strong>28</strong>Th.3</figcaption>
							</figure>
							<ul>
								<li><?= $faker->name ?></li>
								<li>20.11.2017</li>
							</ul>
							<h4>Pri oportere scribentur eu</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<?php endfor; ?>
					<!-- Kết thúc vòng lặpp -->
					<!-- /box_news -->
				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">Xem tất cả tin tức</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>TẬN HƯỞNG MỘT CỘNG ĐỒNG SINH VIÊN TUYỆT VỜI</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Đọc thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	<?php include 'include/footer.php';?>
	</div>
	<!-- page -->
	
    <?php include 'include/js-footer.php';?>
    
</body>
</html>