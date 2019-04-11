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
				<a href="<?= $baseUrl?>"><img src="<?= $publicFolder?>/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <form novalidate id="formLogin" action="<?= $baseUrl ."login" ?> " method="POST">
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Đăng nhập với Facebook</a>
				</div>
				<div class="divider"><span>Hoặc</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="text" name="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>
					<label id="email-error" class="error" for="email" style="display:none;"></label>
					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Mật khẩu</span>
					</label>
					</span>
					<label id="password-error" class="error" for="password" style="display:none;"></label>
					<br>
					<small><a href="#0">Bạn quên mật khẩu?</a></small>
				</div>
				<button href="#0" class="btn_1 rounded full-width add_top_60">Đăng nhập vào F-LMS</button>
				<div class="text-center add_top_10">Bạn mới vào F-LMS? <strong><a href="<?= $baseUrl ."/dang-ky-tai-khoan" ?>">Đăng ký!</a></strong></div>
			</form>
			<div class="copy">© 2019 F-LMS</div>
		</aside>
	</div>
	<!-- /login -->
		
	<?php include 'include/js-footer.php';?>
	<!-- CHECK VALIDATE FORM -->
	<script>
	$.validator.addMethod(
            "regex",
            function(value, element, regexp) 
            {
                if (regexp.constructor != RegExp)
                    regexp = new RegExp(regexp);
                else if (regexp.global)
                    regexp.lastIndex = 0;
                return this.optional(element) || regexp.test(value);
            },
            "Please check your input."
    );
	$(function(){
		$('#formLogin').validate({
			rules:{
				email:{
					required:true,
					regex: /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/,
				},
				password:{
					required: true,
					minlength: 6,
					maxlength: 64,
				}
			},
			messages:{
				email:{
					required:"Vui lòng nhập email của bạn",
					regex:"Email nhập không đúng định dạng",
				},
				password:{
					required: "Vui lòng nhập mật khẩu của bạn",
					minlength: "Mật khẩu phải nhiều hơn 6 ký tự",
					maxlength: "Mật khẩu phải ít hơn 64 ký tự",
				}
			}
		})
	})
	</script>
</body>
</html>