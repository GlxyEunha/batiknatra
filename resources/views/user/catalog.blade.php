@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Same Way, Different Taste</p>
                    <h1>Catalog</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- Product Filters -->
<div class="product-filters">
    <ul>
        <li class="active">All</li>
        <li>Batik Kain</li>
        <li>Ready to Wear</li>
        <li>Craft Batik</li>
    </ul>
</div>

<!-- Product List -->
<div class="container">
    <div class="row g-4">
        @foreach ($products as $product)
            @if ($product->status == 'publish')
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <a href="{{ route('user.catalog.product', $product->slug) }}" class="text-decoration-none text-dark">
                        <div class="product-card p-3 border rounded shadow-sm position-relative h-100">
                            <!-- Label NEW -->
                            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-2">SALE</span>
                        
                            <!-- Gambar Produk dengan efek hover -->
                            <div class="img-hover-wrapper mb-3">
                                <img src="{{ $product->image }}" alt="{{ $product->slug }}" class="img-fluid product-image-hover" style="max-height: 250px; object-fit: cover;">
                            </div>
                        
                            <!-- Nama Produk -->
                            <p class="text-muted medium mb-1">{{ $product->category }}</p>
                            <h6 class="fw-bold mb-2">{{ $product->name }}</h6>

                            <!-- Harga -->
                            <p class="text-dark fw-bold">{{ $product->price }}</p>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>


<style>
    .img-hover-wrapper {
        overflow: hidden; /* supaya gambar gak keluar dari frame saat diperbesar */
        border-radius: 0.5rem;
    }

    .product-image-hover {
        transition: transform 0.3s ease-in-out;
    }

    .product-image-hover:hover {
        transform: scale(1.1); /* zoom in saat hover */
    }
</style>

@endsection
