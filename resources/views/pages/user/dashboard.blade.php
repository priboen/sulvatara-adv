@extends('layouts.app')
@section('title', 'Beranda')
@push('style')
    <link rel="stylesheet" href="{{ asset('library/owl_carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl_carousel/owl.theme.default.css') }}">
@endpush
@section('main')
    <div class="container my-5 margin-custom">
        @if ($promos->isNotEmpty())
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    @foreach ($promos as $index => $promo)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"
                            aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($promos as $index => $promo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $promo->image) }}" class="carousel-image d-block w-100"
                                alt="{{ $promo->name }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @endif
    </div>
    <div class="container my-5 margin-custom">
        <div class="text-center">
            <div class="title">BRAND UNGGULAN</div>
        </div>
        <div class="horizontal-line mb-4"></div>
        <div class="row justify-content-center g-3">
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/osprey.png') }}" alt="">
                    <div class="card-text">
                        <a href="">OSPREY</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/deuter.png') }}" alt="">
                    <div class="card-text">
                        <a href="">DEUTER</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/eiger.png') }}" alt="">
                    <div class="card-text">
                        <a href="">EIGER</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/naturehike.png') }}" alt="">
                    <div class="card-text">
                        <a href="">NATUREHIKE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">PRODUK UNGGULAN</div>
                    <div class="horizontal-line mb-4"></div>
                    <div class="col-12">
                        <div class="owl-carousel slider-carousel">
                            @foreach ($superProducts as $product)
                                <div class="product-card">
                                    <img class="img-fluid w-100" src="{{ asset('storage/' . $product->image) }}"
                                        alt="">
                                    <div class="product-text">
                                        <h4>{{ $product->brand->name }} - {{ $product->category->name }}</h4>
                                        <a href="">{{ $product->name }}</a>
                                        <p>Rp. {{ number_format($product->price, 0, ',', '.') }}/Hari</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">PRODUK TERBARU</div>
                    <div class="horizontal-line mb-4"></div>
                    <div class="col-12">
                        <div class="owl-carousel slider-carousel">
                            @foreach ($latestProducts as $product)
                                <div class="product-card">
                                    <img class="img-fluid w-100" src="{{ asset('storage/' . $product->image) }}"
                                        alt="">
                                    <div class="product-text">
                                        <h4>{{ $product->brand->name }} - {{ $product->category->name }}</h4>
                                        <a href="">{{ $product->name }}</a>
                                        <p>Rp. {{ number_format($product->price, 0, ',', '.') }}/Hari</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="image-card-container margin-custom">
            <div class="image-card">
                <img src="{{ asset('img/mountaineering.jpg') }}" alt="Card 1">
                <div class="image-text">
                    <a href="">
                        MOUNTAINEERING
                    </a>
                </div>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/trail.jpg') }}" alt="Card 2">
                <div class="image-text">
                    <a href="">TRAIL RUNNING</a>
                </div>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/camping.jpeg') }}" alt="Card 3">
                <div class="image-text">
                    <a href="">CAMPING</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Title and Divider -->
        <div class="text-center">
            <div class="title">OPEN TRIP</div>
        </div>
        <div class="horizontal-line mb-4"></div>

        @if ($openTrip->isNotEmpty())
            @foreach ($openTrip as $trip)
                <div class="row mb-4 align-items-start">
                    <!-- Image -->
                    <div class="col-md-6 mb-3 mb-md-0 order-md-2 text-end">
                        <img class="img-custom-size img-fluid" src="{{ asset('storage/' . $trip->thumbnail) }}"
                            alt="{{ $trip->title }}" loading="lazy">
                    </div>
                    <!-- Text -->
                    <div class="col-md-6 order-md-1">
                        <div class="text-content">
                            <div class="text-details mb-4">
                                <div class="date mb-2">{{ $trip->created_at->format('F d, Y') }}</div>
                                <div class="headline">
                                    <a href="#">{{ $trip->title }}</a>
                                </div>
                            </div>
                            <div class="description">
                                {!! Str::limit($trip->content, 100, '...') !!}
                            </div>
                            <a href="{{ route('openTrip.detail', $trip->id) }}" class="btn btn-primary">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center">Belum ada open trip tersedia.</p>
        @endif
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('library/owl_carousel/owl.carousel.js') }}"></script>
    <script>
        $('.owl-carousel.slider-carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            stagePadding: 2,
            autoplay: false,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 5
                }
            }
        });
    </script>
@endpush
