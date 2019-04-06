<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'include/head.php';?>
</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="../../Public/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <form>
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Đăng nhập với Facebook</a>
				</div>
				<div class="divider"><span>Hoặc</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="email" autocomplete="off" name="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Mật khẩu</span>
					</label>
					</span>
					<small><a href="#0">Bạn quên mật khẩu?</a></small>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_60">Đăng nhập vào F-LMS</a>
				<div class="text-center add_top_10">Bạn mới vào F-LMS? <strong><a href="register.html">Đăng ký!</a></strong></div>
			</form>
			<div class="copy">© 2019 F-LMS</div>
		</aside>
	</div>
	<!-- /login -->
		
	<?php include 'include/footer.php';?>
  
</body>
</html>