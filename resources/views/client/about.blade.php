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
  <link rel="shortcut icon" href="favicon.png">

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
					<li class="active"><a href="{{ route('route_FrontEnd_Client_Index') }}">Trang chủ</a></li>
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


  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Giới thiệu</h1>
            <p class="text-white">Khách sạn được xây dựng và phát triển trong 15 năm với phong cách Châu Âu.</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="owl-single dots-absolute owl-carousel">
            <img src="images/7.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/8.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/9.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/10.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/11.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/12.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/13.jpg" alt="" class="img-fluid rounded-10">
            <img src="images/14.jpg" alt="" class="img-fluid rounded-10">
          </div>
        </div>
        <div class="col-lg-6 pl-lg-6 ml-auto">
          <h2 class="section-title mb-4">Giới thiệu</h2>
          <p>Khách sạn được xây dựng và phát triển trong 15 năm với phong cách Châu Âu.</p>
          <ul class="list-unstyled two-col clearfix">
            @foreach ($listPhong as $item)
              <li>{{$item->ten_phong}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section mt-5">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h2 class="section-title mb-3 text-center">Thành viên ban quản trị</h2>
        </div>
      </div>

      <div class="owl-carousel owl-4-slider">
        @foreach ($listUsers as $item)
          <div class="item">
            <div class="team">
              <img src="img/{{$item->hinh_anh_nv}}" alt="Image" class="img-fluid mb-4 rounded-30">
              <div class="px-3">
                <h3 class="mb-0">{{$item->ten_nhan_vien}}</h3>
                <p>{{$item->chuc_vu}}</p>
              </div>
            </div>
          </div>
        @endforeach

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



  <div class="py-5 cta-section">
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
							<h3 class="heading">My Hotels</h3>
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

	<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
