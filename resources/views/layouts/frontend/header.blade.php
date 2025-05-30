<header class="header-section">
    <div class=" top-header" id="header">
        <div class=" container-fluid d-none d-lg-block py-2 ">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo-part d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand nav-logo" href="/"><img
                                src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Goreto' }}"></a>
                    </div>
                </div>
                <form class="custom-search-form" action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control search-input" type="search" name="query"
                            placeholder="What decor are you looking for?" aria-label="Search" required>

                        <button class="btn custom-btn" type="submit">
                            Search
                        </button>
                    </div>
                </form>
                <div class="button-part d-flex align-items-center gap-5">
                    <a href="{{ route('frontend.prescription') }}">
                        <button class="btn btn-primary">
                            <i class="ri-camera-switch-line camera-icon"></i> Upload Prescription
                        </button>
                    </a>

                    <div class="premium-dropdown">
                        <span class="premium-header-icon">
                            <i class="ri-user-line"></i>
                        </span>
                        <ul class="premium-dropdown-menu">
                            <li>
                                <a class="premium-dropdown-item" href="#">
                                    <i class="bi bi-info-circle"></i>About Us
                                </a>
                            </li>
                            <li>
                                <a class="premium-dropdown-item" href="#">
                                    <i class="bi bi-envelope"></i>Contact Us
                                </a>
                            </li>
                            <li>
                                <a class="premium-dropdown-item" href="#">
                                    <i class="bi bi-file-earmark-text"></i>Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a class="premium-dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal"
                                    href="#">
                                    <i class="bi bi-box-arrow-in-right"></i><strong>Login</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid ">
            <a class="navbar-brand nav-logo d-block d-lg-none" href="#">
                <img src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                    alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Goreto' }}">
            </a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" type="button"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ri-menu-line"></i>
            </button>
            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($categories->sortBy(fn($cat) => $cat->order ?? $cat->created_at)->take(8) as $mainCategory)
                        <li class="nav-item dropdown mega-dropdown nav-text">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownModel" data-bs-toggle="dropdown"
                                href="{{ route('category.products', $mainCategory->slug) }}" role="button"
                                aria-expanded="false">
                                {{ $mainCategory->name }}<i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu mega-dropdown-menu container"
                                aria-labelledby="navbarDropdownModel">
                                <div class="row">
                                    @foreach ($mainCategory->children->sortBy(fn($cat) => $cat->order ?? $cat->created_at)->chunk(2) as $chunk)
                                        <div class="col-md-4">
                                            @foreach ($chunk as $childCategory)
                                                <li>
                                                    <a class="dropdown-item fw-bold text-decoration-underline"
                                                        href="{{ route('category.products', $childCategory->slug) }}">
                                                        {{ $childCategory->name }}
                                                    </a>

                                                    @if ($childCategory->children->count())
                                                        <ul class="list-unstyled ps-3">
                                                            @foreach ($childCategory->children->sortBy(fn($cat) => $cat->order ?? $cat->created_at)->take(5) as $grandChild)
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('category.products', $grandChild->slug) }}">
                                                                        {{ $grandChild->name }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>

            </ul>
            </li>

            </ul>
        </div>
        </div>
    </nav>
</header>
