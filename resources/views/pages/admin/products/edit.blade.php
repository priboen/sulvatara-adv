@extends('layouts.admin-app')

@section('title', 'Produk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ubah Data Produk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Produk</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Produk</h2>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>Masukan Data Produk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="image">Gambar Produk</label>
                                        @if($product->image)
                                            <div class="mb-3">
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="150">
                                            </div>
                                        @endif
                                        <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                        <p style="color: red;">*Biarkan kosong jika tidak ingin mengganti gambar</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" value="{{ $product->name }}"
                                            class="form-control @error('name')
                                        is-invalid
                                    @enderror"
                                            name="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <input type="text" value="{{ $product->description }}"
                                            class="form-control @error('description')
                                            is-invalid
                                        @enderror"
                                            name="description">
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" value="{{ $product->price }}"
                                            class="form-control @error('price')
                                            is-invalid
                                        @enderror"
                                            name="price">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Produk</label>
                                        <select name="category_id"
                                            class="form-control select2 @error('category_id') is-invalid @enderror">
                                            <option disabled selected>Pilih Kategori</option>
                                            @foreach ($category as $categories)
                                                <option value="{{ $categories->id }}"
                                                    {{ old('category_id', $product->category_id) == $categories->id ? 'selected' : '' }}>
                                                    {{ $categories->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Merk Produk</label>
                                        <select name="brand_id" class="form-control select2 @error('brand_id') is-invalid @enderror">
                                            <option disabled selected>Pilih Merk</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                                                    {{ $brand->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Kegunaan Produk</label>
                                        <div class="selectgroup selectgroup-pills">
                                            @foreach ($usage as $usg)
                                                <label class="selectgroup-item">
                                                    <input type="checkbox"
                                                    name="usage_id[]"
                                                    value="{{ $usg->id }}"class="selectgroup-input"{{ in_array($usg->id, old('usage_id', $product->usages->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                    <span class="selectgroup-button">{{ $usg->name }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script>
        $('.timepicker').timepicker({
            showMeridian: false,
            defaultTime: false,
            minuteStep: 1,
            showSeconds: false,
            icons: {
                up: 'fas fa-chevron-up',
                down: 'fas fa-chevron-down'
            }
        });
    </script>
@endpush
