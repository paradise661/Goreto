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
            z-index: 1050;
            min-width: 220px;
            box-shadow: 0 0.75rem 1.5rem #00b2f0;
            border-radius: 12px;
            padding: 0.5rem 0;
            background-color: #fff;
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
            text-decoration: none;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .premium-dropdown .premium-dropdown-item i {
            font-size: 1.1rem;
            margin-right: 0.5rem;
        }

        .premium-dropdown .premium-dropdown-item:hover {
            background-color: #f0f9ff;
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
                    {{-- @include('frontend.auth.login-form') --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script>
        const isCustomerLoggedIn = @json(Auth::guard('customer')->check());
        $(document).on('click', '#uploadPrescriptionBtn', function(e) {
            e.preventDefault();
            if (isCustomerLoggedIn) {
                window.location.href = "{{ route('frontend.prescription') }}";
            } else {
                new bootstrap.Modal($('#loginModal')).show();
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.add-to-cart-btn', function(e) {
                e.preventDefault();
                const btn = $(this);

                @auth('customer')
                    $.post("{{ route('cart.add') }}", {
                        id: btn.data('id'),
                        name: btn.data('name'),
                        price: btn.data('price'),
                        image: btn.data('image')
                    }, function(response) {
                        new bootstrap.Toast($('#cartToast')[0]).show();
                        if (response.totalUniqueItems) {
                            $('#cart-count').text(response.totalUniqueItems);
                        }
                    }).fail(function(xhr) {
                        alert('Something went wrong!');
                        console.log(xhr.responseText);
                    });
                @else
                    new bootstrap.Modal($('#loginModal')).show();
                @endauth
            });

            $(document).on('click', '.remove-item', function(e) {
                e.preventDefault();
                const btn = $(this);
                const itemId = btn.data('id');
                const row = btn.closest('tr');

                $.ajax({
                    url: `/cart/remove/${itemId}`,
                    type: 'POST',
                    data: {
                        _method: 'DELETE'
                    },
                    success: function(response) {
                        row.remove();
                        if (response.totalUniqueItems !== undefined) {
                            $('#cart-count').text(response.totalUniqueItems);
                        }
                        showToast('Item removed from cart!');
                        if (typeof recalculateTotals === 'function') {
                            recalculateTotals();
                        }
                    },
                    error: function(xhr) {
                        alert('Failed to remove item!');
                        console.log(xhr.responseText);
                    }
                });
            });

            function showToast(message) {
                let toastHtml = `
                    <div class="toast align-items-center text-bg-success border-0 position-fixed top-0 end-0 m-3" role="alert" id="removeToast">
                        <div class="d-flex">
                            <div class="toast-body">${message}</div>
                            <button class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                        </div>
                    </div>`;
                $('body').append(toastHtml);
                const toastEl = document.getElementById('removeToast');
                const toast = new bootstrap.Toast(toastEl);
                toast.show();
                toastEl.addEventListener('hidden.bs.toast', () => $(toastEl).remove());
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cartBody = document.getElementById("cart-body");
            const grandTotalElem = document.getElementById("grand-total");
            const csrfToken = '{{ csrf_token() }}';

            function updateTotals() {
                let grandTotal = 0;
                cartBody?.querySelectorAll("tr").forEach(row => {
                    const price = parseFloat(row.querySelector(".price")?.dataset.price || 0);
                    const qty = parseInt(row.querySelector(".qty")?.value || 1);
                    const total = price * qty;
                    row.querySelector(".item-total").innerText = total.toLocaleString();
                    grandTotal += total;
                });
                grandTotalElem.innerText = `Rs. ${grandTotal.toLocaleString()}`;
            }

            cartBody?.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                const id = row?.dataset.id;
                if (!id) return;

                if (e.target.classList.contains("plus") || e.target.classList.contains("minus")) {
                    const increase = e.target.classList.contains("plus");
                    fetch(`/cart/${increase ? 'increase' : 'decrease'}/${id}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        }
                    }).then(res => res.json()).then(() => {
                        const qtyInput = row.querySelector(".qty");
                        qtyInput.value = increase ? parseInt(qtyInput.value) + 1 : Math.max(1,
                            parseInt(qtyInput.value) - 1);
                        updateTotals();
                    });
                }
            });

            updateTotals();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('search-input');
            const suggestionsList = document.getElementById('suggestions-list');

            input?.addEventListener('input', () => {
                const query = input.value;
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

            document.addEventListener('click', (e) => {
                if (!input.contains(e.target) && !suggestionsList.contains(e.target)) {
                    suggestionsList.style.display = 'none';
                }
            });
        });
    </script>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const fileInput = document.getElementById('fileInput');
                const doctorModalEl = document.getElementById('doctorModal');
                const doctorModal = new bootstrap.Modal(doctorModalEl);

                const previewImage = document.getElementById('previewImage');
                const pdfPreview = document.getElementById('pdfPreview');
                const pdfFilename = document.getElementById('pdfFilename');

                const doctorName = document.getElementById('doctorName');
                const doctorTitle = document.getElementById('doctorTitle');
                const message = document.getElementById('message');

                const confirmBtn = document.getElementById('confirmBtn');
                const modalCancelBtn = document.getElementById('modalCancelBtn');
                const cancelBtn = document.getElementById('cancelBtn');

                const cartToast = document.getElementById('cartToast');
                const cartToastBody = cartToast.querySelector('.toast-body');
                const toast = new bootstrap.Toast(cartToast);

                // Clear modal fields & previews
                function clearModal() {
                    previewImage.style.display = 'none';
                    previewImage.src = '#';

                    pdfPreview.style.display = 'none';
                    pdfFilename.textContent = '';

                    doctorName.value = '';
                    doctorTitle.value = '';
                    message.value = '';

                    fileInput.value = '';
                    doctorModal.hide();
                }

                // Show preview for image or pdf and open modal
                fileInput.addEventListener('change', () => {
                    const file = fileInput.files[0];
                    if (!file) return;

                    const fileType = file.type;

                    if (fileType.startsWith('image/')) {
                        // Show image preview
                        const reader = new FileReader();
                        reader.onload = e => {
                            previewImage.src = e.target.result;
                            previewImage.style.display = 'block';

                            pdfPreview.style.display = 'none';
                            pdfFilename.textContent = '';
                            doctorModal.show();
                        };
                        reader.readAsDataURL(file);

                    } else if (fileType === 'application/pdf') {
                        // Show pdf icon and filename (small, clear)
                        previewImage.style.display = 'none';

                        pdfPreview.style.display = 'flex';
                        pdfPreview.style.flexDirection = 'column';
                        pdfPreview.style.alignItems = 'center';
                        pdfPreview.style.justifyContent = 'center';
                        pdfFilename.textContent = file.name;

                        doctorModal.show();
                    } else {
                        alert('Unsupported file type! Please upload images or PDFs only.');
                        fileInput.value = '';
                    }
                });

                confirmBtn.addEventListener('click', () => {
                    // TODO: Add actual upload logic here (AJAX or form submit)

                    cartToastBody.textContent = "✅ Prescription uploaded successfully!";
                    toast.show();

                    clearModal();
                });

                modalCancelBtn.addEventListener('click', clearModal);
                cancelBtn.addEventListener('click', clearModal);
            });
        </script>
    @endpush

    @stack('scripts')
    @yield('scripts')
</body>

</html>
