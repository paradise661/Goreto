@extends('layouts.frontend.master')
@section('content')
    <section class="banner-section">
        <div class="container banner-content">
            <nav aria-label="breadcrumb">
                <ul>
                    <li>Home</a></li>
                    <li>/</li>
                    <li>{{ $category->name }}</li>
                </ul>
            </nav>
        </div>
    </section>

    <div class="decoration-section py-5">
        <div class="container-fluid">
            {{-- <div class="home-title-heading text-start title-border">
                <h3>{{ $category->name }}</h3>
            </div> --}}

            <!-- For desktop view -->
            <div class="swiper packageSwiper p-4">
                <div class="swiper-wrapper">
                    @forelse($products as $product)
                        <div class="swiper-slide">
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
                                            <p class="cross-price underline">Nrs {{ $product->mrp }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-2">
                                            <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
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
                    @empty
                        <p>No products found under this category.</p>
                    @endforelse
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Pagination (use only if not in swiper or with AJAX) -->
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
