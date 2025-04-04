@extends('layouts.master')

@section('content')

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

<div class="container mx-auto p-4">
	<!-- Filters -->
	<div class="flex justify-between items-center mb-4">
	 <div class="flex space-x-2">
	  <select class="border border-gray-300 rounded p-2">
	   <option>
		Select Price
	   </option>
	  </select>
	  <select class="border border-gray-300 rounded p-2">
	   <option>
		Urutkan Menurut
	   </option>
	  </select>
	 </div>
	 <div class="flex space-x-2">
	  <button class="p-2 border border-gray-300 rounded">
	   <i class="fas fa-th">
	   </i>
	  </button>
	  <button class="p-2 border border-gray-300 rounded">
	   <i class="fas fa-th-list">
	   </i>
	  </button>
	 </div>
	</div>
	<!-- Products Grid -->
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Dress Batik Lengan Pendek Motif Keris Taru" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/GxEChhI5AUUejp3jBJy-fX_9--OuDcZ_scXepBuMr-E.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
	   NEW
	  </span>
	  <h2 class="text-lg font-semibold mt-2">
	   Dress Batik Lengan Pendek Motif Keris Taru
	  </h2>
	  <p class="text-gray-500">
	   Rp859.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Bahan Potongan Motif Peksi Surgawi" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/fCbvyi0eSqkEyw9CccdP_gNauVhB81C5Pa7kphXkC2E.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <h2 class="text-lg font-semibold mt-2">
	   Bahan Potongan Motif Peksi Surgawi
	  </h2>
	  <p class="text-gray-500">
	   Rp330.000 - Rp413.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Bahan Potongan Motif Keris Ron Rahayu" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/2ugCvB7MgXVKycePiBRt1T1w0QrxrpzvckY5WnB81oE.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
	   NEW
	  </span>
	  <h2 class="text-lg font-semibold mt-2">
	   Bahan Potongan Motif Keris Ron Rahayu
	  </h2>
	  <p class="text-gray-500">
	   Rp358.000 - Rp448.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Dress Batik Lengan Pendek Motif Keris Puspa" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/G-bu4MCWdMTxZjfh2dy-KaR7V5mpUiyHbfY8aGks2SY.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
	   NEW
	  </span>
	  <h2 class="text-lg font-semibold mt-2">
	   Dress Batik Lengan Pendek Motif Keris Puspa
	  </h2>
	  <p class="text-gray-500">
	   Rp769.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Blouse Tunik Batik Lengan Panjang Motif Keris" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/8Gw2KjL31VcqmZcgAn0YOJxU1p5aF3UdI7rktheC3pQ.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <h2 class="text-lg font-semibold mt-2">
	   Blouse Tunik Batik Lengan Panjang Motif Keris
	  </h2>
	  <p class="text-gray-500">
	   Rp621.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Dress Batik Lengan Pendek Motif Keris" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/MFc00PB0KmiC9q0i2jltTJcICn0QFJsGazaEFNWouZE.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <h2 class="text-lg font-semibold mt-2">
	   Dress Batik Lengan Pendek Motif Keris
	  </h2>
	  <p class="text-gray-500">
	   Rp769.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Dress Batik Lengan Pendek Motif Keris" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/MFc00PB0KmiC9q0i2jltTJcICn0QFJsGazaEFNWouZE.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <h2 class="text-lg font-semibold mt-2">
	   Dress Batik Lengan Pendek Motif Keris
	  </h2>
	  <p class="text-gray-500">
	   Rp769.000
	  </p>
	 </div>
	 <!-- Product Item -->
	 <div class="bg-white p-4 rounded shadow">
	  <img alt="Dress Batik Lengan Pendek Motif Keris" class="w-full h-64 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/MFc00PB0KmiC9q0i2jltTJcICn0QFJsGazaEFNWouZE.jpg" width="300"/>
	  <div class="flex items-center mb-2">
	   <img alt="Brand Logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/VgfJNtvpTwQprdN1GECyD_TwIxpIeO2YM7489C6jOyA.jpg" width="30"/>
	   <span class="text-sm font-semibold">
		Batik Keris
	   </span>
	  </div>
	  <h2 class="text-lg font-semibold mt-2">
	   Dress Batik Lengan Pendek Motif Keris
	  </h2>
	  <p class="text-gray-500">
	   Rp769.000
	  </p>
	 </div>
	</div>
   </div>
@endsection
<script src="https://cdn.tailwindcss.com">