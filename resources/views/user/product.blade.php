@extends('layouts.master')

@section('content')
<style>
    .product-card {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    }
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .product-card img {
        width: 100%;
        height: 330px;
        object-fit: cover;
        display: block;
    }
    .product-label {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 10px 0;
        text-align: center;
        background-color: rgba(255, 159, 115, 0.8); /* peach/orange */
        color: white;
        font-weight: bold;
        font-size: 16px;
        letter-spacing: 1px;
    }
</style>
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Same Way, Different Taste</p>
                    <h1>Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">Our</span> Product</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @php
                $products = [
                    ['name' => 'Batik Tulis', 'image' => 'category1.jpg'],
                    ['name' => 'Batik Cap', 'image' => 'category2.jpg'],
                    ['name' => 'Batik Cap & Tulis', 'image' => 'category3.jpg'],
                    ['name' => 'Ecoprint', 'image' => 'category4.jpg'],
                    ['name' => 'Women Ready to Wear', 'image' => 'category5.jpg'],
                    ['name' => 'Man Ready to Wear', 'image' => 'category6.jpg'],
                    ['name' => 'Syall', 'image' => 'category7.jpg'],
                    ['name' => 'Craft Batik', 'image' => 'category8.jpg'],
                ];
            @endphp

            @foreach ($products as $product)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="product-card shadow-sm">
                    <img src="{{ asset('frontend/img/category/' . $product['image']) }}" alt="{{ $product['name'] }}" class="d-block mx-auto">
                    <div class="product-label">
                        {{ strtoupper($product['name']) }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection