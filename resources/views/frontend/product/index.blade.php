<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <!-- banner section start -->
    <section class="banner-section">
        <div class="container banner-content">
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
            <div class="swiper packageSwiper p-4  ">
                <div class="swiper-wrapper">
                    <!-- Your product cards here (no changes needed to them) -->
                    <!-- Example Card -->
                    <div class="swiper-slide ">
                        <div class="product-card shadow p-3 position-relative">
                            <div class="ribbon">20% Offer</div>
                            <div class="product-card-img">
                                <img class="product-img" src="{{ asset('frontend/assets/images/product.jpeg') }}"
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
                                        <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cart-section justify-content-between align-items-center d-flex py-2">
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
                                <img class="product-img" src="{{ asset('frontend/assets/images/product1.jpeg') }}"
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
                                        <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cart-section justify-content-between align-items-center d-flex py-2">
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
                                <img class="product-img" src="{{ asset('frontend/assets/images/product3.jpeg') }}"
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
                                        <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cart-section justify-content-between align-items-center d-flex py-2">
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
                                <img class="product-img" src="{{ asset('frontend/assets/images/product.jpeg') }}"
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
                                        <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cart-section justify-content-between align-items-center d-flex py-2">
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
                                <img class="product-img" src="{{ asset('frontend/assets/images/product1.jpeg') }}"
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
                                        <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cart-section justify-content-between align-items-center d-flex py-2">
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
                                <img class="product-img" src="{{ asset('frontend/assets/images/product3.jpeg') }}"
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
                                        <img src="{{ asset('frontend/assets/images/rating.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cart-section justify-content-between align-items-center d-flex py-2">
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
    <!-- Decoration package end -->
</body>
<script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<!-- swiper for review -->
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min1.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min2.js') }}"></script>

</html>
