@extends('layouts.frontend.master')
@section('content')
    <!-- banner section start -->
    <section class="banner-section">
        <div class="container banner-content">
            <h1>Wedding Party Decoration</h1>
            <p>Elegant Touches, Unforgettable Moments</p>
        </div>
    </section>
    <!-- banner section end -->
    <!-- Decoration package start -->
    <div class="decoration-section py-5">
        <div class="container-fluid">
            <div class="home-title-heading text-start title-border">
                <h3>All <span>Packages</span></h3>
            </div>
            <!-- for desktop view -->
            <div class="row ">
                <!-- card -->
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative ">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                        <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative ">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img3.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Grand Wedding Stage Decoration Ceremony Decor</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img12.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Luxury Wedding Party Celebration Theme Decor</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img8.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Royal Engagement Event Venue Decoration Setup</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img7.jpg') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Royal Engagement Event Venue Decoration Setup</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="decoration-card shadow p-3 position-relative">
                        <div class="decoration-card-img">
                            <img src="{{ asset('frontend/assets/images/img6.png') }}" alt="">
                        </div>
                        <div class="decoration-card-content">
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                            </div>
                            <h3>Elegant Haldi Ceremony Decor Wedding Decoration</h3>
                            <div class="price-container d-flex justify-content-between">
                                <p>Nrs 5000</p>
                                <a href="{{ route('frontend.packagesingle') }}"><button class="scale-button">
                                        <span class="scale-text">Book Now</span>
                                        <span class="scale-bg"></span>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Decoration package end -->
    <!-- for review section start-->
    <section class="py-4">
        <div class="container-fluid">
            <div class="home-title-heading text-center ">
                <h2>Customer <span>Review</span></h2>
                <p>Don't just take our word for it - hear from our satisfied clients</p>
                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
            </div>
            <div class="swiper reviewSwiper p-0 p-md-4 ">
                <div class="swiper-wrapper  pb-5">
                    <div class="swiper-slide">
                        <div class="testimonail-container shadow p-4">
                            <div class="testi-img-container d-flex">
                                <div class="testi-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="inner-container px-3">
                                        <h6 class="testi-name">Bibek Dhakal</h6>
                                        <p class="postion">Verified Purchase</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text-1 line-clamp-8 pt-3 ">
                                "Simply breathtaking! The decor added charm and elegance to our anniversary
                                celebration. Worth every penny!"
                            </div>
                            <div class="customer-purchase-desc d-flex gap-2">
                                <div class="purchase-img">
                                    <img src="./images//bd4.jpg" alt="">
                                </div>
                                <div>
                                    <p>Luxury Birthday Party Celebration Theme Decor</p>
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonail-container shadow p-4">
                            <div class="testi-img-container d-flex">
                                <div class="testi-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="inner-container px-3">
                                        <h6 class="testi-name">Bibek Dhakal</h6>
                                        <p class="postion">Verified Purchase</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text-1 line-clamp-8 pt-3 ">
                                "Flawless execution! From planning to setup, everything was seamless. Highly
                                recommend for luxury events!"
                            </div>
                            <div class="customer-purchase-desc d-flex gap-2">
                                <div class="purchase-img">
                                    <img src="./images//bd3.jpg" alt="">
                                </div>
                                <div>
                                    <p>Luxury Birthday Party Celebration Theme Decor</p>
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonail-container shadow p-4">
                            <div class="testi-img-container d-flex">
                                <div class="testi-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="inner-container px-3">
                                        <h6 class="testi-name">Bibek Dhakal</h6>
                                        <p class="postion">Verified Purchase</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text-1 line-clamp-8 pt-3 ">
                                "Beyond expectations! The team created a magical ambiance for my birthday. Elegant,
                                classy, and unforgettable!"
                            </div>
                            <div class="customer-purchase-desc d-flex gap-2">
                                <div class="purchase-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div>
                                    <p>Luxury Birthday Party Celebration Theme Decor</p>
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonail-container shadow p-4">
                            <div class="testi-img-container d-flex">
                                <div class="testi-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="inner-container px-3">
                                        <h6 class="testi-name">Bibek Dhakal</h6>
                                        <p class="postion">Verified Purchase</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text-1 line-clamp-8 pt-3 ">
                                Chitikka Decor offers luxury decor and design services for weddings, birthdays,
                                elegant and unforgettable celebrations.
                            </div>
                            <div class="customer-purchase-desc d-flex gap-2">
                                <div class="purchase-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div>
                                    <p>Luxury Birthday Party Celebration Theme Decor</p>
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonail-container shadow p-4">
                            <div class="testi-img-container d-flex">
                                <div class="testi-img">
                                    <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="inner-container px-3">
                                        <h6 class="testi-name">Bibek Dhakal</h6>
                                        <p class="postion">Verified Purchase</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text-1 line-clamp-8 pt-3 ">
                                Chitikka Decor offers luxury decor and design services for weddings, birthdays,
                                elegant and unforgettable celebrations.
                            </div>
                            <div class="customer-purchase-desc d-flex gap-2">
                                <div class="purchase-img">
                                    <img src="./images//bd1.jpg" alt="">
                                </div>
                                <div>
                                    <p>Luxury Birthday Party Celebration Theme Decor</p>
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- for review section end-->
@endsection
