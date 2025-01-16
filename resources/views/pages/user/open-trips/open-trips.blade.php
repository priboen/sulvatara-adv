@extends('layouts.app')
@section('title', '{{ $openTrip->title }}')
@push('style')
@endpush
@section('main')
    <div class="container my-5">
        <div class="text-center">
            <h1>{{ $trip->title }}</h1>
            <p class="text-muted">{{ $trip->created_at->format('F d, Y') }}</p>
        </div>
        <div class="text-center mb-4">
            <img class="img-fluid" src="{{ asset('storage/' . $trip->thumbnail) }}" alt="{{ $trip->title }}">
        </div>
        <div class="content">
            {!! $trip->content !!}
        </div>
    </div>
@endsection
@push('scripts')
@endpush
