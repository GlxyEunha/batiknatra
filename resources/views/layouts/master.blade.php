<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Batik Natra</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
	<!-- Lightbox2 CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
	<!-- AOS CSS & JS -->
	<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>




	@stack('style')

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{ route('user.index') }}" >
								<img src="{{ asset('logo-batik.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="{{ $type_menu === 'home' ? 'current-list-item' : '' }}"><a href="{{ route('user.index') }}">Home</a></li>
								<li class="{{ $type_menu === 'about' ? 'current-list-item' : '' }}"><a href="{{ route('user.about') }}">About</a></li>
								<li class="{{ $type_menu === 'catalog' ? 'current-list-item' : '' }}"><a href="{{ route('user.catalog') }}">Catalog</a></li>
								<li class="{{ $type_menu === 'product' ? 'current-list-item' : '' }}"><a href="{{ route('user.product') }}">Product</a></li>
								<li class="{{ $type_menu === 'reward' ? 'current-list-item' : '' }}"><a href="{{ route('user.reward') }}">Reward</a></li>
								<li class="{{ $type_menu === 'rating' ? 'current-list-item' : '' }}"><a href="{{ route('user.rating') }}">Activity</a></li>
								<li class="{{ $type_menu === 'legality' ? 'current-list-item' : '' }}"><a href="{{ route('user.legality') }}">Legality</a></li>
								<li></li>
								{{-- <li>
									<div class="header-icons">
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
										@auth
											@if(auth('web')->user()->role == 'admin')
												<a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
												<a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
											@else
												<a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
											@endif
											@else
												<a href="{{ route('auth.signin') }}">Join us</a>
												<a href="{{ route('auth.signin') }}">Sign in</a>
										@endauth
									</div>
								</li> --}}
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

    <!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

    <!-- main content area -->
    @yield('content')
    <!-- end main content area -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About Batik Natra</h2>
						<p>Tenun Mulya hadir meramaikan industri tenun di tanah air. Dengan niat mulia melestarikan produk tradisional khas Kota Kediri. Kamu bisa menemukan banyak ragam corak tenun ikat unik dan cantik buatan Tenun Mulya, lho.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Address</h2>
						<ul>
							<li>Jasmine Park J2 no 11 RT 03 RW 34 Plamongan Indah, Batursari, Mranggen, Demak, Jawa Tengah </li>
							<li>natrabatik@gmail.com</li>
							<li>+62 8191 4492 355</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="{{ route('user.index') }}">Home</a></li>
							<li><a href="{{ route('user.about') }}">About</a></li>
							<li><a href="{{ route('user.catalog') }}">Catalog</a></li>
							<li><a href="{{ route('user.contact') }}">Product</a></li>
							<li><a href="{{ route('user.rating') }}">Reward</a></li>
							<li><a href="{{ route('user.rating') }}">Activity</a></li>
							<li><a href="{{ route('user.rating') }}">Legality</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Join us</h2>
						<p>Join to our website to get the latest updates.</p>
						<form action="{{ route('auth.signin') }}">
							<button type="submit" style="width: 100%">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2025 by Batik Natra,  All Rights Reserved.
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/yustika.mersifarma" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.tiktok.com/@batiknatra?_t=ZS-8uxjPj4mkMS&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a></li>
							<li><a href="https://www.instagram.com/natrabatik.id?igsh=bWJnY3RmcndrcXNr" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	@stack('scripts')
	
	<!-- jquery -->
	<script src="{{ asset('frontend/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('frontend/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('frontend/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('frontend/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('frontend/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Lightbox2 JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
	{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
	<script>
		$(document).ready(function(){
		  $(".owl-carousel").owlCarousel({
			loop: true,
			margin: 20,
			nav: true,
			dots: true,
			responsive: {
			  0: {
				items: 1
			  },
			  576: {
				items: 2
			  },
			  768: {
				items: 3
			  },
			  992: {
				items: 4
			  },
			}
		  });
		});
	  </script>
	  <script>
		$(document).ready(function(){
		  $(".category-carousel").owlCarousel({
			items: 4,
			margin: 20,
			nav: true,
			dots: false,
			autoplay: true,
			autoplayTimeout: 3000,
			responsive: {
			  0: { items: 1 },
			  576: { items: 2 },
			  768: { items: 3 },
			  992: { items: 4 }
			}
		  });
		});
	  </script>			


</body>
</html>