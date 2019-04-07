<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'include/head.php';?>
</head>
<style>
.error{
	color:red;
}
</style>
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
			<form id="registerForm" action="<?= $baseUrl ."register" ?>" autocomplete="off">
				<div class="form-group">
					<span class="input">
					<input class="input_field" name="last_name" type="text">
						<label class="input_label">
							<span class="input__label-content" >Họ</span>
						</label>
					</span>
					<!--Set lại label khi hiển thị lỗi validate-->
					<label id="last_name-error" class="error" for="last_name" style="display:none;"></label>
					<span class="input">
					<input class="input_field" name="first_name" type="text">
						<label class="input_label">
						<span class="input__label-content" >Tên</span>
					</label>
					</span>
					<label id="first_name-error" class="error" for="first_name" style="display:none;"></label>
					<span class="input">
					<input class="input_field" name="email" type="text">
						<label class="input_label">
						<span class="input__label-content" >Email</span>
					</label>
					</span>
					<label id="email-error" class="error" for="email" style="display:none;"></label>
					<span class="input">
					<input class="input_field" type="password" name="password" id="password1">
						<label class="input_label">
						<span class="input__label-content" >Mật khẩu</span>
					</label>
					</span>
					<label id="password1-error" class="error" for="password1" style="display:none;"></label>
					<span class="input">
					<input class="input_field" type="password" name="checkPassword" id="password2">
						<label class="input_label">
						<span class="input__label-content">Nhập lại mật khẩu</span>
					</label>
					</span>
					<label id="password2-error" class="error" for="password2" style="display:none;"></label>
					<div id="pass-info" class="clearfix"></div>
				</div>
				<button class="btn_1 rounded full-width add_top_30">Đăng ký thành viên F-LMS</button>
				<div class="text-center add_top_10">Bạn đã có tài khoản F-LMS? <strong><a href="login.html">Đăng nhập</a></strong></div>
			</form>
			<div class="copy">© 2019 F-LMS</div>
		</aside>
	</div>
	<!-- /login -->
	
    <?php include 'include/footer.php';?>
	
	<!-- CHECK VALIDATE FORM -->
	<script>
	$(function(){
		$("#registerForm").validate({
			rules: {
				last_name:{
					required: true,
				},
				first_name:{
					required: true,
				},
				email:{
					required: true,
				},
				password:{
					required: true,
				},
				checkPassword:{
					required: true,
				}
			},
			messages: {
				last_name:{
					required: "Vui lòng nhập họ",
				},
				first_name:{
					required: "Vui lòng nhập tên",
				},
				email:{
					required: "Vui lòng nhập email",
				},
				password:{
					required: "Vui lòng nhập mật khẩu",
				},
				checkPassword:{
					required: "Vui lòng nhập lại mật khẩu",
				}
			}
		});
	});
	</script>
</body>
</html>