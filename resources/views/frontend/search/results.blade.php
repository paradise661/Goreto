@extends('layouts.frontend.master')

@section('content')
    <div class="decoration-section py-5">
        <div class="container-fluid">
            <div class="home-title-heading text-start title-border">
                <h3>Search Results for "{{ $query }}"</h3>
            </div>

            <!-- For desktop view -->
            @if ($products->isEmpty())
                <p class="px-4">No products found.</p>
            @else
                <div class="swiper packageSwiper p-4">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="product-card shadow p-3 position-relative">
                                    {{-- <div class="ribbon">20% Offer</div> --}}
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
                                                <p class="cross-price underline">Nrs {{ $product->mrp }}</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center py-2">
                                                <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="Rating">
                                            </div>
                                        </div>
                                        <div class="cart-section justify-content-between align-items-center d-flex py-2">
                                            <div>
                                                <a href="#">
                                                    <button class="scale-button">
                                                        <span class="scale-text">Add to Cart</span>
                                                    </button>
                                                </a>
                                            </div>
                                            <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                        </div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Pagination (optional if swiper is paged via AJAX) -->
                <div class="mt-4">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
