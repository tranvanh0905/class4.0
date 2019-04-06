<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'include/head.php';?>
</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="<?= $publicFolder ?>/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			<form autocomplete="off">
				<div class="form-group">

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Họ</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Tên</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password1">
						<label class="input_label">
						<span class="input__label-content">Mật khẩu</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password2">
						<label class="input_label">
						<span class="input__label-content">Nhập lại mật khẩu</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_30">Đăng ký thành viên F-LMS</a>
				<div class="text-center add_top_10">Bạn đã có tài khoản F-LMS? <strong><a href="login.html">Đăng nhập</a></strong></div>
			</form>
			<div class="copy">© 2019 F-LMS</div>
		</aside>
	</div>
	<!-- /login -->
	
    <?php include 'include/footer.php';?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?= $publicFolder ?>/js/pw_strenght.js"></script>
  
</body>
</html>