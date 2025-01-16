@extends('layouts.admin-app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail {{ $promo->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Detail {{ $promo->name }}</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Detail {{ $promo->name }}</h2>
                <p class="section-lead">
                    Informasi tentang {{ $promo->name }}.
                </p>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Gambar Promo</label>
                                    @if ($promo->image)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $promo->image) }}" alt="{{ $promo->name }}"
                                                class="img-fluid w-50 rounded">
                                        </div>
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('promos.index') }}" class="btn btn-primary">Kembali</a>
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
