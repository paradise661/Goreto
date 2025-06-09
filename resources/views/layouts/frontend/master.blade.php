<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('seo')
    <link rel="icon" type="image/x-icon" href="">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">

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
        }

        .premium-dropdown .premium-header-icon {
            cursor: pointer;
            padding: 10px;
            font-size: 1.5rem;
            color: #00b2f0;
        }

        .premium-dropdown .premium-header-icon:hover {
            color: #009f3c;
        }
    </style>
</head>

<body>
    @include('layouts.frontend.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    <!-- Toast -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast align-items-center text-bg-success border-0" id="cartToast" role="alert">
            <div class="d-flex">
                <div class="toast-body">✅ Product added to cart!</div>
                <button class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" type="button"></button>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- @include('frontend.auth.login-form') Use your actual login form --}}
                </div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    <script>
        $(document).ready(function() {
            // CSRF setup for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // ADD TO CART
            $(document).on('click', '.add-to-cart-btn', function(e) {
                e.preventDefault();
                let btn = $(this);

                @auth('customer')
                    let productId = btn.data('id');
                    let productName = btn.data('name');
                    let productPrice = btn.data('price');
                    let productImage = btn.data('image');

                    $.ajax({
                        url: "{{ route('cart.add') }}",
                        method: "POST",
                        data: {
                            id: productId,
                            name: productName,
                            price: productPrice,
                            image: productImage,
                        },
                        success: function(response) {
                            let toast = new bootstrap.Toast(document.getElementById(
                                'cartToast'));
                            toast.show();
                        },
                        error: function(xhr) {
                            alert('Something went wrong!');
                            console.log(xhr.responseText);
                        }
                    });
                @else
                    // Open modal instead of redirecting
                    let loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                    loginModal.show();
                @endauth
            });

            // REMOVE ITEM FROM CART
            $(document).on('click', '.remove-item', function(e) {
                e.preventDefault();
                let btn = $(this);
                let itemId = btn.data('id');
                let row = btn.closest('tr');

                $.ajax({
                    url: "{{ url('/cart/remove') }}/" + itemId,
                    method: "POST",
                    data: {
                        _method: 'DELETE',
                    },
                    success: function(response) {
                        row.remove();

                        if (typeof recalculateTotals === 'function') {
                            recalculateTotals();
                        }

                        let toastEl = document.getElementById('removeToast');
                        if (toastEl) {
                            let toast = new bootstrap.Toast(toastEl);
                            toast.show();
                        } else {
                            let toastHtml = `
                                <div class="toast align-items-center text-bg-success border-0 position-fixed top-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" id="removeToast">
                                    <div class="d-flex">
                                        <div class="toast-body">Item removed from cart!</div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                                    </div>
                                </div>`;
                            $('body').append(toastHtml);
                            let newToastEl = document.getElementById('removeToast');
                            let toast = new bootstrap.Toast(newToastEl);
                            toast.show();
                            newToastEl.addEventListener('hidden.bs.toast', function() {
                                $(newToastEl).remove();
                            });
                        }
                    },
                    error: function(xhr) {
                        alert('Failed to remove item!');
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <!-- Search Suggestion Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('search-input');
            const suggestionsList = document.getElementById('suggestions-list');

            input?.addEventListener('input', function() {
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

    <!-- Quantity and Cart Total Script -->
    <script>
        function recalculateTotals() {
            let grandTotal = 0;
            $('#cart-body tr').each(function() {
                const row = $(this);
                const price = parseFloat(row.find('.price').data('price'));
                const qty = parseInt(row.find('.qty').val());
                const total = price * qty;
                row.find('.item-total').text(total.toLocaleString());
                grandTotal += total;
            });
            $('#grand-total').text('Rs. ' + grandTotal.toLocaleString());
        }

        $(document).ready(function() {
            recalculateTotals();

            $(document).on('click', '.plus', function() {
                const qtyInput = $(this).closest('.quantity-control').find('.qty');
                qtyInput.val(parseInt(qtyInput.val()) + 1);
                recalculateTotals();
            });

            $(document).on('click', '.minus', function() {
                const qtyInput = $(this).closest('.quantity-control').find('.qty');
                const currentQty = parseInt(qtyInput.val());
                if (currentQty > 1) {
                    qtyInput.val(currentQty - 1);
                    recalculateTotals();
                }
            });

            $(document).on('click', '.remove-item', function() {
                $(this).closest('tr').remove();
                recalculateTotals();
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
