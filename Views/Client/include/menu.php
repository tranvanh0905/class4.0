<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="<?= $baseUrl?>"><img src="<?= $publicFolder?>/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="#0" class="search-overlay-menu-btn">Tìm kiếm</a></li>
			<li class="hidden_tablet"><a href="<?= $baseUrl?>dang-nhap-tai-khoan" class="btn_1 rounded">Đăng nhập</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li>
					<span>
						<a href="<?= $baseUrl?>">Trang chủ</a>
					</span>
				</li>
				<li>
				<span><a href="<?= $baseUrl?>courses">Khóa học</a></span>
					<ul>
						<li><a href="#">CSS</a></li>
						<li><a href="#">HTML</a></li>
						<li><a href="#">JAVA</a></li>
						<li><a href="#">PHOTOSHOP</a></li>
					</ul>
				</li>
				<li><span><a href="<?= $baseUrl?>blog">Blog</a></span></li>
				<li><span><a href="<?= $baseUrl?>about">Giới thiệu</a></span></li>
				<li><span><a href="<?= $baseUrl?>contact">Liên hệ</a></span></li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Tìm kiếm khóa học..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->