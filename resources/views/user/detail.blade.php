@extends('layouts.master')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Same Way, Different Taste</p>
                    <h1>Detail Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<div class="container mt-4">
    <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-6">
            <img src="{{ asset($product->image) }}" class="img-fluid" alt="{{ $product->name }}" style="width: 450px; height: 450px;">
            <div class="d-flex mt-3">
                <!-- Thumbnail -->
                <img src="{{ asset($product->image) }}" class="img-thumbnail me-2" style="width: 80px; height: 80px;">
                <!-- Tambahkan lebih banyak thumbnail jika ada -->
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="col-md-6 mt-80">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <p class="text-muted">⭐ 4.5 / 5 (10 Reviews)</p>
            <h3 class="text-danger fw-bold"> {{ $product->price }} </h3>

            <p><strong>Kategori:</strong> {{ $product->category }}</p>
            <p class="mb-2"><strong>Link Pembelian: </strong></p>
                <div class="cart-btn mb-3">
                    <a href="https://api.whatsapp.com/send/?phone=6281914492355" class="cart-btn">By Admin</a>                            
                </div>
            {{-- <p><strong>Tag:</strong> 
                @foreach($product->tags as $tag)
                    <span class="badge bg-secondary">{{ $tag->name }}</span>
                @endforeach
            </p> --}}

        </div>
    </div>
</div>
@endsection
