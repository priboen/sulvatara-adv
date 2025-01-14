@extends('layouts.app')
@section('title', 'Lokasi')
@push('style')
@endpush
@section('main')
    <div class="privacy-policy-header">
        <div class="breadcumb-privacy text-center">
            <p><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a> / Lokasi Kami</p>
            <h1>LOKASI KAMI</h1>
        </div>
    </div>
    <div class="container margin-custom pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7899789935814!2d110.31757367572193!3d-7.812043492208479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af93e9491b457%3A0x450a3a435ce77894!2sSULVATARA%20ADVENTURE%20(%20SEWA%20%2C%20LAUNDRY%20ALAT%20OUTDOOR%20)!5e0!3m2!1sid!2sid!4v1736791181113!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <h1 class="subtitle">LOKASI KAMI</h1>
                <h1 class="title">UPGRADE PENGALAMAN MENDAKI KAMU DENGAN PERALATAN TERNYAMAN</h1>
                <p class="mt-4">Sulvatara Adventure berlokasi pada Jl Ngebel, Tamantirto, Kec. Kasihan, Kabupaten Bantul,
                    Daerah Istimewa Yogyakarta 55184.</p>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
