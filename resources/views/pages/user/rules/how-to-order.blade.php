@extends('layouts.app')
@section('title', 'Cara Pesan')
@push('style')
@endpush
@section('main')
    <div class="privacy-policy-header">
        <div class="breadcumb-privacy text-center">
            <p><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a> / Cara Pemesanan</p>
            <h1>CARA PEMESANAN</h1>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="syarat-sewa">
            <h1 class="title">LANGKAH-LANGKAH PEMESANAN :
            </h1>
            <ol>
                <li>
                    Untuk Pemesanan/Boking barang bisa dilakukan melalui WhatsApp dan datang ke toko secara langsung.
                </li>
                <li>
                    Demi kenyamanan bersama kami menganjurkan kepada para pelanggan yang ingin menyewa perlengkapan di
                    Sulvatara Adventure untuk membayar DP (dana pertama) terlebih dahulu. Besarnya pembayaran DP (dana
                    Pertama)
                    minimal 25% dari total dana sewa peminjaman alat.
                </li>
                <li><a href="{{ route('policy') }}">Syarat dan Ketentuan berlaku</a></li>
            </ol>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
