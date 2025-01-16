@extends('layouts.app')
@section('title', 'Detail Produk')
@push('style')
@endpush
@section('main')
    <div class="container py-4">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8 mb-4">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img alt="Brown backpack with Eiger logo" class="img-fluid w-50"
                            src="{{ asset('storage/' . $product->image) }}" />
                    </div>
                </div>
                <div class="card border-0 mt-4">
                    <div class="card-body">
                        <h2 class="title">
                            TENTANG PRODUCT
                        </h2>
                        <p>
                            {{ $product->description }}
                        </p>
                        <div class="mt-4">
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <span class="subtitle">
                                    KATEGORI
                                </span>
                                <span>
                                    {{ $product->category->name }}
                                </span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <span class="subtitle">
                                    MERK
                                </span>
                                <span>
                                    {{ $product->brand->name }}
                                </span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <span class="subtitle">
                                    COCOK DIGUNAKAN UNTUK
                                </span>
                                <span>
                                    @foreach ($product->usages as $usage)
                                        {{ $usage->name }}{{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="title">
                            {{ strtoupper($product->name) }}
                        </h1>
                        <p class=" h5 mt-2">
                            Rp. {{ number_format($product->price, 0, ',', '.') }}/Hari
                        </p>
                        <button type="button" class="col-6 py-2 btn btn-success w-100"
                            onclick="window.location.href='https://wa.me/6282223330774?text=Saya%20tertarik%20dengan%20produk%20{{ urlencode($product->name) }}'">
                            <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
