@extends('layouts.admin-app')

@section('title', 'Edit Open Trip')

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
                <h1>Edit Data Open Trip</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('trips.index') }}">Open Trip</a></div>
                    <div class="breadcrumb-item">Edit Open Trip</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Open Trip</h2>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <!-- Formulir Edit -->
                            <form action="{{ route('trips.update', $openTrip->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>Masukan Data Open Trip</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Thumbnail -->
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="thumbnail" class="form-label">Thumbnail</label>
                                            <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                                            <p style="color: red;">*Hanya dapat berisi satu gambar</p>
                                            @if ($openTrip->thumbnail)
                                                <img src="{{ asset('storage/' . $openTrip->thumbnail) }}" alt="Thumbnail" style="max-width: 200px; margin-top: 10px;">
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Judul -->
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Postingan
                                            Open Trip</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                name="title" value="{{ old('title', $openTrip->title) }}">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Konten -->
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi
                                            Konten</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="content">{{ old('content', $openTrip->content) }}</textarea>
                                            @error('content')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            <!-- Akhir Formulir -->
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
