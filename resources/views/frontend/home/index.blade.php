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
    <!-- categories section end -->
@endsection
