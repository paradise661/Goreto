@extends('layouts.frontend.master')
<!-- Bootstrap CSS -->
@section('content')
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: white;
            min-height: 100vh;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .nav-item-custom {
            margin-bottom: 8px;
        }

        .nav-link-custom {
            color: #495057;
            padding: 12px 16px;
            border-radius: 8px;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .nav-link-custom:hover {
            background-color: #f8f9fa;
            color: #495057;
        }

        .nav-link-custom.active {
            background-color: #0ab7ec;
            color: white;
        }

        .nav-link-custom i {
            margin-right: 12px;
            width: 20px;
        }

        .main-content {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .text-success-custom {
            color: #0ab7ec !important;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .order-card {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .status-badge {
            font-size: 0.75rem;
            padding: 4px 8px;
        }

        .form-control:focus {
            border-color: #0ab7ec;
            box-shadow: 0 0 0 0.2rem rgba(108, 159, 63, 0.25);
        }

        .btn-success-custom {
            background-color: #1aa985;
            /* blended teal from logo colors */
            border-color: #148f6b;
            color: white;
        }

        .btn-success-custom:hover {
            background-color: #138e6e;
            /* darker teal on hover */
            border-color: #0f765c;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 280px;
                height: 100vh;
                z-index: 1050;
                transition: left 0.3s ease;
            }

            .sidebar.show {
                left: 0;
            }

            .mobile-menu-btn {
                display: block !important;
            }

            .main-content {
                margin-top: 60px;
            }
        }

        .mobile-menu-btn {
            display: none;
        }

        .mobile-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
        }

        .mobile-overlay.show {
            display: block;
        }
    </style>

    <!-- Mobile Menu Button -->
    <div class="mobile-menu-btn position-fixed top-0 start-0 p-3" style="z-index: 1060;">
        <button class="btn btn-outline-secondary" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" onclick="closeSidebar()"></div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 p-0 sidebar" id="sidebar">
                <div class="p-4">
                    <nav>
                        <div class="nav-item-custom">
                            <button class="nav-link-custom active" onclick="showContent('dashboard', this)">
                                <i class="bi bi-speedometer2"></i>
                                Dashboard
                            </button>
                        </div>
                        <div class="nav-item-custom">
                            <button class="nav-link-custom" onclick="showContent('orders', this)">
                                <i class="bi bi-bag"></i>
                                Order
                            </button>
                        </div>

                        <div class="nav-item-custom">
                            <button class="nav-link-custom" onclick="showContent('address', this)">
                                <i class="bi bi-geo-alt"></i>
                                My Address
                            </button>
                        </div>
                        <div class="nav-item-custom">
                            <button class="nav-link-custom" onclick="showContent('account', this)">
                                <i class="bi bi-person"></i>
                                Account Details
                            </button>
                        </div>
                        <div class="nav-item-custom">
                            <form class="d-inline" action="{{ route('customer.logout') }}" method="POST">
                                @csrf
                                <button class="nav-link-custom" onclick="logout()">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Log Out
                                </button>
                            </form>
                        </div>

                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8">
                <div class="p-4">
                    <div class="main-content p-4">
                        <!-- Header -->
                        <div class="mb-4">
                            <h2 class="h3 mb-3">
                                Hello, {{ Auth::guard('customer')->user()->name }} (Not
                                {{ Auth::guard('customer')->user()->name }})

                                <form class="d-inline" id="logout-form" action="{{ route('customer.logout') }}"
                                    method="POST">
                                    @csrf
                                    <button
                                        class="btn btn-link text-success-custom text-decoration-none p-0 m-0 align-baseline"
                                        type="submit">
                                        Log Out
                                    </button>
                                </form>
                            </h2>

                            <p class="text-muted mb-0">
                                From your account dashboard you can view your recent orders, manage your shipping and
                                billing addresses, and edit your password and account details.
                            </p>
                        </div>

                        <!-- Dashboard Content -->
                        {{-- <div class="content-section active" id="dashboard">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <i class="bi bi-bag-check text-success-custom me-2"></i>
                                                Recent Orders
                                            </h5>
                                            <p class="card-text text-muted">View your recent purchases and order history
                                            </p>
                                            <button class="btn btn-success-custom btn-sm"
                                                onclick="showContent('orders', document.querySelector('[onclick*=orders]'))">
                                                View Orders
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <i class="bi bi-gear text-success-custom me-2"></i>
                                                Quick Actions
                                            </h5>
                                            <p class="card-text text-muted">Manage your account settings and preferences
                                            </p>
                                            <button class="btn btn-success-custom btn-sm"
                                                onclick="showContent('account', document.querySelector('[onclick*=account]'))">
                                                Account Settings
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <i class="bi bi-truck text-success-custom me-2"></i>
                                                Track Orders
                                            </h5>
                                            <p class="card-text text-muted">Track your current shipments</p>
                                            <button class="btn btn-success-custom btn-sm"
                                                onclick="showContent('track', document.querySelector('[onclick*=track]'))">
                                                Track Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <i class="bi bi-geo-alt text-success-custom me-2"></i>
                                                Address Book
                                            </h5>
                                            <p class="card-text text-muted">Manage shipping and billing addresses</p>
                                            <button class="btn btn-success-custom btn-sm"
                                                onclick="showContent('address', document.querySelector('[onclick*=address]'))">
                                                Manage Addresses
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Orders Content -->
                        <div class="content-section" id="orders">
                            <h4 class="mb-4">Your Orders</h4>
                            <div class="order-card">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-1">Order #12345</h6>
                                        <small class="text-muted">Placed on December 15, 2024</small>
                                    </div>
                                    <span class="badge bg-success status-badge">Delivered</span>
                                </div>
                                <p class="mb-2">Wireless Bluetooth Headphones</p>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">$89.99</span>
                                    <button class="btn btn-outline-success btn-sm">View Details</button>
                                </div>
                            </div>
                            <div class="order-card">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-1">Order #12344</h6>
                                        <small class="text-muted">Placed on December 10, 2024</small>
                                    </div>
                                    <span class="badge bg-warning status-badge">In Transit</span>
                                </div>
                                <p class="mb-2">Smartphone Case & Screen Protector</p>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">$24.99</span>
                                    <button class="btn btn-outline-success btn-sm">Track Order</button>
                                </div>
                            </div>
                        </div>

                        <!-- Address Content -->
                        <div class="content-section" id="address">
                            <h4 class="mb-4">My Addresses</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Shipping Address</h6>
                                            <button class="btn btn-outline-success btn-sm">Edit</button>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>Raisa Ahmed</strong></p>
                                            <p class="mb-1">123 Main Street</p>
                                            <p class="mb-1">Apartment 4B</p>
                                            <p class="mb-0">New York, NY 10001</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Billing Address</h6>
                                            <button class="btn btn-outline-success btn-sm">Edit</button>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>Raisa Ahmed</strong></p>
                                            <p class="mb-1">456 Oak Avenue</p>
                                            <p class="mb-1">Suite 200</p>
                                            <p class="mb-0">Brooklyn, NY 11201</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success-custom">
                                <i class="bi bi-plus-circle me-2"></i>
                                Add New Address
                            </button>
                        </div>

                        <!-- Account Details Content -->
                        <div class="content-section" id="account">
                            <h4 class="mb-4">Account Details</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="firstName">Full Name</label>
                                            <input class="form-control" id="firstName" type="text" value="Raisa">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input class="form-control" id="email" type="email"
                                                value="raisa@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input class="form-control" id="phone" type="tel"
                                                value="+1 (555) 123-4567">
                                        </div>
                                        <button class="btn btn-success-custom" type="submit">Update Profile</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mb-4">Change Password</h5>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="currentPassword">Current Password</label>
                                            <input class="form-control" id="currentPassword" type="password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="newPassword">New Password</label>
                                            <input class="form-control" id="newPassword" type="password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="confirmPassword">Confirm New
                                                Password</label>
                                            <input class="form-control" id="confirmPassword" type="password">
                                        </div>
                                        <button class="btn btn-success-custom" type="submit">Change Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
