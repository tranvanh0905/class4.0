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
			<form method="POST" id="registerForm" action="<?= $baseUrl ."register" ?>" autocomplete="off">
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
					<!--Set lại label khi hiển thị lỗi validate-->
					<label id="first_name-error" class="error" for="first_name" style="display:none;"></label>
					<span class="input">
					<input class="input_field" id="emailCheck" name="email" type="text">
						<label class="input_label">
						<span class="input__label-content" >Email</span>
					</label>
					</span>
					<label id="emailCheck-error" class="error" for="emailCheck" style="display:none;"></label>
					<span class="input">
					<input class="input_field" type="password" name="password" id="password1">
						<label class="input_label">
						<span class="input__label-content" >Mật khẩu</span>
					</label>
					</span>
					<!--Set lại label khi hiển thị lỗi validate-->
					<label id="password1-error" class="error" for="password1" style="display:none;"></label>
					<span class="input">
					<input class="input_field" type="password" name="checkPassword" id="password2">
						<label class="input_label">
						<span class="input__label-content">Nhập lại mật khẩu</span>
					</label>
					</span>
					<!--Set lại label khi hiển thị lỗi validate-->
					<label id="password2-error" class="error" for="password2" style="display:none;"></label>
					<div id="pass-info" class="clearfix"></div>
				</div>
					<input type="hidden" name="role">
					<input type="hidden" name="profile_picture">
					<input type="hidden" name="created_at">
					<input type="hidden" name="status">
				<button class="btn_1 rounded full-width add_top_30">Đăng ký thành viên F-LMS</button>
				<div class="text-center add_top_10">Bạn đã có tài khoản F-LMS? <strong><a href="login.html">Đăng nhập</a></strong></div>
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
		$("#registerForm").validate({
			rules: {
				last_name:{
					required: true,
					maxlength:64,
				},
				first_name:{
					required: true,
					maxlength:64,
				},
				email:{
					required: true,
					regex: /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/,
					remote:
					{
						url: './CheckEmail',
						type: 'post',
						data: 
						{
							email: function()
							{
								return $( "#emailCheck" ).val();
							}
						}
					}
				},
				password:{
					required: true,
					minlength: 6,
					maxlength: 64,
				},
				checkPassword:{
					required: true,
					minlength: 6,
					maxlength: 64,
					equalTo: "#password1",

				}
			},
			messages: {
				last_name:{
					required: "Vui lòng nhập họ của bạn",
					maxlength: "Quá số ký tự cho phép",
				},
				first_name:{
					required: "Vui lòng nhập tên của bạn",
					maxlength: "Quá số ký tự cho phép",
				},
				email:{
					required: "Vui lòng nhập email của bạn",
					regex:"Email nhập không đúng định dạng",
					remote:"Email đã tồn tại ",
				},
				password:{
					required: "Vui lòng nhập mật khẩu của bạn",
					minlength: "Mật khẩu phải nhiều hơn 6 ký tự",
					maxlength: "Mật khẩu phải ít hơn 64 ký tự",
				},
				checkPassword:{
					required: "Vui lòng nhập lại mật khẩu",
					minlength: "Mật khẩu phải nhiều hơn 6 ký tự",
					maxlength: "Mật khẩu phải ít hơn 64 ký tự",
					equalTo: "Mật khẩu không trùng khớp",
				}
			}
		});
	});
	</script>
</body>
</html>