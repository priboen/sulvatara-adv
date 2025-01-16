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
                <h1>Detail {{$product->name}}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Detail {{$product->name}}</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Detail {{$product->name}}</h2>
                <p class="section-lead">
                    Informasi tentang {{$product->name}}.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Gambar Produk</label>
                                    @if($product->image)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid w-50 rounded">
                                        </div>
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Produk</label>
                                        <p>{{ $product->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Harga</label>
                                        <p>{{ 'Rp. ' . number_format($product->price, 2, ',', '.') }} /Hari</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kategori</label>
                                        <p>{{ $product->category->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Merk Produk</label>
                                        <p>{{ $product->brand->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Deskripsi</label>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Produk Unggulan</label>
                                        <p>
                                            @if ($product->is_super_product == 1)
                                                Iya, Produk ini adalah produk unggulan
                                            @else
                                                Produk ini bukan produk unggulan
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kegunaan Produk</label>
                                    <ul>
                                        @foreach ($product->usages as $usage)
                                            <li>{{ $usage->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
