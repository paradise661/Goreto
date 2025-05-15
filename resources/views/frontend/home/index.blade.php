@extends('layouts.frontend.master')
@section('content')
    {{-- Home bannner first start --}}
    <section class="py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="banner-first-container pb-4">
                                <img src="{{ asset('frontend/assets/images/img1.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-first-container pb-4">
                                <img src="{{ asset('frontend/assets/images/img2.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-first-container pb-4">
                                <img src="{{ asset('frontend/assets/images/img3.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
    <div class="category-section py-4">
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
    </div>
    <!-- categories section end -->
    <!-- product package start -->
    <div class="product-section py-5">
        <div class="container-fluid">
            <div class="home-title-heading text-center">
                <h2>Featured Brand  <span>Of Week</span></h2>
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
                                    <img src="{{ asset('frontend/assets/images/product.jpeg') }}" class="product-img"
                                        alt="">
                                </div>
                                <div class="product-card-content pt-3">

                                    <h3>Luxury Birthday Party Celebration Theme Decor</h3>
                                    <div class="price-container d-flex justify-content-between">
                                        <div>
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-2">
                                            <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="cart-section justify-content-between align-items-center d-flex py-2">
                                        <div>
                                            <a href="">
                                                <button class="scale-button">
                                                    <span class="scale-text">Add to Cart </span>
                                                </button></a>
                                        </div>
                                         <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                    </div>
                                </div>
                                <a href="" class=" stretched-link"></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card shadow p-3 position-relative">
                                <div class="ribbon">20% Offer</div>
                                <div class="product-card-img">
                                    <img src="{{ asset('frontend/assets/images/product1.jpeg') }}" class="product-img"
                                        alt="">
                                </div>
                                <div class="product-card-content pt-3">

                                    <h3>Luxury Birthday Party Celebration Theme Decor</h3>
                                    <div class="price-container d-flex justify-content-between">
                                        <div>
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-2">
                                            <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="cart-section justify-content-between align-items-center d-flex py-2">
                                        <div>
                                            <a href="">
                                                <button class="scale-button">
                                                    <span class="scale-text">Add to Cart </span>
                                                </button></a>
                                        </div>
                                         <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                    </div>
                                </div>
                                <a href="" class=" stretched-link"></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card shadow p-3 position-relative">
                                <div class="ribbon">20% Offer</div>
                                <div class="product-card-img">
                                    <img src="{{ asset('frontend/assets/images/product1.jpeg') }}" class="product-img"
                                        alt="">
                                </div>
                                <div class="product-card-content pt-3">

                                    <h3>Luxury Birthday Party Celebration Theme Decor</h3>
                                    <div class="price-container d-flex justify-content-between">
                                        <div>
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-2">
                                            <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="cart-section justify-content-between align-items-center d-flex py-2">
                                        <div>
                                            <a href="">
                                                <button class="scale-button">
                                                    <span class="scale-text">Add to Cart </span>
                                                </button></a>
                                        </div>
                                         <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                    </div>
                                </div>
                                <a href="" class=" stretched-link"></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card shadow p-3 position-relative">
                                <div class="ribbon">20% Offer</div>
                                <div class="product-card-img">
                                    <img src="{{ asset('frontend/assets/images/product.jpeg') }}" class="product-img"
                                        alt="">
                                </div>
                                <div class="product-card-content pt-3">

                                    <h3>Luxury Birthday Party Celebration Theme Decor</h3>
                                    <div class="price-container d-flex justify-content-between">
                                        <div>
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-2">
                                            <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="cart-section justify-content-between align-items-center d-flex py-2">
                                        <div>
                                            <a href="">
                                                <button class="scale-button">
                                                    <span class="scale-text">Add to Cart </span>
                                                </button></a>
                                        </div>
                                         <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                    </div>
                                </div>
                                <a href="" class=" stretched-link"></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card shadow p-3 position-relative">
                                <div class="ribbon">20% Offer</div>
                                <div class="product-card-img">
                                    <img src="{{ asset('frontend/assets/images/product1.jpeg') }}" class="product-img"
                                        alt="">
                                </div>
                                <div class="product-card-content pt-3">

                                    <h3>Luxury Birthday Party Celebration Theme Decor</h3>
                                    <div class="price-container d-flex justify-content-between">
                                        <div>
                                            <p>Nrs 5000</p>
                                            <p class="cross-price underline"> Nrs 8000</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-2">
                                            <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="cart-section justify-content-between align-items-center d-flex py-2">
                                        <div>
                                            <a href="">
                                                <button class="scale-button">
                                                    <span class="scale-text">Add to Cart </span>
                                                </button></a>
                                        </div>
                                        <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                    </div>
                                </div>
                                <a href="" class=" stretched-link"></a>
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
    <!-- product package end -->
@endsection
