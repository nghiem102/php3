<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('css/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

	<title>{{$tieude}}</title>
</head>

<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="#" class="logo m-0"><img style="width: 13%;height: 13%" src="images/logo.png" alt=""></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="#">Trang chủ</a></li>
					<li><a href="{{ route('route_FrontEnd_Client_Elements') }}">Đặt lịch</a></li>
					<li><a href="{{ route('route_FrontEnd_Client_About') }}">Giới thiệu</a></li>
					<li><a href="{{ route('route_FrontEnd_Client_Contact') }}">Liên hệ</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="intro-wrap">
						<h1 class="mb-4 mt-4"><span class="d-block"> Đạt tiêu chuẩn 5 <i class="icon-star"></i> đẳng cấp </span> Mang phong cách thiết kế: <br> <span class="typed-words"></span></h1>

						<div class="row">
							<div class="col-12">
								<form class="form">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<select name="" id="" class="form-control custom-select">
												<option value="">Modern</option>
												<option value="">Nordic</option>
												<option value="">Color Block</option>
												<option value="">Minimalism</option>
												<option value="">Mid-Century Modern</option>
												<option value="">Luxury</option>
												<option value="">Contemporary</option>
												<option value="">Rustic</option>
												<option value="">Hi-Tech</option>
												<option value="">Industrial</option>
												<option value="">Country</option>
												<option value="">Romanticism</option>
												<option value="">Organic</option>
												<option value="">Hollywood</option>
												<option value="">Funky</option>
												<option value="">Metallic</option>
												<option value="">Brutalism</option>
												<option value="">Baroque</option>
												<option value="">Neoclassical</option>
												<option value="">Classic</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="daterange">
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-2">
											<input type="text" class="form-control" placeholder="Số">
										</div>

									</div>
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" class="btn btn-primary btn-block" value="Tìm kiếm">
										</div>
										<div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">Lưu tìm kiếm</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="slides">
						@foreach ($list as $item)
							<img src="/img/{{$item->hinh_anh_phong}}" alt="Image" class="img-fluid active">
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">DỊCH VỤ</h2>
					<p>Mong muốn mang đến cho khách hàng những trải nghiệm tốt nhất.<br>Khách sạn Marvella đạt tiêu chuẩn 4-5 sao mang phong cách hoàng gia Châu Âu đẳng cấp, thời thượng.</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/img.jpg');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Phòng 5 sao</h3>
							<p class="mb-0">Điện tích: 100m2, trang thiết bị đầy đủ.<br>Hướng: mặt phố.<br>Phòng: giường đơn hoặc giường đôi.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Nhà hàng & quầy Bar</h3>
							<p class="mb-0">Nhà hàng và quầy Bar phục vụ nhu cầu ăn uống và vũ hội cho thực khách.<br>Đầu bếp 5 sao được đào tạo ở Châu Âu.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Dễ dàng liên lạc</h3>
							<p class="mb-0">Hệ thống nhân viên túc trực 24/7 thực hiện yêu cầu khách hàng mọi lúc, mọi nơi.<br>Hỗ trợ khách hàng có trải nghiệm tốt nhất.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-phone-call display-4 text-primary"></span>
							<h3>Hỗ trợ 24/7</h3>
							<p class="mb-0">Hỗ trợ và tư vấn đặt phòng miễn phí mọi lúc, mọi nơi.<br>Hotline: 0966818546</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="untree_co-section mtnew">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">PHÒNG VIP</h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22);">Classic Style</h3>
							<span class="location" style="color: white">500k</span>
						</div>
						<img src="img/20.jpg" alt="Image" class="">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Neoclassical Style</h3>
							<span class="location" style="color: white">490k</span>
						</div>
						<img src="img/19.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Baroque Style</h3>
							<span class="location" style="color: white">480k</span>
						</div>
						<img src="img/18.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Classic Style</h3>
							<span class="location" style="color: white">500k</span>
						</div>
						<img src="img/20.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Neoclassical Style</h3>
							<span class="location" style="color: white">490k</span>
						</div>
						<img src="img/19.jpg" alt="Image" class="box">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Baroque Style</h3>
							<span class="location" style="color: white">480k</span>
						</div>
						<img src="img/18.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

			</div>

		</div>
	</div>


	<div class="untree_co-section testimonial-section mtnew">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">PHẢN HỒI</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/denvau.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Đen Vâu</h3>
							<blockquote>
								<p>&ldquo;Khách sạn hiện đại và đẳng cấp. Nhân viên tận tình, chu đáo.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/karik.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Karik</h3>
							<blockquote>
								<p>&ldquo;Không có gì phải chê, mọi thứ đều sang trọng và đẳng cấp.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/midu.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Midu</h3>
							<blockquote>
								<p>&ldquo;Nhân viên thân thiện, đồ ăn ngon và đẹp mắt.&rdquo;</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section mtnew">
		<div class="container">
			<div class="row justify-content-center text-center mb-3">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">DANH SÁCH PHÒNG</h2>
					<p>Tất cả các phòng được các thiết kế bơi những nhà thiết kế giỏi nhất với nhiều phong cách và nội thất được nhập trực tiếp từ Châu Âu. Đảm bảo sự trải nghiệm tốt nhất cho mọi du khách khi đặt chân tới khách sản. </p>
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel owl-3-slider">
				@foreach ($list as $item)
					<div class="item mb-lg-0">
						<div class="media-1">
							<a href="#" class="d-block mb-3"><img src="img/{{$item->hinh_anh_phong}}" alt="Image" class="img-fluid"></a>
							<span class="d-flex align-items-center loc ml-2 mb-2">
								<span class="icon-room mr-3"></span>
								<span>Italy</span>
							</span>
							<div class="d-flex align-items-center ml-2">
								<div>
									<h3><a style="color: rgb(251, 71, 71)" href="#">{{$item->ten_phong}}<span style="color: rgb(28, 28, 90)"> - {{$item->gia_phong}}k</span></a></h3>
									<p>{{$item->mo_ta}}</p>
								</div>

							</div>
						</div>
					</div>

				@endforeach
				</div>
			</div>
		</div>
	</div>

	<div class="py-5 cta-section" style="margin-top: 100px">
		<div class="container">
		  <div class="row text-center">
			<div class="col-md-12">
			  <h2 class="mb-2 text-white">Hãy liên hệ với chúng tôi ngay để có cuộc nghỉ dưỡng tốt nhất</h2>
			  <p class="mb-4 lead text-white text-white-opacity">Luôn mang đến cho khách hàng những trải nghiệm tốt nhất.</p>
			  <p class="mb-0"><a href="{{ route('route_FrontEnd_Client_Elements') }}" class="btn btn-outline-white text-white btn-md font-weight-bold">Đặt lịch</a></p>
			</div>
		  </div>
		</div>
	  </div>

	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Marvella Hotels</h3>
							<p>Khách sạn 5 sao mang phong cách Châu Âu đẳng cấp quốc tế. Luôn mang đến cho khách hàng những trải nghiệm xa hoa, đẳng cấp nhất.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Trang</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Trang chủ</a></li>
								<li><a href="{{ route('route_FrontEnd_Client_About') }}">Giới thiệu</a></li>
								<li><a href="{{ route('route_FrontEnd_Client_Elements') }}">Đặt lịch</a></li>
								<li><a href="{{ route('route_FrontEnd_Client_Contact') }}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Thông tin</h3>
							<ul class="links list-unstyled">
								<li>Blog</li>
								<li>About</li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Liên hệ</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email">huanql16012002@gmail.com</li>
								<li class="phone">0966818546</li>
								<li class="address">Số 3 ngách 6/7 ngõ 7 phố Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ -->
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/daterangepicker.js') }}"></script>

	<script src="{{ asset('js/typed.js') }}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["Modern.","Nordic.","Minimalism.","Mid-Century Modern.","Color Block.","Luxury.","Contemporary.","Rustic.","Hi-Tech.","Industrial.","Country.","Romanticism.","Organic.","Hollywood.","Funky.","Metallic.","Brutalism.","Baroque.","Neoclassical.","Classic."
],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
