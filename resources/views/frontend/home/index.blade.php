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
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-3">
                        <div class="trending-container-card shadow rounded p-3 bg-white">
                            <div class="trending-title">
                                Trending Products
                            </div>
                            <div class="trending-item-content  p-3">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('frontend/assets/images/product.jpeg') }}" alt="">
                                    </div>
                                    <div class="col-8 trending-conent">
                                        <h6 class="line-clamp-2">Lorem ipsum dolor, sit amet consectetur adipisicing.
                                        </h6>
                                        <div class="d-flex gap-2 ">
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-item-content  p-3">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('frontend/assets/images/product1.jpeg') }}" alt="">
                                    </div>
                                    <div class="col-8 trending-conent ">
                                        <h6 class="line-clamp-2">Lorem ipsum dolor, sit amet consectetur adipisicing.
                                        </h6>
                                        <div class="d-flex gap-2 ">
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-item-content  p-3">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('frontend/assets/images/product3.jpeg') }}" alt="">
                                    </div>
                                    <div class="col-8 trending-conent ">
                                        <h6 class="line-clamp-2">Lorem ipsum dolor, sit amet consectetur adipisicing.
                                        </h6>
                                        <div class="d-flex gap-2 ">
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-item-content  p-3">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('frontend/assets/images/product1.jpeg') }}" alt="">
                                    </div>
                                    <div class="col-8 trending-conent ">
                                        <h6 class="line-clamp-2">Lorem ipsum dolor, sit amet consectetur adipisicing.
                                        </h6>
                                        <div class="d-flex gap-2 ">
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Home bannner first end --}}
        <!-- Banner2 start -->
        <div class="container-fluid py-0 py-md-5">
            <div class="row">
                <div class="banner-2">
                    <img src="{{ asset('frontend/assets/images/banner1.jpeg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Banner2 end -->
        <!-- categories section start -->
        {{-- <div class="category-section py-4">
            <div class="container-fluid">
                <div class="row d-flex flex-wrap">
                    <div class="col-3 col-md-2 custom-col py-3">
                        <div class="category-wrapper text-center">
                            <img src="{{ asset('frontend/assets/images/cate1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-2 custom-col py-3">
                        <div class="category-wrapper text-center">
                            <img src="{{ asset('frontend/assets/images/cate2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-2 custom-col py-3">
                        <div class="category-wrapper text-center">
                            <img src="{{ asset('frontend/assets/images/cate3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-2 custom-col py-3">
                        <div class="category-wrapper text-center">
                            <img src="{{ asset('frontend/assets/images/cate2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-2 custom-col py-3">
                        <div class="category-wrapper text-center">
                            <img src="{{ asset('frontend/assets/images/cate4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-2 custom-col py-3">
                        <div class="category-wrapper text-center">
                            <img src="{{ asset('frontend/assets/images/cate4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- new arrival sectio start --}}
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
                                    <img class="arrival-card-img"
                                        src="{{ asset('frontend/assets/images/arrival6.jpeg') }}" alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img"
                                        src="{{ asset('frontend/assets/images/arrival6.jpeg') }}" alt="">
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
        <!-- product package start -->
        <div class="product-section py-5">
            <div class="container-fluid">
                <div class="product-section">
                    <div class="home-title-heading text-center mb-4">
                        <h2 class="fw-bold position-relative d-inline-block" style="font-size: 2.5rem;">
                            Featured Brand Of Week
                            <span
                                style="display: block; height: 4px; width: 80px; background: #0ab7ec; margin: 10px auto 0; border-radius: 50px;"></span>
                        </h2>
                    </div>
                    <!-- for mobile view -->
                    <div class="">
                        <div class="swiper packageSwiper p-4">
                            <div class="swiper-wrapper">
                                <!-- Card 1 -->
                                <div class="swiper-slide py-5">
                                    <div class="product-card shadow p-3 position-relative">
                                        <div class="ribbon">20% Offer</div>
                                        <div class="product-card-img">
                                            <img class="product-img"
                                                src="{{ asset('frontend/assets/images/product.jpeg') }}" alt="">
                                        </div>
                                        <div class="product-card-content pt-3">

                                            <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50
                                                ML
                                                Beauty Of Joseon Relief Sun Aqua-fresh: Rice + B5 - 50ml</h3>
                                            <div class="price-container d-flex justify-content-between">
                                                <div>
                                                    <p>Nrs 5000</p>
                                                    <p class="cross-price underline"> Nrs 8000</p>
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
                                                        </button></a>
                                                </div>
                                                <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                            </div>
                                        </div>
                                        <a class=" stretched-link" href=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide py-5">
                                    <div class="product-card shadow p-3 position-relative">
                                        <div class="ribbon">20% Offer</div>
                                        <div class="product-card-img">
                                            <img class="product-img"
                                                src="{{ asset('frontend/assets/images/product1.jpeg') }}" alt="">
                                        </div>
                                        <div class="product-card-content pt-3">
                                            <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50
                                                ML
                                                Beauty Of Joseon Relief Sun Aqua-fresh: Rice + B5 - 50ml</h3>
                                            <div class="price-container d-flex justify-content-between">
                                                <div>
                                                    <p>Nrs 5000</p>
                                                    <p class="cross-price underline"> Nrs 8000</p>
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
                                                        </button></a>
                                                </div>
                                                <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                            </div>
                                        </div>
                                        <a class=" stretched-link" href=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide py-5">
                                    <div class="product-card shadow p-3 position-relative">
                                        <div class="ribbon">20% Offer</div>
                                        <div class="product-card-img">
                                            <img class="product-img"
                                                src="{{ asset('frontend/assets/images/product1.jpeg') }}" alt="">
                                        </div>
                                        <div class="product-card-content pt-3">
                                            <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50
                                                ML
                                                Beauty Of Joseon Relief Sun Aqua-fresh: Rice + B5 - 50ml</h3>
                                            <div class="price-container d-flex justify-content-between">
                                                <div>
                                                    <p>Nrs 5000</p>
                                                    <p class="cross-price underline"> Nrs 8000</p>
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
                                                        </button></a>
                                                </div>
                                                <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                            </div>
                                        </div>
                                        <a class=" stretched-link" href=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide py-5">
                                    <div class="product-card shadow p-3 position-relative">
                                        <div class="ribbon">20% Offer</div>
                                        <div class="product-card-img">
                                            <img class="product-img"
                                                src="{{ asset('frontend/assets/images/product1.jpeg') }}" alt="">
                                        </div>
                                        <div class="product-card-content pt-3">

                                            <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50
                                                ML
                                                Beauty Of Joseon Relief Sun Aqua-fresh: Rice + B5 - 50ml</h3>
                                            <div class="price-container d-flex justify-content-between">
                                                <div>
                                                    <p>Nrs 5000</p>
                                                    <p class="cross-price underline"> Nrs 8000</p>
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
                                                        </button></a>
                                                </div>
                                                <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                            </div>
                                        </div>
                                        <a class=" stretched-link" href=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide py-5">
                                    <div class="product-card shadow p-3 position-relative">
                                        <div class="ribbon">20% Offer</div>
                                        <div class="product-card-img">
                                            <img class="product-img"
                                                src="{{ asset('frontend/assets/images/product.jpeg') }}" alt="">
                                        </div>
                                        <div class="product-card-content pt-3">

                                            <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50
                                                ML
                                                Beauty Of Joseon Relief Sun Aqua-fresh: Rice + B5 - 50ml</h3>
                                            <div class="price-container d-flex justify-content-between">
                                                <div>
                                                    <p>Nrs 5000</p>
                                                    <p class="cross-price underline"> Nrs 8000</p>
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
                                                        </button></a>
                                                </div>
                                                <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                            </div>
                                        </div>
                                        <a class=" stretched-link" href=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide py-5">
                                    <div class="product-card shadow p-3 position-relative">
                                        <div class="ribbon">20% Offer</div>
                                        <div class="product-card-img">
                                            <img class="product-img"
                                                src="{{ asset('frontend/assets/images/product1.jpeg') }}" alt="">
                                        </div>
                                        <div class="product-card-content pt-3">

                                            <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50
                                                ML
                                                Beauty Of Joseon Relief Sun Aqua-fresh: Rice + B5 - 50ml</h3>
                                            <div class="price-container d-flex justify-content-between">
                                                <div>
                                                    <p>Nrs 5000</p>
                                                    <p class="cross-price underline"> Nrs 8000</p>
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
                                                        </button></a>
                                                </div>
                                                <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                            </div>
                                        </div>
                                        <a class=" stretched-link" href=""></a>
                                    </div>
                                </div>
                                <!-- Repeat for other cards -->
                            </div>
                            <!-- Swiper Pagination & Navigation -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product package end -->
        <!-- Banner2 start -->
        <div class="container-fluid py-0 py-md-5">
            <div class="row">
                <div class="banner-2">
                    <img src="{{ asset('frontend/assets/images/banner2.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Banner2 end -->
        <section>
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
        </section>
        <!-- product package start -->
        <section class="py-5 ">
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
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
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
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
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
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
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
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
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
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
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
                                                <h3 class="line-clamp-3">BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
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
        </section>
        {{-- categories section start --}}

        <!-- Banner3 start -->
        <div class="container-fluid py-0 py-md-5">
            <div class="row">
                <div class="banner-2">
                    <img src="{{ asset('frontend/assets/images/banner3.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Banner3 end -->
        @foreach ($divisions as $division)
            @if ($division->products->count() > 0)
                <section class="categories">
                    <div class="container-fluid">
                        <!-- Division Title -->
                        <div class="home-title-heading text-center mb-4">
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
                                                                <p class="cross-price underline">Nrs {{ $product->mrp }}
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center py-2">
                                                                <img src="{{ asset('frontend/assets/images/rating.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cart-section justify-content-between align-items-center d-flex py-2">
                                                            <div>
                                                                <a href="">
                                                                    <button class="scale-button">
                                                                        <span class="scale-text">Add to Cart</span>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                            <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href=""></a>
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

        <section class="brand-section py-5">
            <div class="container-fluid">
                <div class="home-title-heading text-center mb-4">
                    <h2 class="fw-bold position-relative d-inline-block" style="font-size: 2.5rem;">
                       Product Categories
                        <span
                            style="display: block; height: 4px; width: 80px; background: #0ab7ec; margin: 10px auto 0; border-radius: 50px;"></span>
                    </h2>
                </div>
                <div class="swiper branchSwiper p-4 ">
                    <div class="swiper-wrapper">
                        <!-- Cards (as-is) -->
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand10.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand9.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand2.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand3.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand3.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand10.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand9.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="brand-card-container">
                                <img src="{{ asset('frontend/assets/images/brand8.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
               
            </div>
        </section>
        {{-- categories section end --}}

    </section>
@endsection
