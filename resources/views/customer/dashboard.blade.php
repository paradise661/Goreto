@extends('layouts.frontend.master')

@section('content')
    <style>
        .nav-link-custom {
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .nav-link-custom:hover,
        .nav-link-custom.active {
            background-color: #d1e7dd;
            color: #0f5132 !important;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .success-custom {
            color: #198754;
        }

        .btn-success-custom {
            background-color: #198754;
            color: #fff;
        }

        .btn-success-custom:hover {
            background-color: #157347;
        }

        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1030;
            display: none;
        }

        .mobile-overlay.show {
            display: block;
        }

        #sidebar.show {
            left: 0;
        }

        #sidebar {
            transition: left 0.3s ease;
        }
    </style>

    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="bg-white p-3 rounded shadow-sm h-100" id="sidebar">
                    <h4 class="success-custom">My Account</h4>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="nav-link nav-link-custom active" onclick="showContent('dashboard', this)">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('orders', this)">
                                <i class="bi bi-bag-check me-2"></i> My Orders
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('cart', this)">
                                <i class="bi bi-cart me-2"></i> My Cart
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('address', this)">
                                <i class="bi bi-geo-alt me-2"></i> Address
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('account', this)">
                                <i class="bi bi-person me-2"></i> Account Details
                            </span>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <span class="nav-link nav-link-custom text-danger" onclick="logout()">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                <!-- Dashboard -->
                <div class="content-section active" id="dashboard">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-bag-check text-success-custom me-2"></i> Recent
                                        Orders</h5>
                                    <p class="card-text text-muted">View your recent purchases and order history</p>
                                    <button class="btn btn-success-custom btn-sm"
                                        onclick="showContent('orders', document.querySelector('[onclick*=orders]'))">View
                                        Orders</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-cart text-success-custom me-2"></i> Shopping Cart
                                    </h5>
                                    <p class="card-text text-muted">Review your cart items before checkout</p>
                                    <button class="btn btn-success-custom btn-sm"
                                        onclick="showContent('cart', document.querySelector('[onclick*=cart]'))">View
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders -->
                <div class="content-section" id="orders">
                    <h4>My Orders</h4>
                    <p>List of all your past and current orders.</p>
                </div>

                <!-- Cart -->
                <div class="content-section" id="cart">
                    <h4 class="fw-bold mb-4">🛒 Your Cart</h4>

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
                                                src="{{ get_image_url($item->image, 'home-banner-slider') }}" alt="product"
                                                width="60">

                                        </td>
                                        <td class="fw-medium">{{ $item->name }}</td>
                                        <td class="price" data-price="{{ $item->price }}">
                                            {{ number_format($item->price) }}</td>
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
                                        <td>
                                            <a class="btn btn-sm btn-outline-danger remove-item"
                                                data-id="{{ $item->id }}" href="#">Remove</a>
                                        </td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-end mt-4">
                        <h4>Total: <span class="text-success fw-bold" id="grand-total">Rs. 0</span></h4>
                    </div>
                </div>
                <!-- Address -->
                <div class="content-section" id="address">
                    <h4>Address</h4>
                    <p>Manage your saved addresses.</p>
                </div>

                <!-- Account -->
                <div class="content-section" id="account">
                    <h4>Account Details</h4>
                    <p>Update your personal information.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-overlay" onclick="closeSidebar()"></div>

    <script>
        function showContent(sectionId, element) {
            document.querySelectorAll('.content-section').forEach(el => el.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');

            document.querySelectorAll('.nav-link-custom').forEach(btn => btn.classList.remove('active'));
            if (element) element.classList.add('active');

            closeSidebar();
        }

        function toggleSidebar() {
            document.getElementById('sidebar').classList.add('show');
            document.querySelector('.mobile-overlay').classList.add('show');
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('show');
            document.querySelector('.mobile-overlay').classList.remove('show');
        }

        function logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }

        document.addEventListener('DOMContentLoaded', () => {
            showContent('dashboard', document.querySelector('[onclick*="dashboard"]'));
        });
    </script>
@endsection
