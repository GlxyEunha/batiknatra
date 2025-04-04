@extends('layouts.master')

@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Same Way, Different Taste</p>
                    <h1>Legality</h1>
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
                    <h3><span class="orange-text">Business Licensing</span> and Legality</h3>
                </div>
            </div>
        </div>
        
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="{{ asset('frontend/img/sertif/sertif1.jpg') }}" data-lightbox="legality-gallery" data-title="Sertifikat 1">
                    <img src="{{ asset('frontend/img/sertif/sertif1.jpg') }}" class="img-fluid rounded shadow" alt="Sertifikat 1">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ asset('frontend/img/sertif/sertif2.jpg') }}" data-lightbox="legality-gallery" data-title="Sertifikat 2">
                    <img src="{{ asset('frontend/img/sertif/sertif2.jpg') }}" class="img-fluid rounded shadow" alt="Sertifikat 2">
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ asset('frontend/img/sertif/sertif3.jpg') }}" data-lightbox="legality-gallery" data-title="Sertifikat 3">
                    <img src="{{ asset('frontend/img/sertif/sertif3.jpg') }}" class="img-fluid rounded shadow" alt="Sertifikat 3">
                </a>
            </div>
        </div>        

    </div>
</div>
@endsection