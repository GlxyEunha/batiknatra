@extends('layouts.app')

@section('title', 'Contact')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Contact</h1>

                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Contact</div>
                </div>
            </div>
        
            <div class="section-body">
        
                <div class="card">
                    <div class="card-header">
                        <h4>Contact</h4>
                    </div>
        
                    <div class="card-body">
                        <form action="{{ route('admin.contact.index') }}" method="GET">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="q"
                                        placeholder="cari berdasarkan nama">
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
                                    <th scope="col">NAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col" style="width: 10%;text-align: center">STATUS</th>
                                    <th scope="col" style="width: 20%;text-align: center">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contacts as $no => $contact)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{ ++$no + ($contacts->currentPage()-1) * $contacts->perPage() }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td class="text-center">
                                            @if ($contact->is_read == 1)
                                                <span class="badge badge-success">Sudah Dibaca</span>
                                            @else
                                                <span class="badge badge-danger">Belum Dibaca</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-sm btn-primary">
                                                Detail
                                            </a>
                                            <a href="mailto:{{ $contact->email }}" class="btn btn-sm btn-primary">
                                                Balas
                                            </a>
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $contact->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div style="text-align: center">
                                {{$contacts->links("vendor.pagination.bootstrap-5")}}
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
                                url: "{{ route("admin.contact.index") }}/"+id,
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
