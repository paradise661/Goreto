@extends('layouts.frontend.master')

@section('seo')
    <title>{{ $settings['contact_seo_title'] ?? 'Checkout | Goreto Pharmacy' }}</title>
    <meta name="keywords" content="{{ $settings['contact_seo_keywords'] ?? 'Goreto Pharmacy Checkout' }}">
    <meta name="description"
        content="{{ $settings['contact_seo_description'] ?? 'Complete your purchase at Goreto Pharmacy' }}">
@endsection

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 text-success fw-bold">Checkout</h2>

            {{-- Coupon --}}
            <div class="alert alert-primary text-center">
                Have a coupon? <a class="text-white fw-semibold" data-bs-toggle="collapse" href="#couponCollapse">Click here
                    to enter your code</a>
            </div>
            <div class="collapse mb-4" id="couponCollapse">
                <form class="row g-2" id="couponform">
                    @csrf
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="coupon_code" placeholder="Enter coupon code">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary w-100" id="applycoupon" type="submit">
                            Apply <i class="fas fa-sync fa-spin" id="loader" style="display: none"></i>
                        </button>
                    </div>
                </form>
            </div>

            {{-- Checkout Form --}}
            <form class="row mt-4 g-4" action="{{ route('checkout.store') }}" method="POST">
                @csrf

                {{-- Billing --}}
                @include('frontend.includes.message')
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-success text-white">
                            <strong>Billing & Shipping Address</strong>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="full_name">Full Name *</label>
                                <input class="form-control @error('full_name') is-invalid @enderror" type="text"
                                    name="full_name" value="{{ old('full_name', $billing_address->full_name ?? '') }}"
                                    placeholder="Your name">
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Phone *</label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                        name="phone" value="{{ old('phone', $billing_address->phone ?? '') }}"
                                        placeholder="98XXXXXXXX">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email *</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        name="email" value="{{ old('email', $billing_address->email ?? '') }}"
                                        placeholder="you@example.com">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Address *</label>
                                    <input class="form-control @error('address') is-invalid @enderror" type="text"
                                        name="address" value="{{ old('address', $billing_address->address ?? '') }}"
                                        placeholder="1234 Main St">
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">City *</label>
                                    <input class="form-control @error('city') is-invalid @enderror" type="text"
                                        name="city" value="{{ old('city', $billing_address->city ?? '') }}"
                                        placeholder="Kathmandu">
                                    @error('city')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Delivery Charges --}}
                    @if ($deliveryCharges->isNotEmpty())
                        <div class="card shadow-sm border-0 mt-4">
                            <div class="card-header bg-primary text-white">
                                <strong>Select Delivery Option</strong>
                            </div>
                            <div class="card-body">
                                @foreach ($deliveryCharges as $charge)
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" id="delivery{{ $charge->id }}" type="radio"
                                            name="delivery_charge" value="{{ $charge->price }}" required>
                                        <label class="form-check-label" for="delivery{{ $charge->id }}">
                                            {{ $charge->title }} - <strong>Rs. {{ $charge->price }}</strong>
                                        </label>
                                    </div>
                                @endforeach
                                @error('delivery_charge')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Order Summary --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white text-dark fw-bold">
                            <strong>Your Order</strong>
                        </div>
                        <div class="card-body" id="order-view">
                            {{-- AJAX content loads here --}}
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function loadOrderComponent(deliveryCharge = 0) {
            console.log("loadOrderComponent called with deliveryCharge:", deliveryCharge);
            $.ajax({
                url: "{{ url('/view-order/checkout') }}/" + deliveryCharge,
                type: "GET",
                success: function(data) {
                    $('#order-view').html(data);
                },
                error: function() {
                    alert("Some error occurred while loading the order.");
                }
            });
        }

        $(function() {
            loadOrderComponent();
        });

        $('#applycoupon').click(function(e) {
            e.preventDefault();
            var couponFormData = new FormData($('#couponform')[0]);
            $.ajax({
                url: "{{ route('coupon') }}",
                method: 'POST',
                data: couponFormData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#loader').show();
                },
                success: function(data) {
                    $('#loader').hide();
                    if (data.error) {
                        toastr.error(data.message);
                    } else {
                        loadOrderComponent();
                        toastr.success(data.message);
                    }
                    $('#couponform')[0].reset();
                },
                error: function() {
                    $('#loader').hide();
                    alert("Error applying coupon.");
                }
            });
        });

        $(document).on('change', 'input[name=delivery_charge]', function() {
            loadOrderComponent(this.value);
        });
    </script>
@endsection
