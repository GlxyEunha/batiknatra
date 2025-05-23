@extends('layouts.app')

@section('title', 'Product')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>

                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Produk</div>
                </div>
            </div>
        
            <div class="section-body">
        
                <div class="card">
                    <div class="card-header">
                        <h4>Produk</h4>
                    </div>
        
                    <div class="card-body">
                        <form action="{{ route('admin.product.index') }}" method="GET">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                                    </div>
                                    <input type="text" class="form-control" name="q"
                                            placeholder="cari berdasarkan nama produk">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                    <th scope="col">NAMA PRODUK</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">KATEGORI</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $no => $product)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{ ++$no + ($products->currentPage()-1) * $products->perPage() }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>Rp. {{ $product->price }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            @if ($product->status == 'publish')
                                                <label class="badge badge-success">published</label>
                                            @else
                                                <label class="badge badge-danger">draft</label>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $product->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>  
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div style="text-align: center">
                                {{$products->links("vendor.pagination.bootstrap-5")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
        <script>
            //ajax delete
            function Delete(id)
                {
                    var id = id;
                    var token = $("meta[name='csrf-token']").attr("content");
        
                    swal({
                        title: "APAKAH KAMU YAKIN ?",
                        text: "INGIN MENGHAPUS DATA INI!",
                        icon: "warning",
                        buttons: [
                            'TIDAK',
                            'YA'
                        ],
                        dangerMode: true,
                    }).then(function(isConfirm) {
                        if (isConfirm) {
        
                            //ajax delete
                            jQuery.ajax({
                                url: "{{ route("admin.product.index") }}/"+id,
                                data:     {
                                    "id": id,
                                    "_token": token
                                },
                                type: 'DELETE',
                                success: function (response) {
                                    if (response.status == "success") {
                                        swal({
                                            title: 'BERHASIL!',
                                            text: 'DATA BERHASIL DIHAPUS!',
                                            icon: 'success',
                                            timer: 1000,
                                            showConfirmButton: false,
                                            showCancelButton: false,
                                            buttons: false,
                                        }).then(function() {
                                            location.reload();
                                        });
                                    }else{
                                        swal({
                                            title: 'GAGAL!',
                                            text: 'DATA GAGAL DIHAPUS!',
                                            icon: 'error',
                                            timer: 1000,
                                            showConfirmButton: false,
                                            showCancelButton: false,
                                            buttons: false,
                                        }).then(function() {
                                            location.reload();
                                        });
                                    }
                                }
                            });
        
                        } else {
                            return true;
                        }
                    })
                }
        </script>
    <!-- Page Specific JS File -->
@endpush
