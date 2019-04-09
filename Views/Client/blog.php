<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php';?>
    
    <!-- SPECIFIC CSS -->
    <link href="<?= $publicFolder ?>/css/blog.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<?php include 'include/menu.php';?>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>F-LMS blog</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="<?= $baseUrl?>blogpost"><img src="http://via.placeholder.com/800x533/ccc/fff/blog-1.jpg" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small>20 Nov. 2017</small>
									<h3><a href="<?= $baseUrl?>blogpost">Nec nihil menandri appellantur ut</a></h3>
									<p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
									<ul>
										<li>
											<div class="thumb"><img src="http://via.placeholder.com/80x80/ccc/fff/thumb_blog.jpg" alt=""></div> Jessica Hoops
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<!-- /article -->

					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="<?= $baseUrl?>blogpost"><img src="http://via.placeholder.com/800x533/ccc/fff/blog-2.jpg" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small>20 Nov. 2017</small>
									<h3><a href="<?= $baseUrl?>blogpost">Nec nihil menandri appellantur ut</a></h3>
									<p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
									<ul>
										<li>
											<div class="thumb"><img src="http://via.placeholder.com/80x80/ccc/fff/thumb_blog.jpg" alt=""></div> Jessica Hoops
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<!-- /article -->

					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="<?= $baseUrl?>blogpost"><img src="http://via.placeholder.com/800x533/ccc/fff/blog-3.jpg" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small>20 Nov. 2017</small>
									<h3><a href="<?= $baseUrl?>blogpost">Nec nihil menandri appellantur ut</a></h3>
									<p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
									<ul>
										<li>
											<div class="thumb"><img src="http://via.placeholder.com/80x80/ccc/fff/thumb_blog.jpg" alt=""></div> Jessica Hoops
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<!-- /article -->

					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="<?= $baseUrl?>blogpost"><img src="http://via.placeholder.com/800x533/ccc/fff/blog-4.jpg" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small>20 Nov. 2017</small>
									<h3><a href="<?= $baseUrl?>blogpost">Nec nihil menandri appellantur ut</a></h3>
									<p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
									<ul>
										<li>
											<div class="thumb"><img src="http://via.placeholder.com/80x80/ccc/fff/thumb_blog.jpg" alt=""></div> Jessica Hoops
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<!-- /article -->

					<nav aria-label="...">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Trước</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Sau</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->

				<aside class="col-lg-3">
					<div class="widget">
						<form>
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Bạn cần tìm kiếm gì...">
							</div>
							<button type="submit" id="submit" class="btn_1 rounded"> Tìm kiếm</button>
						</form>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Bài viết cũ hơn</h4>
						</div>
						<ul class="comments-list">
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/150x150/ccc/fff/blog-5.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/150x150/ccc/fff/blog-6.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/150x150/ccc/fff/blog-4.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Danh mục blog</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Tuyển sinh <span>(12)</span></a></li>
							<li><a href="#">Tin tức <span>(21)</span></a></li>
							<li><a href="#">Sự kiện <span>(44)</span></a></li>
							<li><a href="#">Thông báo <span>(31)</span></a></li>
						</ul>
					</div>
					<!-- /widget -->
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
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