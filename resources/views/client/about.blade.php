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
  {{-- <link rel="shortcut icon" href="favicon.png"> --}}

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
					<li class="active"><a href="{{ route('route_FrontEnd_Client_Index') }}">Trang ch???</a></li>
					<li><a href="{{ route('route_FrontEnd_Client_Elements') }}">?????t l???ch</a></li>
					<li><a href="{{ route('route_FrontEnd_Client_About') }}">Gi???i thi???u</a></li>
					<li><a href="{{ route('route_FrontEnd_Client_Contact') }}">Li??n h???</a></li>
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
            <h1 class="mb-0">Gi???i thi???u</h1>
            <p class="text-white">Kh??ch s???n ???????c x??y d???ng v?? ph??t tri???n trong 15 n??m v???i phong c??ch Ch??u ??u.</p>
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
          <h2 class="section-title mb-4">Gi???i thi???u</h2>
          <p>Kh??ch s???n ???????c x??y d???ng v?? ph??t tri???n trong 15 n??m v???i phong c??ch Ch??u ??u.</p>
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
          <h2 class="section-title mb-3 text-center">Th??nh vi??n ban qu???n tr???</h2>
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
					<h2 class="section-title text-center mb-5">PH???N H???I</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/denvau.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">??en V??u</h3>
							<blockquote>
								<p>&ldquo;Kh??ch s???n hi???n ?????i v?? ?????ng c???p. Nh??n vi??n t???n t??nh, chu ????o.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/karik.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Karik</h3>
							<blockquote>
								<p>&ldquo;Kh??ng c?? g?? ph???i ch??, m???i th??? ?????u sang tr???ng v?? ?????ng c???p.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/midu.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Midu</h3>
							<blockquote>
								<p>&ldquo;Nh??n vi??n th??n thi???n, ????? ??n ngon v?? ?????p m???t.&rdquo;</p>
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
          <h2 class="mb-2 text-white">H??y li??n h??? v???i ch??ng t??i ngay ????? c?? cu???c ngh??? d?????ng t???t nh???t</h2>
          <p class="mb-4 lead text-white text-white-opacity">Lu??n mang ?????n cho kh??ch h??ng nh???ng tr???i nghi???m t???t nh???t.</p>
          <p class="mb-0"><a href="{{ route('route_FrontEnd_Client_Elements') }}" class="btn btn-outline-white text-white btn-md font-weight-bold">?????t l???ch</a></p>
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
							<p>Kh??ch s???n 5 sao mang phong c??ch Ch??u ??u ?????ng c???p qu???c t???. Lu??n mang ?????n cho kh??ch h??ng nh???ng tr???i nghi???m xa hoa, ?????ng c???p nh???t.</p>
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
								<li><a href="#">Trang ch???</a></li>
								<li><a href="{{ route('route_FrontEnd_Client_About') }}">Gi???i thi???u</a></li>
								<li><a href="{{ route('route_FrontEnd_Client_Elements') }}">?????t l???ch</a></li>
								<li><a href="{{ route('route_FrontEnd_Client_Contact') }}">Li??n h???</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Th??ng tin</h3>
							<ul class="links list-unstyled">
								<li>Blog</li>
								<li>About</li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Li??n h???</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email">huanql16012002@gmail.com</li>
								<li class="phone">0966818546</li>
								<li class="address">S??? 3 ng??ch 6/7 ng?? 7 ph??? Nguy??n X??, Minh Khai, B???c T??? Li??m, H?? N???i</li>
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
