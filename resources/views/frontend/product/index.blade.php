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
    {{-- header --}}
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
    <!-- banner section start -->
    <section class="banner-section">
        <div class="container banner-content">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li>Personal Care</li>
                <li>/</li>
                <li class="active">Personal Care</li>
            </ul>
        </div>
    </section>
    <section class="py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-sidebar">
                        <div class="categories-container">
                            <h5 class="category-title">Categories</h5>
                            <ul class="category-list">
                                <li>Generic</li>
                                <li>Medicines</li>
                                <li class="has-children">
                                    Personal Care
                                    <ul class="subcategory-list">
                                        <li>Body Care</li>
                                        <li>Eye Care</li>
                                        <li>Face Care</li>
                                        <li>Hair Care</li>
                                        <li>Hand and Feet</li>
                                        <li>Lip Care</li>
                                        <li>Oral Care</li>
                                        <li>Skin Care</li>
                                        <li>Essential Oil</li>
                                    </ul>
                                </li>
                                <li>Family Care</li>
                                <li>Wellness & Fitness</li>
                                <li>Devices</li>
                                <li>First Aid</li>
                                <li>Immunity Booster</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h4>Personal Care</h4>
                    <div class="product-card-two-section">
                        <div class="row">
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Body Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Lip Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Body Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Eye Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Body Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Lip Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Body Care</h6>
                                </div>

                            </div>
                            <div class="col-lg-3 py-2">
                                <div class="product-page-card shadow p-2 rounded">
                                    <img src="{{ asset('frontend/assets/images/body.png') }}" alt="">
                                    <h6>Eye Care</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- banner section end -->
    <!-- Decoration package start -->
    <div class="decoration-section py-5">
        <div class="container-fluid">
            <div class="home-title-heading text-start title-border">
                <h3>Featured products</h3>
            </div>
            <!-- for desktop view -->
            <div class="row ">
                <div class="col-lg custom-col-width py-3">
                    <div class="product-card shadow p-3 position-relative">
                        {{-- <div class="ribbon">20% Offer</div> --}}
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
                        {{-- <div class="ribbon">20% Offer</div> --}}
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
                        {{-- <div class="ribbon">20% Offer</div> --}}
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
                        {{-- <div class="ribbon">20% Offer</div> --}}
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
                        {{-- <div class="ribbon">20% Offer</div> --}}
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
