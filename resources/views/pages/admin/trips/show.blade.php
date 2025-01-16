@extends('layouts.admin-app')

@section('title', 'Detail Open Trip')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Open Trip</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('trips.index') }}">Open Trip</a></div>
                    <div class="breadcrumb-item">Detail Open Trip</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">{{ $openTrip->title }}</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Postingan</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Judul:</strong>
                            <p>{{ $openTrip->title }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Thumbnail:</strong><br>
                            @if ($openTrip->thumbnail)
                                <img src="{{ asset('storage/' . $openTrip->thumbnail) }}" alt="Thumbnail" style="max-width: 300px;">
                            @else
                                <p>Tidak ada thumbnail.</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <strong>Konten:</strong>
                            <div class="content">
                                {!! $openTrip->content !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('trips.index') }}" class="btn btn-info">Kembali</a>
                        <a href="{{ route('trips.edit', $openTrip->id) }}" class="btn btn-warning">Update</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
