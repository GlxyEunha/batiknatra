@extends('layouts.master')

@section('content')
<style>
    #mainImage {
        opacity: 1;
        transition: opacity 0.6s ease-in-out;
    }

    #mainImage.fade-out {
        opacity: 0;
    }

    #mainImage.fade-in {
        opacity: 1;
    }
</style>
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
            <!-- Gambar Utama -->
            <img id="mainImage" src="{{ asset('images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}" style="width: 450px; height: 550px; object-fit: cover;">

            <!-- Thumbnail -->
            <div class="d-flex mt-3">
                {{-- Tambahkan gambar utama sebagai thumbnail pertama --}}
                <img src="{{ asset('images/' . $product->image) }}" 
                    class="img-thumbnail me-2 thumb" 
                    style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;" 
                    onclick="changeMainImage('{{ asset('images/' . $product->image) }}')">

                {{-- Tambahkan image2, image3, image4 jika ada --}}
                @foreach (['image2', 'image3', 'image4', 'image5', 'image6'] as $imageField)
                    @if (!empty($product->$imageField))
                        <img src="{{ asset('images/' . $product->$imageField) }}" 
                            class="img-thumbnail me-2 thumb" 
                            style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;" 
                            onclick="changeMainImage('{{ asset('images/' . $product->$imageField) }}')">
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="col-md-6 mt-80">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <p class="text-muted">⭐ 4.5 / 5 (10 Reviews)</p>
            <h3 class="text-danger fw-bold">{{ $product->price }}</h3>

            <p><strong>Kategori:</strong> {{ $product->category }}</p>
            <p class="mb-2"><strong>Link Pembelian: </strong></p>
            <div class="cart-btn mb-3">
                <a href="https://api.whatsapp.com/send/?phone=6281914492355" class="cart-btn">By Admin</a>                            
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk mengganti gambar utama -->
<script>
    function changeMainImage(imageUrl) {
        const mainImage = document.getElementById("mainImage");

        // Tambahkan kelas fade-out
        mainImage.classList.add("fade-out");

        // Setelah transisi selesai, ubah gambar lalu fade-in
        setTimeout(() => {
            mainImage.src = imageUrl;

            mainImage.onload = () => {
                // Pastikan fade-out dihapus dulu, lalu trigger fade-in
                mainImage.classList.remove("fade-out");

                // Sedikit delay untuk efek smooth
                setTimeout(() => {
                    mainImage.classList.add("fade-in");

                    // Hapus kelas fade-in setelah selesai untuk reset
                    setTimeout(() => {
                        mainImage.classList.remove("fade-in");
                    }, 600); // Sama dengan durasi transisi CSS
                }, 50);
            };
        }, 300); // Sedikit jeda saat fade-out
    }
</script>
@endsection
