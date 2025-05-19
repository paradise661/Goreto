<header class="header-section">
    <div id="header"  class=" top-header">
        <div class=" container-fluid d-none d-lg-block py-2 ">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo-part d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand nav-logo" href="#"><img
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid ">
            <a class="navbar-brand nav-logo d-block d-lg-none" href="#">
                <img src="{{ asset('frontend/assets/images/logo.jpg') }}" alt="Logo">
            </a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ri-menu-line"></i>
            </button>
            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Dropdown for Shop by Category -->
                    <li class="nav-item dropdown mega-dropdown nav-text">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownModel" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Personal Care<i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu container " aria-labelledby="navbarDropdownModel">
                            <div class="row">
                                <!-- Personal Care -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Personal Care</h4>
                                    <li><a class="dropdown-item" href="#">Accessories
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>

                                </div>
                                <!--  -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Baby Care</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>
                                <!-- Birthday Gifts -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Device</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>

                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown nav-text">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownModel" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product Under 1000 <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu container " aria-labelledby="navbarDropdownModel">
                            <div class="row">
                                <!-- Personal Care -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Wellness</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>

                                </div>

                                <!-- Candlelight Dinners -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Candlelight Dinners</h4>
                                    <li><a class="dropdown-item" href="#">Private Couple Experiences</a></li>
                                    <li><a class="dropdown-item" href="#">Rooftop Dinners</a></li>
                                    <li><a class="dropdown-item" href="#">Poolside Candlelight Dinners</a></li>
                                    <li><a class="dropdown-item" href="#">Private Dinner & Movie</a></li>

                                </div>

                                <!-- Anniversary Gifts -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Digestive Health</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>

                                <!-- Image Section (Only on Large Screens) -->
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown nav-text">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownModel" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Device <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu container " aria-labelledby="navbarDropdownModel">
                            <div class="row">
                                <!-- Personal Care -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Device</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>
                                <!-- Personal Care -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Device</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>
                                <!-- Digestive Health -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Digestive Health</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>

                                <!-- Image Section (Only on Large Screens) -->
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown nav-text">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownModel" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Family Care <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu container " aria-labelledby="navbarDropdownModel">
                            <div class="row">
                                <!-- Personal Care -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Device</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Family Care</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>
                                <!-- Digestive Health -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Family Care</h4>
                                    <li><a class="dropdown-item" href="#">baby & Infant Supplements</a></li>
                                    <li><a class="dropdown-item" href="#">baby & Infant Supplements</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>
                                <!-- Digestive Health -->
                                <div class="col-md-4">
                                    <h4 class="header-title">Digestive Health</h4>
                                    <li><a class="dropdown-item" href="#">Baby & Infant Supplements
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Diapers</a></li>
                                    <li><a class="dropdown-item" href="#">General Hygience</a></li>
                                    <li><a class="dropdown-item" href="#">Mens Cares</a></li>
                                </div>
                                <!-- Image Section (Only on Large Screens) -->
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
