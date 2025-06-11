@extends('layouts.frontend.master')

@section('content')
    <div class="container py-5">

        @if ($cartItems->isEmpty())
            <div class="text-center py-5">
                <h3 class="text-muted">🛍️ Your cart is currently empty.</h3>
                <a class="btn btn-primary mt-4" href="/">Continue Shopping</a>
            </div>
        @else
            <!-- Checkout Progress -->
            <div class="mb-5">
                <div class="d-flex justify-content-center">
                    <div class="progress-step active">
                        <span class="fw-bold me-2">01</span>
                        <span>Shopping Cart</span>
                    </div>
                    <div class="progress-step inactive">
                        <span class="fw-bold me-2">02</span>
                        <span>Checkout</span>
                    </div>
                    <div class="progress-step inactive">
                        <span class="fw-bold me-2">03</span>
                        <span>Order Completed</span>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle text-center bg-white shadow rounded-4 overflow-hidden">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price (Rs)</th>
                            <th scope="col" style="width: 140px;">Quantity</th>
                            <th scope="col">Total (Rs)</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="cart-body">
                        @foreach ($cartItems as $item)
                            <tr data-id="{{ $item->id }}">
                                <td>
                                    <img class="rounded"
                                        src="{{ get_image_url($item->attributes['image'], 'home-banner-slider') }}"
                                        alt="product" width="60">
                                </td>
                                <td class="fw-medium">{{ $item->name }}</td>
                                <td class="price" data-price="{{ $item->price }}">{{ number_format($item->price) }}</td>
                                <td>
                                    <div class="input-group quantity-control">
                                        <button class="btn btn-sm btn-outline-secondary minus">−</button>
                                        <input class="form-control text-center qty" type="text"
                                            value="{{ $item->quantity }}" readonly>
                                        <button class="btn btn-sm btn-outline-secondary plus">+</button>
                                    </div>
                                </td>
                                <td class="item-total fw-bold text-primary">
                                    {{ number_format($item->price * $item->quantity) }}
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-danger remove-item" data-id="{{ $item->id }}"
                                        href="#">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-4">
                <h4>Total: <span class="text-success fw-bold" id="grand-total">Rs. 0</span></h4>
            </div>

            <div class="text-end mt-3">
                <a class="btn btn-success btn-lg" href="{{ route('checkout') }}">
                    Proceed to Checkout
                </a>
            </div>
        @endif

    </div>
@endsection
