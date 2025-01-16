@extends('layouts.admin-app')

@section('title', 'Promo')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Promo</h1>
                <div class="section-header-button">
                    <a href="{{ route('promos.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Promo</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Promo</h2>
                <p class="section-lead">
                    Kamu dapat mengatur seluruh Promo, seperti mengedit, menghapus dan lainnya.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Promo</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari nama Promo"
                                                name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Nama Promo</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($promos as $pd)
                                            <tr>
                                                <td>{{ $pd->name }}</td>
                                                <td>{{ $pd->image }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <a href='{{ route('promos.show', $pd->id) }}'
                                                            class="btn btn-sm btn-info btn-icon px-2">
                                                            <i class="fas fa-info"></i>
                                                            Detail
                                                        </a>
                                                        <form action="{{ route('promos.destroy', $pd->id) }}"
                                                            method="POST" class="px-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $promos->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
@endpush
