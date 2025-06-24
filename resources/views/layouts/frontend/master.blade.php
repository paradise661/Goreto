<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('seo')

    <link rel="icon" type="image/x-icon" href="" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

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

        /* PDF Preview Container */
        #pdfPreview {
            display: none;
            width: 80px;
            height: 100px;
            border: 2px solid #009f3c;
            border-radius: 8px;
            background-color: #f0f9ff;
            color: #009f3c;
            font-weight: 600;
            font-size: 0.8rem;
            text-align: center;
            padding: 0.5rem 0;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0.5rem 0;
            user-select: none;
        }

        #pdfPreview svg {
            width: 40px;
            height: 40px;
            margin-bottom: 0.3rem;
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
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1080;">
        <div class="toast align-items-center text-bg-success border-0" id="cartToast" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">✅ Prescription uploaded successfully!</div>
                <button class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" type="button"
                    aria-label="Close"></button>
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

    <!-- Doctor Info Modal -->
    <div class="modal fade" id="doctorModal" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="doctorModalLabel">Confirm Prescription Details</h5>
                    <button class="btn-close" id="modalCancelBtn" type="button" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <!-- Preview Image -->
                    <img class="img-fluid mb-3" id="previewImage" src="#" alt="Preview"
                        style="max-height: 180px; display:none;" />

                    <!-- PDF Preview -->
                    <div class="d-flex" id="pdfPreview">
                        <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6 1v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h7l5 5z" />
                        </svg>
                        <div class="text-truncate" id="pdfFilename" style="max-width: 70px;"></div>
                    </div>

                    <input class="form-control mb-2" id="doctorName" type="text" placeholder="Doctor Name"
                        maxlength="255" />
                    <input class="form-control mb-2" id="doctorTitle" type="text" placeholder="Doctor Title"
                        maxlength="255" />
                    <textarea class="form-control mb-3" id="message" rows="3" placeholder="Message (optional)" maxlength="1000"></textarea>

                    <div>
                        <button class="btn btn-success me-2" id="confirmBtn" type="button">Upload</button>
                        <button class="btn btn-secondary" id="cancelBtn" type="button">Cancel</button>
                    </div>
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

                let selectedFile = null;

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
                    selectedFile = null;
                    doctorModal.hide();
                }

                // Show preview for image or pdf and open modal
                fileInput.addEventListener('change', () => {
                    const file = fileInput.files[0];
                    if (!file) return;

                    selectedFile = file;

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
                        pdfFilename.textContent = file.name;

                        doctorModal.show();
                    } else {
                        alert('Unsupported file type! Please upload images or PDFs only.');
                        fileInput.value = '';
                    }
                });

                confirmBtn.addEventListener('click', () => {
                    if (!selectedFile) {
                        alert('Please select a file first.');
                        return;
                    }

                    const formData = new FormData();
                    formData.append('file', selectedFile);
                    formData.append('doctor_name', doctorName.value);
                    formData.append('doctor_title', doctorTitle.value);
                    formData.append('message', message.value);

                    fetch("{{ route('prescription.upload') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: formData,
                            credentials: 'include'
                        })
                        .then(async response => {
                            const isJson = response.headers.get('content-type')?.includes(
                                'application/json');
                            const data = isJson ? await response.json() : null;

                            if (!response.ok) {
                                const errorMsg = data?.message ||
                                    'Upload failed. Server returned an error.';
                                throw new Error(errorMsg);
                            }

                            if (data.success) {
                                const cartToast = new bootstrap.Toast(document.getElementById(
                                    'cartToast'));
                                document.querySelector('#cartToast .toast-body').textContent =
                                    '✅ Prescription uploaded successfully!';
                                cartToast.show();
                                clearModal();
                            } else {
                                alert('Upload failed. ' + (data.message || 'Please try again.'));
                            }
                        })
                        .catch(error => {
                            console.error('Full error object:', error);
                            alert('❌ Upload failed: ' + error.message);
                        });


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
