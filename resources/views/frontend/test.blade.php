@extends('layouts.frontend.master')
@section('content')
    <section>
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-6 position-relative">
                    <div class="sidebar-content">
                        <div class="gallery-container shadow p-3 position-relative bg-white rounded">
                            <div class="swiper gallerySwiper2"
                                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                                <div class="swiper-wrapper gallery-swiper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/product.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/product11.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/product17.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/product15.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/images/product16.jpeg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="swiper gallerySwiper" thumbsSlider="">
                                <div class="swiper-wrapper gallery-lower-part p-3">
                                    <div class="swiper-slide border">
                                        <img src="{{ asset('frontend/assets/images/product.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide border">
                                        <img src="{{ asset('frontend/assets/images/product11.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide border">
                                        <img src="{{ asset('frontend/assets/images/product17.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide border">
                                        <img src="{{ asset('frontend/assets/images/product15.jpeg') }}" />
                                    </div>
                                    <div class="swiper-slide border">
                                        <img src="{{ asset('frontend/assets/images/product16.jpeg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="package-content-part">
                        <div class="package-detail-banner shadow pb-3">
                            <ul>
                                <li class="">Home</li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li>product</li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li class="active">product detail</li>
                            </ul>
                            <h4>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5 50 ML</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicingLorem ipsum dolor sit adipisicing.</p>

                            <div class="bg-white rounded p-3">
                                <!-- Pricing Section -->
                                <div class="pricing-part mb-3">
                                    <h5>
                                        <span class="text-danger text-decoration-line-through">Nrs 7000</span>
                                        <span class="ms-2 text-success fw-bold">Nrs 5000</span>
                                    </h5>
                                </div>

                                <!-- ✅ Checkout Redirect Form -->
                                <form action="{{ route('checkout.index') }}" method="GET">
                                    <!-- Quantity -->
                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="me-2 fw-semibold mb-0" for="quantity">Quantity:</label>
                                        <input class="form-control form-control-sm w-25" id="quantity" name="quantity"
                                            type="number" placeholder="Qty" min="1" value="1" required>
                                    </div>

                                    <!-- Optional Hidden Inputs -->
                                    <input type="hidden" name="product_id" value="123"> {{-- Replace 123 with dynamic value if available --}}
                                    <input type="hidden" name="product_name"
                                        value="BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH">

                                    <!-- Delivery Date -->
                                    <div class="mb-2">
                                        <label class="d-block fw-semibold">Delivery Date</label>
                                        <p class="mb-0 text-primary">Within 3-5 business days</p>
                                    </div>

                                    <!-- Manufacturer -->
                                    <div class="mb-3">
                                        <label class="d-block fw-semibold">Manufactured By</label>
                                        <p class="mb-0 text-secondary">EventCraft Decorators Pvt. Ltd.</p>
                                    </div>

                                    <!-- Book Now Button -->
                                    <button class="book-now-btn btn btn-primary w-100" type="submit">
                                        Proceed to Checkout <i class="ri-arrow-right-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="why-chose-us-container py-3">
                            <div class="why-us-card rounded bg-white p-4">
                                <h4>Features</h4>
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
            </div>
        </div>
    </section>
@endsection

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
                                        <div class="trending-item-content p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="{{ get_image_url($prd->image, 'home-banner-slider') }}"
                                                        alt="">
                                                </div>
                                                <div class="col-8 trending-conent">
                                                    <h6 class="line-clamp-2">{{ $prd->name ?? '' }}</h6>
                                                    <div class="d-flex gap-2">
                                                        <p>Nrs {{ $prd->price ?? '' }}</p>
                                                        @if ($prd->price && $prd->mrp)
                                                            <p class="cross-price underline">Nrs
                                                                <del>{{ $prd->mrp }}</del>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        {{-- categories section end --}}
        {{-- Home bannner first end --}}
        <!-- Banner2 start -->

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
        {{-- categories section end --}}

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
                                    <img class="arrival-card-img"
                                        src="{{ asset('frontend/assets/images/arrival1.png') }}" alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img"
                                        src="{{ asset('frontend/assets/images/arrival2.jpeg') }}" alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img"
                                        src="{{ asset('frontend/assets/images/arrival3.jpeg') }}" alt="">
                                </div>
                                <a class=" stretched-link" href=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="product-card">
                                <div class="arrival-card">
                                    <img class="arrival-card-img"
                                        src="{{ asset('frontend/assets/images/arrival4.jpeg') }}" alt="">
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
        <div class="container-fluid py-0 py-md-5">
            <div class="row">
                <div class="banner-2">
                    <img src="{{ asset('frontend/assets/images/banner1.jpeg') }}" alt="">
                </div>
            </div>
        </div>
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

                        <div class="swiper packageSwiper p-4">
                            <div class="swiper-wrapper">
                                @foreach ($setting['product'] as $pd)
                                    @php
                                        $prd = getProductByID($pd);
                                    @endphp
                                    @if ($prd)
                                        <div class="swiper-slide py-5">
                                            <div class="product-card shadow p-3 position-relative"
                                                onclick="window.location='{{ route('frontend.productsingle', ['slug' => $prd->slug]) }}'"
                                                style="cursor: pointer;">

                                                <div class="product-card-img">
                                                    <img class="product-img"
                                                        src="{{ get_image_url($prd->image, 'home-banner-slider') }}"
                                                        alt="">
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
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="cart-section justify-content-between align-items-center d-flex py-2">
                                                        <div>
                                                            <button class="scale-button add-to-cart-btn"
                                                                data-id="{{ $prd->id }}"
                                                                data-name="{{ $prd->name }}"
                                                                data-price="{{ $prd->price }}"
                                                                data-image="{{ $prd->image }}" type="button"
                                                                onclick="event.stopPropagation();">
                                                                <span class="scale-text">Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div><i class="ri-heart-fill product-heart-icon"></i></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

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

            <!-- ✅ JS for Add to Cart logic and toast -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            // 🛒 Your existing add-to-cart logic goes here (AJAX or not)

                            // ✅ Show toast
                            const toast = new bootstrap.Toast(document.getElementById('cartToast'));
                            toast.show();
                        });
                    });
                });
            </script>
        @endif
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(document).on('click', '.add-to-cart-btn', function(e) {
                    e.preventDefault();
                    e.stopPropagation(); // ✅ Important to prevent card click redirect

                    const btn = $(this);

                    @auth('customer')
                        $.post("{{ route('cart.add') }}", {
                            id: btn.data('id'),
                            name: btn.data('name'),
                            price: btn.data('price'),
                            image: btn.data('image'),
                            qty: 1 // Always 1 from homepage
                        }, function(response) {
                            if (response.totalUniqueItems) {
                                $('#cart-count').text(response.totalUniqueItems); // optional
                            }
                            new bootstrap.Toast($('#cartToast')[0]).show(); // ✅ show toast
                        }).fail(function(xhr) {
                            alert('Something went wrong!');
                            console.log(xhr.responseText);
                        });
                    @else
                        new bootstrap.Modal($('#loginModal')).show();
                    @endauth
                });
            });
        </script>

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
                                                                <p class="cross-price underline">Nrs
                                                                    {{ $product->mrp }}
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

    </section>
@endsection
