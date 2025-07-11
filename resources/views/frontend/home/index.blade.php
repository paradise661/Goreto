@extends('layouts.frontend.master')
@section('content')
    <section class="main-section-home">
        {{-- Home bannner first start --}}
        <section class="py-3">
            <div class="container-fluid">
                <div class="row">
                    @if ($sliders->isNotEmpty())
                        <div class="col-lg-9">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($sliders as $slide)
                                        <div class="swiper-slide">
                                            <div class="banner-first-container pb-4">
                                                <img class="img-fluid w-100"
                                                    src="{{ get_image_url($slide->image, 'home-banner-slider') }}"
                                                    alt="Banner Image" />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- <div class="swiper-pagination"></div> --}}
                            </div>
                        </div>
                    @endif
                    @if (!empty($setting['trending_products']))
                        <div class="col-lg-3">
                            <div class="trending-container-card shadow rounded p-3 bg-white">
                                <div class="trending-title">
                                    {{ $setting['trending_big_title'] ?? '' }}
                                </div>

                                @foreach (array_slice($setting['trending_products'], 0, 4) as $pd)
                                    @php
                                        $prd = getProductByID($pd);
                                    @endphp
                                    @if ($prd)
                                        <a class="text-decoration-none text-dark" href="{{ url('product/' . $prd->slug) }}">
                                            <div class="trending-item-content p-3 hover-shadow rounded">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="img-fluid"
                                                            src="{{ get_image_url($prd->image, 'home-banner-slider') }}"
                                                            alt="{{ $prd->name }}">
                                                    </div>
                                                    <div class="col-8 trending-conent">
                                                        <h6 class="line-clamp-2 mb-1">{{ $prd->name ?? '' }}</h6>
                                                        <div class="d-flex gap-2">
                                                            <p class="mb-0">Nrs {{ $prd->price ?? '' }}</p>
                                                            @if ($prd->price && $prd->mrp)
                                                                <p class="cross-price underline mb-0">Nrs
                                                                    <del>{{ $prd->mrp }}</del>
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>
        @if ($setting['categorys'])
            <section class="brand-section py-5">
                <div class="container-fluid">
                    <div class="home-title-heading text-center mb-4">
                        <h2 class="fw-bold position-relative d-inline-block" style="font-size: 2.5rem;">
                            {{ $setting['categorybigtitle'] ?? '' }}
                            <span
                                style="display: block; height: 4px; width: 80px; background: #0ab7ec; margin: 10px auto 0; border-radius: 50px;"></span>
                        </h2>
                    </div>
                    <div class="swiper branchSwiper p-4 ">
                        @if ($setting['categorys'])
                            <div class="swiper-wrapper">
                                @foreach ($setting['categorys'] as $ct)
                                    @php
                                        $cats = getCategoryByID($ct);
                                    @endphp
                                    @if ($cats)
                                        <!-- Cards (as-is) -->
                                        <div class="swiper-slide py-5">
                                            <div class="brand-card-container">
                                                <a href="{{ route('category.products', $cats->slug) }}">
                                                    {!! get_image($cats->image, '', 'home-category') !!}

                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
        @endif

        <section class="new-arrival-section">
            <div class="container-fluid">
                <div class="home-title-heading text-center mb-4">
                    <h2 class="fw-bold position-relative d-inline-block" style="font-size: 2.5rem;">
                        May Deals & New Arrivals
                        <span
                            style="display: block; height: 4px; width: 80px; background: #0ab7ec; margin: 10px auto 0; border-radius: 50px;"></span>
                    </h2>
                </div>
                <div class="swiper offerSwiper p-4">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img" src="{{ asset('frontend/assets/images/arrival1.png') }}"
                                        alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img" src="{{ asset('frontend/assets/images/arrival2.jpeg') }}"
                                        alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img" src="{{ asset('frontend/assets/images/arrival3.jpeg') }}"
                                        alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img" src="{{ asset('frontend/assets/images/arrival4.jpeg') }}"
                                        alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img" src="{{ asset('frontend/assets/images/arrival6.jpeg') }}"
                                        alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img" src="{{ asset('frontend/assets/images/arrival6.jpeg') }}"
                                        alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <!-- Repeat for other cards -->
                    </div>
                    <!-- Swiper Pagination & Navigation -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        {{-- new arrival sectio end --}}
        <!-- categories section end -->
        @if ($adv_top)
            <div class="container-fluid py-0 py-md-5">
                <section class="discount-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap">
                                    {!! get_image($adv_top->image) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endif

        <!-- product package start -->
        @if ($setting['product'])
            <div class="product-section py-5">
                <div class="container-fluid">
                    <div class="product-section">
                        <div class="home-title-heading text-center mb-4">
                            <h2 class="fw-bold position-relative d-inline-block" style="font-size: 2.5rem;">
                                {{ $setting['productbigtitle'] ?? '' }}
                                <span
                                    style="display: block; height: 4px; width: 80px; background: #0ab7ec; margin: 10px auto 0; border-radius: 50px;"></span>
                            </h2>
                        </div>

                        <!-- Swiper Wrapper -->
                        <div class="swiper packageSwiper p-4">
                            <div class="swiper-wrapper">
                                @foreach ($setting['product'] as $pd)
                                    @php
                                        $prd = getProductByID($pd);
                                    @endphp
                                    @if ($prd)
                                        <div class="swiper-slide py-5">
                                            <div class="product-card shadow p-3 position-relative">

                                                <div class="ribbon">20% Offer</div>

                                                <a href="{{ url('product/' . $prd->slug) }}"
                                                    style="text-decoration: none; color: inherit; display: block;">
                                                    <div class="product-card-img">
                                                        <img class="product-img"
                                                            src="{{ get_image_url($prd->image, 'home-banner-slider') }}"
                                                            alt="{{ $prd->name }}">
                                                    </div>
                                                    <div class="product-card-content pt-3">
                                                        <h3 class="line-clamp-3">{{ $prd->name ?? '' }}</h3>
                                                        <div class="price-container d-flex justify-content-between">
                                                            <div>
                                                                <p>Nrs {{ $prd->price ?? '' }}</p>
                                                                @if ($prd->price && $prd->mrp)
                                                                    <p class="cross-price underline">Nrs
                                                                        <del>{{ $prd->mrp }}</del>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center py-2">
                                                                <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                                    alt="Rating">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <button class="scale-button add-to-cart-btn"
                                                            data-id="{{ $prd->id }}"
                                                            data-name="{{ $prd->name }}"
                                                            data-price="{{ $prd->price }}"
                                                            data-image="{{ $prd->image }}" type="button">
                                                            <span class="scale-text">Add to Cart</span>
                                                        </button>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ✅ Toast for feedback -->
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
                <div class="toast align-items-center text-white bg-success border-0" id="cartToast" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Product added to cart!
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" type="button"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <!-- product package end -->
        <!-- Banner2 start -->
        @if ($adv_single)
            <div class="container-fluid py-0 py-md-5">
                <section class="discount-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap">
                                    {!! get_image($adv_single->image) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endif
        {{-- <div class="container-fluid py-0 py-md-5">
            <div class="row">
                <div class="banner-2">
                    <img src="{{ asset('frontend/assets/images/banner2.jpg') }}" alt="">
                </div>
            </div>
        </div> --}}
        <!-- Banner2 end -->
        {{-- <section>
            <div class="container ">
                <div class="swiper reviewSwiper swiper-two-container p-0 p-md-4 ">
                    <div class="swiper-wrapper  pb-5">
                        <div class="swiper-slide">
                            <div class="shadow ">
                                <div class="section-2-img">
                                    <img src="{{ asset('frontend/assets/images/sun1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow ">
                                <div class="section-2-img">
                                    <img src="{{ asset('frontend/assets/images/sun2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow ">
                                <div class="section-2-img">
                                    <img src="{{ asset('frontend/assets/images/sun2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow ">
                                <div class="section-2-img">
                                    <img src="{{ asset('frontend/assets/images/sun3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow ">
                                <div class="section-2-img">
                                    <img src="{{ asset('frontend/assets/images/sun5.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section> --}}
        @if (!empty($products) && $products->count())
            <section class="py-5">
                <div class="position-relative section-three">
                    <!-- Background image -->
                    <img class="w-100 bg-img" src="{{ asset('frontend/assets/images/background.jpg') }}"
                        alt="Background" style="height: 408px; object-fit: cover;">

                    <!-- Content Over Image -->
                    <div class="card-container-three w-100 h-100 d-flex align-items-end">
                        <div class="container-fluid">
                            <div class="pt-5 mt-5">
                                <div>
                                    <h3 class="text-white text-center heading-title">New Products</h3>
                                </div>

                                <div class="swiper packageSwiper p-4">
                                    <div class="swiper-wrapper">
                                        @foreach ($products as $product)
                                            <div class="swiper-slide">
                                                <div class="product-card shadow p-3 position-relative">
                                                    <div class="ribbon">20% Offer</div>

                                                    <a href="{{ url('product/' . $product->slug) }}"
                                                        style="text-decoration: none; color: inherit; display: block;">
                                                        <div class="product-card-img">
                                                            <img class="product-img"
                                                                src="{{ get_image_url($product->image, 'home-banner-slider') }}"
                                                                alt="{{ $product->name }}">
                                                        </div>
                                                        <div class="product-card-content pt-3">
                                                            <h3 class="line-clamp-3">{{ $product->name }}</h3>
                                                            <div class="price-container d-flex justify-content-between">
                                                                <div>
                                                                    <p>Nrs {{ $product->price }}</p>
                                                                    @if ($product->price && $product->mrp)
                                                                        <p class="cross-price underline">Nrs
                                                                            <del>{{ $product->mrp }}</del>
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-2">
                                                                    <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                                        alt="Rating">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div
                                                        class="cart-section justify-content-between align-items-center d-flex py-2">
                                                        <div>
                                                            <button class="scale-button add-to-cart-btn"
                                                                data-id="{{ $product->id }}"
                                                                data-name="{{ $product->name }}"
                                                                data-price="{{ $product->price }}"
                                                                data-image="{{ $product->image }}" type="button">
                                                                <span class="scale-text">Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Swiper Navigation -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Toast Feedback -->
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
                <div class="toast align-items-center text-white bg-success border-0" id="cartToast" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Product added to cart!
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" type="button"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <!-- product package start -->
        {{-- <section class="py-5 ">
            <div class="position-relative section-three">
                <!-- Background image in HTML -->
                <img class="w-100 bg-img" src="{{ asset('frontend/assets/images/background.jpg') }}" alt="Background"
                    style="height: 408px; object-fit: cover;">
                <!-- Content Over Image -->
                <div class="card-container-three w-100 h-100 d-flex align-items-end">
                    <div class="container-fluid">
                        <div class=" pt-5 mt-5">
                            <div>
                                <h3 class="text-white text-center heading-title">New Products</h3>
                            </div>
                            <div class="swiper packageSwiper p-4  ">
                                <div class="swiper-wrapper">
                                    <!-- Your product cards here (no changes needed to them) -->
                                    <!-- Example Card -->
                                    <div class="swiper-slide ">
                                        <div class="product-card shadow p-3 position-relative">
                                            <div class="ribbon">20% Offer</div>
                                            <div class="product-card-img">
                                                <img class="product-img"
                                                    src="{{ asset('frontend/assets/images/product.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="product-card-content pt-3">
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE
                                                    + B5
                                                    50 ML</h3>
                                                <div class="price-container d-flex justify-content-between">
                                                    <div>
                                                        <p>Nrs 5000</p>
                                                        <p class="cross-price underline">Nrs 8000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center py-2">
                                                        <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <a href="">
                                                            <button class="scale-button">
                                                                <span class="scale-text">Add to Cart </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>
                                            </div>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">
                                        <div class="product-card shadow p-3 position-relative">
                                            <div class="ribbon">20% Offer</div>
                                            <div class="product-card-img">
                                                <img class="product-img"
                                                    src="{{ asset('frontend/assets/images/product1.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="product-card-content pt-3">
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE
                                                    + B5
                                                    50 ML</h3>
                                                <div class="price-container d-flex justify-content-between">
                                                    <div>
                                                        <p>Nrs 5000</p>
                                                        <p class="cross-price underline">Nrs 8000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center py-2">
                                                        <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <a href="">
                                                            <button class="scale-button">
                                                                <span class="scale-text">Add to Cart </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>
                                            </div>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">
                                        <div class="product-card shadow p-3 position-relative">
                                            <div class="ribbon">20% Offer</div>
                                            <div class="product-card-img">
                                                <img class="product-img"
                                                    src="{{ asset('frontend/assets/images/product3.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="product-card-content pt-3">
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE
                                                    + B5
                                                    50 ML</h3>
                                                <div class="price-container d-flex justify-content-between">
                                                    <div>
                                                        <p>Nrs 5000</p>
                                                        <p class="cross-price underline">Nrs 8000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center py-2">
                                                        <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <a href="">
                                                            <button class="scale-button">
                                                                <span class="scale-text">Add to Cart </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>
                                            </div>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">
                                        <div class="product-card shadow p-3 position-relative">
                                            <div class="ribbon">20% Offer</div>
                                            <div class="product-card-img">
                                                <img class="product-img"
                                                    src="{{ asset('frontend/assets/images/product.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="product-card-content pt-3">
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE
                                                    + B5
                                                    50 ML</h3>
                                                <div class="price-container d-flex justify-content-between">
                                                    <div>
                                                        <p>Nrs 5000</p>
                                                        <p class="cross-price underline">Nrs 8000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center py-2">
                                                        <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <a href="">
                                                            <button class="scale-button">
                                                                <span class="scale-text">Add to Cart </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>
                                            </div>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">
                                        <div class="product-card shadow p-3 position-relative">
                                            <div class="ribbon">20% Offer</div>
                                            <div class="product-card-img">
                                                <img class="product-img"
                                                    src="{{ asset('frontend/assets/images/product1.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="product-card-content pt-3">
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE
                                                    + B5
                                                    50 ML</h3>
                                                <div class="price-container d-flex justify-content-between">
                                                    <div>
                                                        <p>Nrs 5000</p>
                                                        <p class="cross-price underline">Nrs 8000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center py-2">
                                                        <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <a href="">
                                                            <button class="scale-button">
                                                                <span class="scale-text">Add to Cart </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>
                                            </div>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">
                                        <div class="product-card shadow p-3 position-relative">
                                            <div class="ribbon">20% Offer</div>
                                            <div class="product-card-img">
                                                <img class="product-img"
                                                    src="{{ asset('frontend/assets/images/product3.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="product-card-content pt-3">
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE
                                                    + B5
                                                    50 ML</h3>
                                                <div class="price-container d-flex justify-content-between">
                                                    <div>
                                                        <p>Nrs 5000</p>
                                                        <p class="cross-price underline">Nrs 8000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center py-2">
                                                        <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="cart-section justify-content-between align-items-center d-flex py-2">
                                                    <div>
                                                        <a href="">
                                                            <button class="scale-button">
                                                                <span class="scale-text">Add to Cart </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                </div>
                                            </div>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                    </div>
                                    <!-- Repeat cards -->
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- categories section start --}}

        <!-- Banner3 start -->

        @if ($adv_bottom)
            <div class="container-fluid py-0 py-md-5">
                <section class="discount-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap">
                                    {!! get_image($adv_bottom->image) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endif
        <!-- Banner3 end -->
        @foreach ($divisions as $division)
            @if ($division->products->count() > 0)
                <section class="categories">
                    <div class="container-fluid">
                        <!-- Division Title -->
                        <div class="home-title-heading text-center pt-4 mb-4">
                            <h2 class="fw-bold position-relative d-inline-block" style="font-size: 2.5rem;">
                                {{ $division->name }}
                                <span
                                    style="display: block; height: 4px; width: 80px; background: #0ab7ec; margin: 10px auto 0; border-radius: 50px;"></span>
                            </h2>
                        </div>

                        <div class="row align-items-center">
                            <!-- Right side image -->
                            <div class="col-lg-3">
                                <div class="side-img position-relative rounded shadow overflow-hidden"
                                    style="border: 2px solid #f8d7da;">
                                    <img class="img-fluid w-100 side-main-img"
                                        src="{{ get_image_url($division->image, 'home-banner-slider') }}"
                                        alt="{{ $division->name }}">
                                    <div class="img-overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex flex-column 
                                justify-content-center align-items-center text-center text-white p-3"
                                        style="background: rgba(0,0,0,0.45); transition: background 0.3s ease;">
                                        <h4 class="title fw-bold fs-4">{!! $division->description !!}</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Left side: products -->
                            <div class="col-lg-9">
                                <div class="swiper categorieSwiper p-4 bg-white rounded shadow-sm">
                                    <div class="swiper-wrapper">
                                        @foreach ($division->products as $product)
                                            <div class="swiper-slide py-5">
                                                <div class="product-card shadow p-3 position-relative">
                                                    <div class="ribbon">20% Offer</div>

                                                    <a href="{{ url('product/' . $product->slug) }}"
                                                        style="text-decoration: none; color: inherit; display: block;">
                                                        <div class="product-card-img">
                                                            <img class="product-img"
                                                                src="{{ get_image_url($product->image, 'home-banner-slider') }}"
                                                                alt="{{ $product->name }}">
                                                        </div>
                                                        <div class="product-card-content pt-3">
                                                            <h3 class="line-clamp-3">{{ $product->name }}</h3>
                                                            <div class="price-container d-flex justify-content-between">
                                                                <div>
                                                                    <p>Nrs {{ $product->price }}</p>
                                                                    @if ($product->price && $product->mrp)
                                                                        <p class="cross-price underline">Nrs
                                                                            <del>{{ $product->mrp }}</del>
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-2">
                                                                    <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div
                                                        class="cart-section justify-content-between align-items-center d-flex py-2">
                                                        <div>
                                                            <button class="scale-button add-to-cart-btn"
                                                                data-id="{{ $product->id }}"
                                                                data-name="{{ $product->name }}"
                                                                data-price="{{ $product->price }}"
                                                                data-image="{{ $product->image }}" type="button">
                                                                <span class="scale-text">Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <i class="ri-heart-fill product-heart-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach

    </section>
@endsection
