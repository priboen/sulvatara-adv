@extends('layouts.app')
@section('Home', 'Sulvatara Adventure')
@push('style')
    <link rel="stylesheet" href="{{ asset('library/owl_carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl_carousel/owl.theme.default.css') }}">
@endpush
@section('main')
    <div class="container my-5 margin-custom">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="carousel-image d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="carousel-image d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="carousel-image d-block w-100" alt="...">
                </div>
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
    </div>
    {{-- <div class="container dechome">
        <div class="row">
            <!-- Kolom Gambar -->
            <div class="col-lg-6 mb-4">
                <img src="img\logo.svg" alt="Produk Unggulan" class="img-fluid custom-img">
            </div>
            <!-- Kolom Teks dan Tombol -->
            <div class="col-lg-12 text-box">
                <p>
                    Sulvatara Adventure berdedikasi dalam menyediakan perlengkapan camping dan mendaki
                    berkualitas tinggi. Kami memahami pentingnya kenyamanan dan keamanan dalam setiap petualangan alam,
                    sehingga hanya menawarkan produk-produk branded yang terpercaya. Dari ransel ergonomis, tenda tahan
                    cuaca, hingga perlengkapan pendukung lainnya, setiap produk dirancang untuk memenuhi kebutuhan para
                    petualang sejati. Dengan kualitas terbaik, Sulvatara Adventure memastikan pengalaman mendaki Anda tidak
                    hanya menyenangkan tetapi juga aman dan nyaman.
                </p>
                <p>
                    Kami percaya bahwa perlengkapan yang tepat adalah kunci untuk menikmati keindahan alam tanpa batas. Oleh
                    karena itu, Sulvatara Adventure selalu mengutamakan kenyamanan pelanggan dengan menghadirkan produk yang
                    inovatif dan tahan lama. Sebagai mitra perjalanan Anda, kami berkomitmen untuk menjadi pilihan utama
                    dalam memenuhi kebutuhan petualangan, baik untuk pemula maupun pendaki berpengalaman. Dengan Sulvatara
                    Adventure, Anda siap menjelajahi dunia dengan perlengkapan yang mendukung setiap langkah Anda.
                </p>
            </div>
        </div>
    </div> --}}

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
                        <h4>OSPREY</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/deuter.png') }}" alt="">
                    <div class="card-text">
                        <h4>DEUTER</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/eiger.png') }}" alt="">
                    <div class="card-text">
                        <h4>EIGER</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card-box">
                    <img class="img-fluid w-100" src="{{ asset('img/logo/naturehike.png') }}" alt="">
                    <div class="card-text">
                        <h4>NATUREHIKE</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- card area start --}}
    <div class="card-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">PRODUK UNGGULAN</div>
                    <div class="horizontal-line mb-4"></div>
                    <div class="col-12">
                        <div class="owl-carousel slider-carousel">
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- card area end --}}
    {{-- card area start --}}
    <div class="card-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">PRODUK TERBARU</div>
                    <div class="horizontal-line mb-4"></div>
                    <div class="col-12">
                        <div class="owl-carousel slider-carousel">
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Atmos 60 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Osprey Aether 70 AG</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                            <div class="product-card">
                                <img class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <div class="product-text">
                                    <h4>Deuter Fox 40</h4>
                                    <p>Rp. 120.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="image-card-container margin-custom">
        <div class="image-card">
            <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Card 1">
            <div class="image-text">MOUNTAINEERING</div>
        </div>
        <div class="image-card">
            <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Card 2">
            <div class="image-text">TRAIL RUNNING</div>
        </div>
        <div class="image-card">
            <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Card 3">
            <div class="image-text">CAMPING</div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Judul dan Divider -->
        <div class="text-center">
            <div class="title">BLOG TERBARU</div>
        </div>
        <div class="horizontal-line mb-4"></div>

        <!-- Section 1 -->
        <div class="row mb-4 align-items-start">
            <!-- Gambar -->
            <div class="col-md-6 mb-3 mb-md-0 order-md-2 text-end">
                <img class="img-custom-size img-fluid"
                    src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Section Image 1" loading="lazy">
            </div>
            <!-- Teks -->
            <div class="col-md-6 order-md-1">
                <div class="text-content">
                    <div class="text-details mb-4">
                        <div class="date mb-2">August 13, 2021</div>
                        <div class="headline">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                    </div>
                    <div class="description">
                        Redefined the user acquisition and redesigned the onboarding experience, all within 3 working
                        weeks.
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row mb-4 align-items-center">
            <!-- Gambar -->
            <div class="col-md-6 mb-3 mb-md-0 order-md-2 text-end">
                <img class="img-custom-size img-fluid"
                    src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Section Image 2" loading="lazy">
            </div>
            <!-- Teks -->
            <div class="col-md-6 order-md-1">
                <div class="text-content">
                    <div class="text-details mb-4">
                        <div class="date mb-2">August 14, 2021</div>
                        <div class="headline">5 Essential Tools Every Programmer Should Use</div>
                    </div>
                    <div class="description">
                        Explore the top tools that can enhance your programming workflow and productivity.
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row mb-4 align-items-center">
            <!-- Gambar -->
            <div class="col-md-6 mb-3 mb-md-0 order-md-2 text-end">
                <img class="img-custom-size img-fluid"
                    src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Section Image 3" loading="lazy">
            </div>
            <!-- Teks -->
            <div class="col-md-6 order-md-1">
                <div class="text-content">
                    <div class="text-details mb-4">
                        <div class="date mb-2">August 15, 2021</div>
                        <div class="headline">Understanding the Basics of Machine Learning</div>
                    </div>
                    <div class="description">
                        A comprehensive guide to getting started with machine learning and its fundamental concepts.
                    </div>
                </div>
            </div>
        </div>
        <div class="horizontal-line mb-4"></div>
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
