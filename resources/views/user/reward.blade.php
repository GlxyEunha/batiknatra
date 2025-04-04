@extends('layouts.master')

@section('content')
<style>
    .custom-grid {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 20px;
        flex-wrap: wrap;
    }

    .portrait-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .reward-wrapper {
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        overflow: hidden;
    }

    .reward-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    /* Specific dimensions */
    .portrait {
        width: 350px;
        height: 220px;
    }

    .landscape {
        width: 300px;
        height: 460px;
    }
</style>
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Same Way, Different Taste</p>
                    <h1>Reward</h1>
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
                    <h3><span class="orange-text">Our</span> Achivement</h3>
                </div>
            </div>
        </div>

        <div class="custom-grid mt-5">
            <!-- Portraits (P) -->
            <div class="portrait-column">
                <a href="{{ asset('frontend/img/reward/reward3.jpeg') }}" data-lightbox="reward-gallery" data-title="Reward 1" class="reward-wrapper portrait">
                    <img src="{{ asset('frontend/img/reward/reward3.jpeg') }}" alt="Reward 1">
                </a>
                <a href="{{ asset('frontend/img/reward/reward4.jpeg') }}" data-lightbox="reward-gallery" data-title="Reward 2" class="reward-wrapper portrait">
                    <img src="{{ asset('frontend/img/reward/reward4.jpeg') }}" alt="Reward 2">
                </a>
            </div>
        
            <!-- Landscapes (L) -->
            <a href="{{ asset('frontend/img/reward/reward1.jpeg') }}" data-lightbox="reward-gallery" data-title="Reward 3" class="reward-wrapper landscape">
                <img src="{{ asset('frontend/img/reward/reward1.jpeg') }}" alt="Reward 3">
            </a>
            <a href="{{ asset('frontend/img/reward/reward2.jpeg') }}" data-lightbox="reward-gallery" data-title="Reward 4" class="reward-wrapper landscape">
                <img src="{{ asset('frontend/img/reward/reward2.jpeg') }}" alt="Reward 4">
            </a>
        </div> 
    </div>
</div>
@endsection