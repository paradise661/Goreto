<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <div class=" top-header" id="header">
        <div class=" container-fluid d-none d-lg-block py-2 ">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo-part d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand nav-logo" href="/"><img
                                src="{{ asset('frontend/assets/images/logo.jpg') }}" alt=""></a>
                    </div>
                </div>
                <form class="custom-search-form">
                    <div class="input-group">
                        <input class="form-control search-input" type="search"
                            placeholder="What decor are you looking for?" aria-label="Search">
                        <button class="btn custom-btn" type="submit">
                            Search
                        </button>
                    </div>
                </form>
                <div class="button-part d-flex align-items-center gap-5">
                    <a href="">
                        <div>
                            <i class="ri-user-line header-icon"></i>
                            {{-- <p>Login</p> --}}
                        </div>
                    </a>
                    <div>
                        <i class="ri-shopping-cart-line header-icon"></i>
                    </div>
                    <div>
                        <i class="ri-notification-3-line header-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-6 position-relative">
                    <div class="sidebar-content">
                        <div class="gallery-container shadow p-3 position-relative bg-white rounded">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper gallerySwiper2">
                                <div class="swiper-wrapper gallery-swiper">
                                    <div class="swiper-slide">
                                        <img
                                            src="{{ asset('frontend/assets/images/product.jpeg') }}
                                    " />
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
                            <div thumbsSlider="" class="swiper gallerySwiper">
                                <div class="swiper-wrapper gallery-lower-part p-3 ">
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
                    <div class="package-content-part ">
                        <div class="package-detail-banner shadow pb-3">
                            <ul>
                                <li class="active">Home</li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li>product</li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li>product detail</li>
                            </ul>
                            <h4>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
                                50 ML</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicingLorem ipsum dolor sit adipisicing.</p>

                            <div class="bg-white rounded p-3">
                                <!-- Pricing Section -->
                                <div class="pricing-part mb-3">
                                    <h5>
                                        <span class="text-danger text-decoration-line-through">Nrs 7000</span>
                                        <span class="ms-2 text-success fw-bold">Nrs 5000</span>
                                        {{-- <span class="text-muted">/experience</span> --}}
                                    </h5>
                                </div>
                                <!-- Booking Form -->
                                <form action="">
                                    <!-- Quantity -->
                                    <!-- Quantity -->
                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="quantity" class="me-2 fw-semibold mb-0">Quantity:</label>
                                        <input type="number" id="quantity" class="form-control form-control-sm w-25"
                                            placeholder="Qty" min="1" value="1" required>
                                    </div>
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

                                    <!-- Button -->
                                    <button class="book-now-btn btn btn-primary w-100" type="submit">
                                        Book Now <i class="ri-arrow-right-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- booking form -->
                        <div class="booking-form-container py-3 ">

                        </div>
                        <div class="why-chose-us-container py-3">
                            <div class="why-us-card  rounded bg-white p-4">
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
                                                <img src="{{ asset('frontend/assets/images/product1.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">
                                                </div>
                                                <h3>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
                                                    50 ML<< /h3>
                                                        <div class="price-container justify-content-between">
                                                            <p>Nrs 5000</p>
                                                            <a href="">
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
                                                <img src="{{ asset('frontend/assets/images/product11.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">
                                                </div>
                                                <h3>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
                                                    50 ML<< /h3>
                                                        <div class="price-container justify-content-between">
                                                            <p>Nrs 5000</p>
                                                            <a href="">
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
                                                <img src="{{ asset('frontend/assets/images/product16.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">


                                                </div>
                                                <h3>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
                                                    50 ML<< /h3>
                                                        <div class="price-container justify-content-between">
                                                            <p>Nrs 5000</p>
                                                            <a href="">
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
                                                <img src="{{ asset('frontend/assets/images/product.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">


                                                </div>
                                                <h3>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
                                                    50 ML<< /h3>
                                                        <div class="price-container justify-content-between">
                                                            <p>Nrs 5000</p>
                                                            <a href="">
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
                                                <img src="{{ asset('frontend/assets/images/product1.jpeg') }}"
                                                    alt="">
                                            </div>
                                            <div class="recomendation-card-content">
                                                <div class="justify-content-between align-items-center py-1">
                                                </div>
                                                <h3>BEAUTY OF JOSEON RELIEF SUN AQUA-FRESH : RICE + B5
                                                    50 ML<< /h3>
                                                        <div class="price-container justify-content-between">
                                                            <p>Nrs 5000</p>
                                                            <button class="scale-button-rd">
                                                                <a href="">
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
                     
                    </div>
                </div>
            </div>
            <!-- Decoration package start -->
            <div class="decoration-section py-5">
                <div class="home-title-heading text-start">
                    <h2>Related <span>Product</span></h2>
                </div>
                <!-- for dekstop view -->
                <div class="row ">
                    <div class="col-lg custom-col-width py-3">
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
                    <div class="col-lg custom-col-width py-3">
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
                    <div class="col-lg custom-col-width py-3">
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
                    <div class="col-lg custom-col-width py-3">
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
                    <div class="col-lg custom-col-width py-3">
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
                </div>
            </div>
        </div>
    </section>
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
