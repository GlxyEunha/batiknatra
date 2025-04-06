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
<div class="product-filters my-4 text-center">
    <ul class="list-inline">
        <li class="list-inline-item {{ request('category') == null ? 'active' : '' }}">
            <a href="{{ route('user.catalog') }}" class="text-decoration-none" style="color: black;">All</a>
        </li>
        <li class="list-inline-item {{ request('category') == 'Batik Kain' ? 'active' : '' }}">
            <a href="{{ route('user.catalog', ['category' => 'Batik Kain']) }}" class="text-decoration-none" style="color: black;">Batik Kain</a>
        </li>
        <li class="list-inline-item {{ request('category') == 'Ready to Wear' ? 'active' : '' }}">
            <a href="{{ route('user.catalog', ['category' => 'Ready to Wear']) }}" class="text-decoration-none" style="color: black;">Ready to Wear</a>
        </li>
        <li class="list-inline-item {{ request('category') == 'Syall' ? 'active' : '' }}">
            <a href="{{ route('user.catalog', ['category' => 'Syall']) }}" class="text-decoration-none" style="color: black;">Syall Batik</a>
        </li>
        <li class="list-inline-item {{ request('category') == 'Craft Batik' ? 'active' : '' }}">
            <a href="{{ route('user.catalog', ['category' => 'Craft Batik']) }}" class="text-decoration-none" style="color: black;">Craft Batik</a>
        </li>
    </ul>
</div>

<!-- Product List -->
<div class="container">
    <div class="row g-4">
        @foreach ($products as $product)
                <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <a href="{{ route('user.catalog.product', $product->slug) }}" class="text-decoration-none text-dark">
                        <div class="product-card p-3 border rounded shadow-sm position-relative h-100">
                            <!-- Label NEW -->
                            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-2">SALE</span>
                        
                            <!-- Gambar Produk dengan efek hover -->
                            <div class="img-hover-wrapper mb-3">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->slug }}" class="img-fluid product-image-hover d-block mx-auto" style="max-height: 250px; object-fit: cover;">
                            </div>
                        
                            <!-- Nama Produk -->
                            <p class="text-muted medium mb-1">{{ $product->category }}</p>
                            <h6 class="fw-bold mb-2">{{ $product->name }}</h6>

                            <!-- Harga -->
                            <p class="text-dark fw-bold">{{ $product->price }}</p>
                        </div>
                    </a>
                </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $products->appends(request()->query())->links('pagination::bootstrap-5') }}
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
