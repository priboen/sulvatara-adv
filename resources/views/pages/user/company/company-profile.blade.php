@extends('layouts.app')
@section('title', 'Tentang Kami')
@push('style')
    <link rel="stylesheet" href="{{ asset('library/owl_carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl_carousel/owl.theme.default.css') }}">
@endpush
@section('main')
    <div class="privacy-policy-header">
        <div class="breadcumb-privacy text-center">
            <p><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a> / Tentang Kami</p>
            <h1>TENTANG KAMI</h1>
        </div>
    </div>
    <div class="container margin-custom pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/toko.png') }}" alt="Logo" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1 class="subtitle">TENTANG KAMI</h1>
                <h1 class="title">LEBIH DARI SEKEDAR RENTAL OUTDOOR</h1>
                <p class="mt-4">Sulvatara Adventure adalah toko yang menyediakan perlengkapan outdoor yang lengkap dan
                    berkualitas. Kami menyediakan berbagai macam perlengkapan outdoor seperti ransel, tenda, sleeping bag,
                    jaket, sepatu, dan aksesoris lainnya. Kami juga memberikan layanan yang terbaik untuk memenuhi kebutuhan
                    perlengkapan outdoor Anda.</p>
                <p class="mt-4">Sulvatara Adventure berdiri pada tahun 2014, sebagai sebuah tempat penyedia
                    perlengkapan dan peralatan bagi gaya hidup para pegiat alam. lebih dari 5 brand unggulan disediakan
                    dengan tujuan untuk menjadi teman sekaligus pelindung
                    bagi siapapun yang ingin mengeksplorasi alam tropis, khususnya alam Indonesia. Sulvatara juga memiliki
                    tujuan untuk memberikan kenyamanan saat berpetualang dengan menyediakan berbagai produk dengan kualitas
                    terbaik.</p>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
