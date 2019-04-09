<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php';?>
</head>

<body>
	
	<div id="page">
		
	<?php include 'include/menu.php';?>
	<!-- /header -->
	
	<main>
	<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<h2>404 <i class="icon_error-triangle_alt"></i></h2>
						<p>Xin lỗi! Trang web ban tìm kiếm không tồn tại hoặc đã đổi sang trang khác, hãy thử tìm kiếm lại.</p>
						<form>
							<div class="search_bar_error">
								<input type="text" class="form-control" placeholder="Bạn cần tìm kiếm gì?">
								<input type="submit" value="Tìm kiếm">
							</div>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /error_page -->
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