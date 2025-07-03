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
                        {{-- <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('orders', this)">
                                <i class="bi bi-bag-check me-2"></i> My Orders
                            </span>
                        </li> --}}
                        <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('cart', this)">
                                <i class="bi bi-cart me-2"></i> My Cart
                            </span>
                        </li>
                        {{-- <li class="nav-item">
                            <span class="nav-link nav-link-custom" onclick="showContent('address', this)">
                                <i class="bi bi-geo-alt me-2"></i> Billing Address
                            </span>
                        </li> --}}
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
                                    <h5 class="card-title">
                                        <i class="bi bi-bag-check text-success-custom me-2"></i> Buy More
                                    </h5>
                                    <p class="card-text text-muted">Discover more great products you'll love</p>
                                    <a class="btn btn-success-custom btn-sm" href="{{ url('/') }}">Continue
                                        Shopping</a>
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

                    @if ($cartItems->isEmpty())
                        <div class="text-center py-5">
                            <p class="fs-5">Your cart is currently empty.</p>
                            <a class="btn btn-primary mt-3" href="{{ url('/') }}">Continue Shopping</a>
                        </div>
                    @else
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
                                                <a class="btn btn-sm btn-outline-danger remove-item"
                                                    data-id="{{ $item->id }}" href="#">Remove</a>
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

                <!-- Account -->
                <div class="content-section" id="account">
                    <h4>Change Password</h4>

                    @if (session('status') === 'password-updated')
                        <div class="alert alert-success">Password updated successfully!</div>
                    @endif

                    <form method="POST" action="{{ route('profile.password.update') }}">
                        @csrf

                        <div class="mb-3 position-relative">
                            <label class="form-label" for="current_password">Current Password</label>
                            <div class="input-group">
                                <input class="form-control @error('current_password') is-invalid @enderror"
                                    id="current_password" type="password" name="current_password" required>
                                <button class="btn btn-outline-secondary toggle-password" data-target="current_password"
                                    type="button">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                            @error('current_password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <label class="form-label" for="new_password">New Password</label>
                            <div class="input-group">
                                <input class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                                    type="password" name="new_password" required>
                                <button class="btn btn-outline-secondary toggle-password" data-target="new_password"
                                    type="button">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                            @error('new_password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <label class="form-label" for="new_password_confirmation">Confirm New Password</label>
                            <div class="input-group">
                                <input class="form-control" id="new_password_confirmation" type="password"
                                    name="new_password_confirmation" required>
                                <button class="btn btn-outline-secondary toggle-password"
                                    data-target="new_password_confirmation" type="button">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Update Password</button>
                    </form>
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

        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const icon = this.querySelector('i');

                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                } else {
                    input.type = "password";
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Default tab is dashboard
            let activeTab = 'dashboard';

            @if (session('active_tab'))
                activeTab = @json(session('active_tab'));
            @endif

            // Find the nav-link with onclick matching activeTab and pass it
            const activeElement = document.querySelector(`[onclick="showContent('${activeTab}', this)"]`);

            showContent(activeTab, activeElement);
        });
    </script>

@endsection
