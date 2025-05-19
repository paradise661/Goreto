@extends('layouts.frontend.master')
@section('content')
    <section>
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-6 position-relative">
                    <div class="sidebar-content">
                        <div class="gallery-container  p-3 position-relative bg-white rounded">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper gallerySwiper2">
                                <div class="swiper-wrapper gallery-swiper">
                                    <div class="swiper-slide">
                                        <img
                                            src="{{ asset('frontend/assets/images/img11.jpg') }}
                                    " />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img17.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img1.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img17.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img12.jpg') }}" />
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper gallerySwiper">
                                <div class="swiper-wrapper gallery-lower-part p-3">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img11.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img17.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img1.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img17.jpg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/img12.jpg') }}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="why-chose-us-container py-3">
                            <div class="why-us-card shadow rounded bg-white p-4">
                                <h4>Why Choose us ?</h4>
                                <div class="custom-list">
                                    <ul>
                                        <li><strong>Unmatched Creativity - </strong>we craft themes that leave a lasting
                                            impression.</li>
                                        <li><strong>Luxurious Quality - </strong>We use only the finest materials, from
                                            premium floral arrangements to sophisticated lighting</li>
                                        <li><strong>Unmatched Creativity - </strong>we craft themes that leave a lasting
                                            impression.</li>
                                        <li><strong>Luxurious Quality - </strong>We use only the finest materials, from
                                            premium floral arrangements to sophisticated lighting</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="package-content-part ">
                        <div class="package-detail-banner shadow pb-3">
                            <ul>
                                <li class="active">Home</li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li>Pre wedding Decoration</li>
                            </ul>
                            <h4>Pre wedding Decoration</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicingLorem ipsum dolor sit adipisicing.</p>
                        </div>
                        <!-- booking form -->
                        <div class="booking-form-container py-3 ">
                            <div class="bg-white rounded p-3  shadow">
                                <div class="pricing-part  ">
                                    <h5>Nrs 5000 <span>/experience</span></h5>
                                </div>
                                <form action="">
                                    <div class="date-picker-container">
                                        <label for="" class="d-block">Select the Date</label>
                                        <input type="date" class="date-input" placeholder="Select Date">
                                    </div>
                                    <a href="{{ route('frontend.login') }}"></a> <button class="book-now-btn"
                                        type="submit">Book Now <i class="ri-arrow-right-line"></i></button>
                                </form>
                                <div class="form-card-section row">
                                    <div class="col-lg-2 col-4 py-2">
                                        <div class="icon-image-container text-center">
                                            <img src="{{ asset('frontend/assets/images/verified.png') }}" alt="">
                                            <p>Secured Transcation</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 py-2">
                                        <div class="icon-image-container text-center">
                                            <img src="{{ asset('frontend/assets/images/service.png') }}" alt="">
                                            <p>100% Service Guaranteed</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 py-2">
                                        <div class="icon-image-container text-center">
                                            <img src="{{ asset('frontend/assets/images/buy.png') }}" alt="">
                                            <p>Buy Now Pay Later</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 py-2">
                                        <div class="icon-image-container text-center">
                                            <img src="{{ asset('frontend/assets/images/verified.png') }}" alt="">
                                            <p>Secured Transcation</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 py-2">
                                        <div class="icon-image-container text-center">
                                            <img src="{{ asset('frontend/assets/images/service.pn') }}g" alt="">
                                            <p>100% Service Guaranteed</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 py-2">
                                        <div class="icon-image-container text-center">
                                            <img src="{{ asset('frontend/assets/images/buy.png') }}" alt="">
                                            <p>Buy Now Pay Later</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- for inclusion -->
                        <div class="inclusion-card py-3">
                            <div class="inclusion-content shadow rounded bg-white p-3">
                                <h4>Inclusion</h4>
                                <div class="custom-list">
                                    <ul>
                                        <li>6x6 Rectangle Stand</li>
                                        <li> Floral & Fabric Backdrops </li>
                                        <li>6x6 Rectangle Stand – </li>
                                        <li> Balloon & Light Installations </li>
                                        <li>Customized Props & Accents </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- for exclusion -->
                        <div class="inclusion-card py-3">
                            <div class="inclusion-content shadow rounded bg-white p-3">
                                <h4>Exclusion</h4>
                                <div class="exclusice-list">
                                    <ul>
                                        <li>6x6 Rectangle Stand</li>
                                        <li> Floral & Fabric Backdrops </li>
                                        <li>6x6 Rectangle Stand – </li>
                                        <li> Balloon & Light Installations </li>
                                        <li>Customized Props & Accents </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- for experience -->
                        <div class="inclusion-card py-3">
                            <div class="inclusion-content shadow rounded bg-white p-3">
                                <h4>About The Experience</h4>
                                <p>For the special occasion of Ganesh Chaturthi, plan a celebration that is worth
                                    having! Our exclusive Ganesh Chaturthi themed decoration in red and green colour
                                    is sure to bring elegance to your celebration.For the special occasion of Ganesh
                                    Chaturthi, plan a celebration that is worth
                                    having! Our exclusive Ganesh Chaturthi themed decoration in red and green colour
                                    is sure to bring elegance to your celebration.
                                </p>
                            </div>
                        </div>
                        <!-- for recommendation -->
                        <div class="recommendation-content">
                            <h4 class="recommendation-content-title">Recommended</h4>
                            <!-- Recommendation Swiper -->
                            <!-- Recommendation Swiper -->
                            <div class="swiper recommendation_swiper">
                                <div class="swiper-wrapper">
                                    <!-- Card 1 -->
                                    <div class="swiper-slide pb-5">
                                        <div class="recomendation-card shadow rounded p-2">
                                            <div class="recomendation-card-img">
                                                <img src="{{ asset('frontend/assets/images/img11.jpg') }}" alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">
                                                </div>
                                                <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                                                <div class="price-container justify-content-between">
                                                    <p>Nrs 5000</p>
                                                    <a href="{{ route('frontend.login') }}">
                                                        <button class="scale-button-rd">
                                                            <span class="scale-text">Book Now</span>
                                                            <span class="scale-bg"></span>
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pb-5">
                                        <div class="recomendation-card shadow rounded p-2">
                                            <div class="recomendation-card-img">
                                                <img src="{{ asset('frontend/assets/images/img11.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">
                                                </div>
                                                <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                                                <div class="price-container justify-content-between">
                                                    <p>Nrs 5000</p>
                                                    <a href="{{ route('frontend.login') }}">
                                                        <button class="scale-button-rd">
                                                            <span class="scale-text">Book Now</span>
                                                            <span class="scale-bg"></span>
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pb-5">
                                        <div class="recomendation-card shadow rounded p-2">
                                            <div class="recomendation-card-img">
                                                <img src="{{ asset('frontend/assets/images/img17.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">


                                                </div>
                                                <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                                                <div class="price-container justify-content-between">
                                                    <p>Nrs 5000</p>
                                                    <a href="{{ route('frontend.login') }}">
                                                        <button class="scale-button-rd">
                                                            <span class="scale-text">Book Now</span>
                                                            <span class="scale-bg"></span>
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pb-5">
                                        <div class="recomendation-card shadow rounded p-2">
                                            <div class="recomendation-card-img">
                                                <img src="./images/img1.jpg" alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">


                                                </div>
                                                <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                                                <div class="price-container justify-content-between">
                                                    <p>Nrs 5000</p>
                                                    <a href="{{ route('frontend.login') }}">
                                                        <button class="scale-button-rd">
                                                            <span class="scale-text">Book Now</span>
                                                            <span class="scale-bg"></span>
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pb-5">
                                        <div class="recomendation-card shadow rounded p-2">
                                            <div class="recomendation-card-img">
                                                <img src="./images/img1.jpg" alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">
                                                </div>
                                                <h3>Chic Mehendi Function Floral Decor Arrangement</h3>
                                                <div class="price-container justify-content-between">
                                                    <p>Nrs 5000</p>
                                                    <button class="scale-button-rd">
                                                        <a href="{{ route('frontend.login') }}">
                                                            <span class="scale-text">Book Now</span>
                                                            <span class="scale-bg"></span>
                                                        </a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Pagination & Navigation -->
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <!-- for Need To know -->
                        <div class="inclusion-card py-3">
                            <div class="inclusion-content shadow rounded bg-white p-3">
                                <h4>Need To know</h4>
                                <div class="custom-list">
                                    <ul>
                                        <li>6x6 Rectangle Stand</li>
                                        <li> Floral & Fabric Backdrops </li>
                                        <li>6x6 Rectangle Stand – </li>
                                        <li> Balloon & Light Installations </li>
                                        <li>Customized Props & Accents </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decoration package start -->
            <div class="decoration-section py-5">
                <div class="home-title-heading text-start">
                    <h2>Related <span>Packages</span></h2>
                </div>
                <!-- for dekstop view -->
                <div class="row ">
                    <div class="col-lg-3 py-3">
                        <div class="decoration-card shadow  p-3 position-relative ">
                            <div class="decoration-card-img">
                                <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                            </div>
                            <div class="decoration-card-content">
                                <div class="d-flex justify-content-between align-items-center py-2">

                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>
                                <h3>Elegant Haldi Ceremony Traditional Decor Setup</h3>
                                <div class="price-container d-flex justify-content-between">
                                    <p>Nrs 5000</p>
                                    <button class="scale-button">
                                        <span class="scale-bg"></span>
                                        <a href="{{ route('frontend.login') }}" class="scale-text">Book Now</a>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 py-3">
                        <div class="decoration-card shadow  p-3 position-relative">
                            <div class="decoration-card-img">
                                <img src="{{ asset('frontend/assets/images/img16.jpg') }}" alt="">
                            </div>
                            <div class="decoration-card-content">
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>
                                <h3>Elegant Haldi Ceremony Traditional Decor Setup</h3>
                                <div class="price-container d-flex justify-content-between">
                                    <p>Nrs 5000</p>
                                    <button class="scale-button">
                                        <span class="scale-bg"></span>
                                        <a href="{{ route('frontend.login') }}" class="scale-text">Book Now</a>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 py-3">
                        <div class="decoration-card shadow  p-3 position-relative">
                            <div class="decoration-card-img">
                                <img src="{{ asset('frontend/assets/images/img15.jpg') }}" alt="">
                            </div>
                            <div class="decoration-card-content">
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>
                                <h3>Elegant Haldi Ceremony Traditional Decor Setup</h3>
                                <div class="price-container d-flex justify-content-between">
                                    <p>Nrs 5000</p>
                                    <button class="scale-button">
                                        <span class="scale-bg"></span>
                                        <a href="{{ route('frontend.login') }}" class="scale-text">Book Now</a>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 py-3">
                        <div class="decoration-card shadow  p-3 position-relative">
                            <div class="decoration-card-img">
                                <img src="{{ asset('frontend/assets/images/img1.jpg') }}" alt="">
                            </div>
                            <div class="decoration-card-content">
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                </div>
                                <h3>Elegant Haldi Ceremony Traditional Decor Setup</h3>
                                <div class="price-container d-flex justify-content-between">
                                    <p>Nrs 5000</p>
                                    <button class="scale-button">
                                        <span class="scale-bg"></span>
                                        <a href="{{ route('frontend.login') }}" class="scale-text">Book Now</a>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('frontend.packagesingle') }}" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
