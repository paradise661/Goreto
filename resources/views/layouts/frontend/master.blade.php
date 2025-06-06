<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}
    @yield('seo')
    {{-- <title>Flyeast Nepal</title> --}}
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <!-- if you're using remixicon -->
    <style>
        .premium-dropdown {
            position: relative;
            display: inline-block;
        }

        .premium-dropdown .premium-dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 0;
            z-index: 1050;
            min-width: 220px;
            box-shadow: 0 0.75rem 1.5rem #00b2f0;
            border-radius: 12px;
            padding: 0.5rem 0;
            background-color: #fff;
            border: none;
        }

        .premium-dropdown:hover .premium-dropdown-menu,
        .premium-dropdown:focus-within .premium-dropdown-menu {
            display: block;
        }

        .premium-dropdown .premium-dropdown-item {
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.65rem 1.2rem;
            color: #009f3c;
            display: flex;
            align-items: center;
            border-radius: 50px;
            margin: 0.25rem 0;
            transition: background-color 0.2s ease, color 0.2s ease;
            text-decoration: none;
        }

        .premium-dropdown .premium-dropdown-item i {
            font-size: 1.1rem;
            color: #009f3c;
            margin-right: 0.5rem;
        }

        .premium-dropdown .premium-dropdown-item:hover {
            background-color: #f0f9ff;
            color: #009f3c;
            font-weight: 700;
            text-decoration: none;
        }

        .premium-dropdown .premium-header-icon {
            cursor: pointer;
            padding: 10px;
            display: inline-block;
            font-size: 1.5rem;
            color: #00b2f0;
            transition: color 0.3s ease;
        }

        .premium-dropdown .premium-header-icon:hover {
            color: #009f3c;
        }
    </style>

</head>

<body>
    @include('layouts.frontend.header')

    {{-- @include('auth.customer-login') --}}
    {{-- @include('auth.customer-register') --}}
    <!-- Notification alerts -->
    <main>
        @yield('content')
    </main>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
    @include('layouts.frontend.footer')
    <!-- Vendors JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('search-input');
            const suggestionsList = document.getElementById('suggestions-list');

            input.addEventListener('input', function() {
                const query = this.value;

                if (query.length < 2) {
                    suggestionsList.style.display = 'none';
                    return;
                }

                fetch(`/search/suggestions?query=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        suggestionsList.innerHTML = '';
                        if (data.length) {
                            data.forEach(item => {
                                const li = document.createElement('li');
                                li.textContent = item;
                                li.classList.add('list-group-item');
                                li.style.cursor = 'pointer';
                                li.addEventListener('click', () => {
                                    input.value = item;
                                    input.form.submit();
                                });
                                suggestionsList.appendChild(li);
                            });
                            suggestionsList.style.display = 'block';
                        } else {
                            suggestionsList.style.display = 'none';
                        }
                    });
            });

            document.addEventListener('click', function(e) {
                if (!input.contains(e.target) && !suggestionsList.contains(e.target)) {
                    suggestionsList.style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<!-- swiper for review -->
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min1.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min2.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

<script>
    function showContent(contentId, element) {
        // Hide all content sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => section.classList.remove('active'));

        // Show selected content
        document.getElementById(contentId).classList.add('active');

        // Update active nav item
        const navLinks = document.querySelectorAll('.nav-link-custom');
        navLinks.forEach(link => link.classList.remove('active'));
        element.classList.add('active');

        // Close sidebar on mobile after selection
        if (window.innerWidth <= 768) {
            closeSidebar();
        }
    }

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.querySelector('.mobile-overlay');

        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
    }

    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.querySelector('.mobile-overlay');

        sidebar.classList.remove('show');
        overlay.classList.remove('show');
    }



    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const menuBtn = document.querySelector('.mobile-menu-btn');

        if (window.innerWidth <= 768 &&
            sidebar.classList.contains('show') &&
            !sidebar.contains(event.target) &&
            !menuBtn.contains(event.target)) {
            closeSidebar();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            closeSidebar();
        }
    });
</script>

</body>

</html>
