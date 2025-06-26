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
                                        <img src="{{ get_image_url($product->image, 'home-banner-slider') }}"
                                            alt="{{ $product->name }}">
                                    </div>

                                </div>

                            </div>
                            {{-- <div class="swiper gallerySwiper" thumbsSlider="">
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
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="package-content-part">
                        <div class="package-detail-banner shadow pb-3">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li><a href="{{ url('/products') }}">Products</a></li>
                                <li><i class="ri-arrow-right-s-line"></i></li>
                                <li class="active">{{ $product->name }}</li>
                            </ul>
                            <h4>{{ $product->name }}</h4>
                            <p>{{ $product->short_description ?? '' }}</p>

                            <div class="bg-white rounded p-3">
                                <!-- Pricing Section -->

                                <div class="pricing-part mb-3">
                                    @if ($product->mrp && $product->mrp > $product->price)
                                        <h5>
                                            <span class="text-danger text-decoration-line-through">Nrs
                                                {{ number_format($product->mrp) }}</span>
                                            <span class="ms-2 text-success fw-bold">Nrs
                                                {{ number_format($product->price) }}</span>
                                        </h5>
                                    @else
                                        <h5 class="fw-bold">Nrs {{ number_format($product->price) }}</h5>
                                    @endif
                                </div>

                            </div>

                            <!-- ✅ Checkout Redirect Form -->
                            <form id="redirect-cart-form" action="{{ route('cart.add') }}" method="POST">

                                @csrf
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="me-2 fw-semibold mb-0" for="quantity">Quantity:</label>

                                    <div class="input-group input-group-sm w-25">
                                        <button class="btn btn-outline-secondary btn-minus" type="button"
                                            aria-label="Decrease quantity">−</button>
                                        <input class="form-control text-center no-spinner" id="quantity" type="number"
                                            name="qty" min="1" value="1" required>
                                        <button class="btn btn-outline-secondary btn-plus" type="button"
                                            aria-label="Increase quantity">+</button>
                                    </div>

                                </div>

                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">

                                <button class="book-now-btn btn btn-primary w-100" type="submit">
                                    Proceed to Checkout <i class="ri-arrow-right-line"></i>
                                </button>
                            </form>

                        </div>

                        <div class="why-chose-us-container py-3">
                            <div class="why-us-card rounded bg-white p-4">
                                <h4>Description</h4>
                                <div class="custom-list">
                                    {!! $product->description ?? '<p>No description available.</p>' !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.btn-plus').click(function() {
                const input = $(this).siblings('input[name="qty"]');
                let currentVal = parseInt(input.val()) || 1;
                input.val(currentVal + 1);
            });

            $('.btn-minus').click(function() {
                const input = $(this).siblings('input[name="qty"]');
                let currentVal = parseInt(input.val()) || 1;
                if (currentVal > 1) {
                    input.val(currentVal - 1);
                }
            });

            // Override default form submit to manually redirect only from this page
            $('#redirect-cart-form').submit(function(e) {
                e.preventDefault(); // stop normal form submission
                const form = $(this);

                $.ajax({
                    url: form.attr('action'),
                    method: form.attr('method'),
                    data: form.serialize(),
                    success: function(res) {
                        // After successful add to cart, redirect to /cart
                        window.location.href = '/cart';
                    },
                    error: function(err) {
                        alert('Failed to add product to cart.');
                    }
                });
            });
        });
    </script>
@endpush
