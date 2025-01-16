@extends('layouts.admin-app')

@section('title', 'Open Trip')

@push('style')
    <!-- Tambahkan CSS Summernote -->
    <link rel="stylesheet" href="{{ asset('library/summernote/summernote-bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('library/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('library/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Open Trip</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Open Trip</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Open Trip</h2>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{ route('trips.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4>Masukan Data Open Trip</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Thumbnail -->
                                    {{-- <div class="form-group">
                                        <div class="mb-3">
                                            <label for="thumbnail" class="form-label">Thumbnail</label>
                                            <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                                            <p style="color: red;">*Hanya dapat berisi satu gambar</p>
                                        </div>
                                    </div>
                                    <!-- Judul -->
                                    <div class="form-group">
                                        <label>Judul Postingan Open Trip</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Konten dengan Summernote -->
                                    <div class="form-group">
                                        <label for="content">Konten</label>
                                        <textarea id="content" name="content" class="form-control summernote" required></textarea>
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="thumbnail" class="form-label">Thumbnail</label>
                                            <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                                            <p style="color: red;">*Hanya dapat berisi satu gambar</p>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Postingan
                                            Open Trip</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                name="title">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi
                                            Konten</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="content"></textarea>
                                            @error('content')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/summernote/summernote-bs5.js') }}"></script>
    <script src="{{ asset('library/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('library/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
@endpush
