@extends('layouts.master')

@section('content')
<style>
	.badge {
	z-index: 10;
	position: absolute;
	}
	.product-card {
	position: relative;
	overflow: hidden;
	transition: 0.3s ease;
	}

	.btn-maroon {
    background-color: #6f2c2c;
    border: none;
	}

	.btn-maroon:hover {
		background-color: #5a2222;
	}

	.product-card:hover {
		box-shadow: 0 4px 20px rgba(0,0,0,0.1);
	}

	.category-item:hover {
    transform: translateY(-5px);
  	}

	.category-carousel .category-item img {
    	width: 100%;
    	height: 100%;
    	object-fit: cover; /* Menyesuaikan gambar tanpa distorsi */
  	}

	.category-carousel .owl-stage {
		display: flex;
		justify-content: center;
	}

	.overlay-label {
		position: absolute;
		bottom: 0;
		width: 100%;
		background-color: rgba(0, 0, 0, 0.7); /* Transparan hitam */
		color: white;
		text-align: center;
		font-weight: bold;
		padding: 10px;
		font-size: 16px;
	}

	.category-carousel .category-item {
		width: 250px; /* Ukuran tetap */
		height: 350px;
		overflow: hidden;
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0,0,0,0.1);
		background: #fff;
		position: relative;
		margin: auto;
  	}

	.btn-outline-maroon {
		border: 2px solid #800000;
		color: #800000;
		transition: 0.3s ease;
	}

	.btn-outline-maroon:hover {
		background-color: #800000;
		color: white;
	}
</style>
    <!-- hero area -->
	<div class="hero-area" style="background-image: url('frontend/img/bg.jpg'); background-size: cover; background-position: center; padding: 100px 0; text-align: center;">>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Same Way, Different Taste</p>
							<h1>Batik Natra</h1>
							<div class="hero-btns">
								<a href="{{ route('user.catalog') }}" class="boxed-btn">Product Collection</a>
								<a href="{{ route('user.contact') }}" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fa-solid fa-arrow-trend-up" style="color: #f28123;"></i>
						</div>
						<div class="content">
							<h3>Update Design</h3>
							<p>Renew design in every production</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>catch admin for your custom!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fa-solid fa-store" style="color: #f28123;"></i>
						</div>
						<div class="content">
							<h3>Support UMKM</h3>
							<p>Shop now for better UMKM!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text"></span> Category</h3>
					</div>
				</div>
			</div>

			<div class="owl-carousel category-carousel">
				@foreach(['Batik Tulis', 'Batik Cap', 'Batik Cap & Tulis', 'Ecoprint', 'Women Ready to Wear', 'Man Ready to Wear', 'Syall', 'Craft Batik'] as $index => $category)
				  <div class="category-item">
					<img src="{{ asset('frontend/img/category/category' . ($index + 1) . '.jpg') }}" alt="{{ $category }}">
					<div class="overlay-label">{{ $category }}</div>
				  </div>
				@endforeach
			  </div>		  

		</div>
	</div>

	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Hot</span> Product</h3>
					</div>
				</div>
			</div>

			<div class="owl-carousel owl-theme">
				@foreach ($products as $product)
					@if ($product->status == 'publish')
					<div class="product-card p-3 border rounded shadow-sm position-relative">
						<!-- Label NEW -->
						<span class="badge bg-danger text-white position-absolute top-0 start-0 m-2">NEW</span>
				  
						<!-- Gambar Produk -->
						<img src="{{ $product->image }}" alt="{{ $product->slug }}" class="img-fluid mb-3" style="max-height: 250px; object-fit: cover;">
				  
						<!-- Nama Produk -->
						<p class="text-muted small mb-1">EXCLUSIVE COLLECTION, KEMEJA SLIMFIT, MEN</p>
						<h6 class="fw-bold mb-2">Kemeja Slimfit Batik Lengan Panjang</h6>
				  

						<!-- Harga -->
						<p class="text-dark fw-bold">IDR 1.093.000</p>

						<a href="{{ route('user.catalog.product', $product->slug) }}" class="btn btn-maroon text-white mt-auto w-100 d-flex align-items-center justify-content-center">
						  <i class="bi bi-cart-fill me-2"></i> VIEW PRODUCT
						</a>
					  </div>

					@endif
				@endforeach
			</div>
			<br>
			<div class="text-center mt-4">
				<a href="" class="btn btn-outline-maroon px-4 py-2">
					View More Products
				</a>
			</div>
		</div>
	</div>

	<!-- product section -->
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	{{-- <div class="price-box">
                        	<div class="inner-price">
                            </div>
                        </div> --}}
                    	<img src="frontend/img/batiknatra3.jpg" alt="" height="480px" width="480px">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3>Lestarikan Budaya!</h3>
                    <div class="text">Mulai langkah pertamamu dalam mendukung UMKM lokal terbaik!
						Indonesia memiliki kekayaan luar biasa, termasuk produk-produk lokal berkualitas tinggi yang dihasilkan oleh UMKM . Produk-produk ini tak kalah saing dengan produk impor, lho! Keputusan ada ditangan mu, Dengan membeli produk lokal, kita menghargai kerja keras dan kreativitas mereka.</div>
                    <p>Mari bersama-sama kita cintai produk dalam negeri dan dukung UMKM lokal!
						Bersama, kita bisa membangun negeri yang lebih kuat dan sejahtera!
						#CintaProdukDalamNegeri #DukungUMKMLokal #BanggaBuatanIndonesia</p>
                	<a href="{{ route('user.catalog') }}" class="cart-btn mt-3">Lihat Katalog</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				@foreach ($abouts as $about)
					<div class="col-lg-6 col-md-12">
						<div class="abt-img">
							<img src="{{ $about->image }}" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="abt-text">
							<h2>We are  <span class="orange-text">{{ $about->title }}</span></h2>
							<p>
								{!! $about->description !!}
							</p>
							<a href="{{ route('user.about') }}" class="boxed-btn mt-4">Selengkapnya</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Tentukan Desainmu!!</h3>
					<p>Kantor mu butuh seragam batik ?
						Pengen Couple Tenun dengan pasangan ?
						Pengen punya tenun kembar 1 tongkrongan ? <br>Tenun Mulya Siap menerima pesanan custom mu, tunggu apa lagi cepat hubungi admin untuk lebih lanjut!
						</p>
					<a href="https://api.whatsapp.com/send/?phone=628112671949" class="cart-btn btn-lg">Admin</a>
				</div>
				<div class="col-md-6">
					<img src="frontend/img/batiknatra6.jpg" alt="Image Description" height="400px" width="480px" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- end shop banner -->
    
	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">High</span> Light</h3>
						<p>Tidak hanya sebagai warisan budaya, Tenun Ikat juga semakin mendunia dengan adanya kolaborasi dengan desaigner ternama!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3>Melestarikan Batik Demak Bersama Gallery Batik Natra</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>  September, 2022</span>
							</p>
							<p class="excerpt"><br>Ikut Berpartisipasi dalam Dhoho Fashion Street Pada Desember 2019 Bertempat di Hutan Kota Joyoboyo dengan tema 
								“Pride of Jaya Baya”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3>Mantan Marketing Obat Farmasi Banting Stir Menjadi Pengusaha Batik</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>  Oktober, 2020</span>
							</p>
							<p class="excerpt">The latest collection of Ammuzaki Fahim Collaboration with Tenun Mulya  for East Java Fashion Harmony  2023 at Candra Wilwatikta Park, Pasuruan.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Kisah Perajin Batik Tulis Bertahan di Tengah Pandemi</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> Maret, 2021</span>
							</p>
							<p class="excerpt">The latest collection of Ivan Gunawan Collaboration with Tenun Mulyafor East Java Fashion Harmony 2023 at Candra Wilwatikta Park, Pasuruan.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
@endsection