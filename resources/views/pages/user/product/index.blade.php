@extends('layouts.app')
@section('title', 'Produk')
@push('style')
@endpush
@section('main')
    <div class="product-header">
        <div class="container">
            <div class="breadcumb-product">
                <p><a href="{{ route('home') }}">Beranda</a> / Produk / {{ $category->name }}</p>
                <h1>{{ strtoupper($category->name) }} <span>({{ $products->total() }} Produk)</span></h1>
            </div>
        </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="container">
        <div class="container-fluid py-">
            <div class="row">
                <div class="col-12 d-md-flex justify-content-between align-items-center">
                    <div class="filters d-flex flex-wrap gap-2">
                        <button class="btn btn-dark d-flex align-items-center">
                            <i class="fas fa-sliders-h me-2"></i> Filter
                        </button>
                        <!-- Filter Merk -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Merk
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ route('products.byCategory', ['slug' => $category->slug]) }}">Semua
                                        Merk</a></li>
                                @foreach ($brands as $brand)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('products.byCategory', ['slug' => $category->slug, 'brand' => $brand->id]) }}">
                                            {{ $brand->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Filter Kegunaan -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Kegunaan
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ route('products.byCategory', ['slug' => $category->slug]) }}">Semua
                                        Kegunaan</a></li>
                                @foreach ($usages as $usage)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('products.byCategory', ['slug' => $category->slug, 'usage' => $usage->id]) }}">
                                            {{ $usage->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Filter Harga -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Harga
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('products.byCategory', ['slug' => $category->slug, 'sort' => 'price_asc']) }}">
                                        Terendah ke Terbesar
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('products.byCategory', ['slug' => $category->slug, 'sort' => 'price_desc']) }}">
                                        Terbesar ke Terendah
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Filter Berdasarkan -->
                    <div class="sort-by mt-3 mt-md-0">
                        <span class="me-2">Berdasarkan:</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Berdasarkan
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('products.byCategory', ['slug' => $category->slug, 'order' => 'latest']) }}">
                                        Terbaru
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('products.byCategory', ['slug' => $category->slug, 'order' => 'oldest']) }}">
                                        Terlama
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collapse" id="filterSection">
        <div class="card card-body">
            <form action="{{ route('products.byCategory', ['slug' => $category->slug]) }}" method="GET">
                <div class="mb-3">
                    <label for="categoryFilter" class="form-label">Kategori</label>
                    <select class="form-select" name="category" id="categoryFilter">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="usageFilter" class="form-label">Penggunaan</label>
                    <select class="form-select" name="usage" id="usageFilter">
                        <option value="">Semua Penggunaan</option>
                        <option value="personal" {{ request('usage') == 'personal' ? 'selected' : '' }}>Personal</option>
                        <option value="business" {{ request('usage') == 'business' ? 'selected' : '' }}>Bisnis</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Terapkan Filter</button>
            </form>
        </div>
    </div>
    <div class="horizontal-line my-4"></div>
    <div class="container">
        <div class="row gap-2 mt-3">
            @if (!empty($activeFilters))
                <div class="col-12 d-flex flex-wrap gap-2">
                    @foreach ($activeFilters as $key => $filter)
                        <div class="d-flex align-items-center bg-light text-dark px-3 py-1 rounded">
                            {{ $filter }}
                            <a href="{{ route('products.byCategory', array_merge(['slug' => $category->slug], array_diff_key(request()->query(), [$key => '']))) }}"
                                class="ms-2 text-danger">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    @endforeach
                    <a href="{{ route('products.byCategory', ['slug' => $category->slug]) }}" class="text-primary">Hapus
                        semua filter</a>
                </div>
            @endif
        </div>
    </div>
    <div class="container my-5">
        <div class="row py-3">
            @forelse ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}">
                            <div class="row btns w-100 mx-auto text-center">
                                <button type="button" class="col-6 py-2 btn btn-success"
                                    onclick="window.location.href='https://wa.me/6282223330774?text=Saya%20tertarik%20dengan%20produk%20{{ urlencode($product->name) }}'">
                                    <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                                </button>
                                <button type="button" class="col-6 py-2 btn btn-outline-primary"
                                    onclick="window.location.href='{{ route('products.show', ['slug' => $product->slug]) }}'">
                                    <i class="fas fa-info-circle"></i> Detail
                                </button>
                            </div>
                        </div>
                        <div class="product-text">
                            <h4>{{ $product->brand->name }} - {{ $product->category->name }}</h4>
                            <a href="#">{{ $product->name }}</a>
                            <p>Rp. {{ number_format($product->price, 0, ',', '.') }}/Hari</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Tidak ada produk di kategori ini.</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
@push('scripts')
@endpush
