<style>
    body {
        background: #f5f5f5;
    }

    .modal-content {
        border-radius: 1rem;
    }

    .login-visual,
    .register-visual {
        background: transparent !important;
        /* remove inner gradient */
        color: white !important;
        width: 100%;
        text-align: center;
    }

    .login-visual h4,
    .register-visual h4 {
        color: #00b2f0;
    }

    .btn-login {
        background-color: #00b2f0;
        color: white;
        font-weight: bold;
    }

    .btn-register {
        background-color: #00b2f0;
        color: white;
        font-weight: bold;
    }

    .btn-login:hover {
        background-color: #009f3c;
        color: white;
    }

    .btn-register:hover {
        background-color: #009f3c;
        color: white;
    }

    .form-link {
        color: #009f3c;
        text-decoration: none;
        cursor: pointer;
    }

    .form-link:hover {
        color: #007c2e;
        text-decoration: underline;
    }

    #loginError,
    #registerError {
        display: none;
    }

    .modal-lg {
        max-width: 800px;
    }

    .visual-side {
        background: linear-gradient(135deg, #f8f9fa, #14d97e);
        color: white;
        min-height: 100%;
    }

    .visual-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
</style>

<body>

    <!-- Trigger buttons for demo -->
    <div class="d-none">
        <button class="btn btn-primary" id="loginLink">Open Login</button>
        <button class="btn btn-success" id="showRegisterModal">Open Register</button>
    </div>

    <!-- Combined Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative shadow-lg">

                <!-- Close Button -->
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" type="button"
                    aria-label="Close"></button>

                <div class="row g-0">
                    <!-- Left Visual Side -->
                    <div
                        class="col-md-5 d-none d-md-flex flex-column justify-content-center align-items-center p-4 visual-side">
                        <div class="visual-content text-center w-100 h-100">
                            <img class="img-fluid mb-3"
                                src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Goreto' }}">

                            <div class="login-visual" id="loginVisual">
                                <h4 class="fw-bold text-white">Welcome Back</h4>
                            </div>

                            <div class="register-visual" id="registerVisual" style="display: none;">
                                <h4 class="fw-bold">Register Now!</h4>
                                <p class="px-3 text-black">Create an account to enjoy exclusive offers and a
                                    seamless experience.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Form Side -->
                    <div class="col-md-7 p-5">
                        <!-- Login Form -->
                        <!-- Login Section -->
                        <div id="loginSection">
                            <h4 class="text-center text-primary mb-4">Login to Goreto Pharmacy</h4>

                            <div class="alert alert-danger py-2 px-3 d-none" id="loginError" role="alert"></div>

                            <form id="loginForm">
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email address *</label>
                                    <input class="form-control form-control-lg" id="email" name="email"
                                        type="email" required placeholder="Enter your email" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password">Password *</label>
                                    <input class="form-control form-control-lg" id="password" name="password"
                                        type="password" required placeholder="Enter your password" />
                                </div>

                                <div class="d-grid mb-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                                </div>

                                <div class="text-center mb-2">
                                    <a class="form-link" href="#">Forgot Password?</a>
                                </div>

                                <div class="text-center">
                                    <span>Don't have an account?</span>
                                    <a class="form-link fw-semibold" id="switchToRegister" href="#">Sign Up</a>
                                </div>
                            </form>
                        </div>

                        <!-- Register Form -->
                        <div id="registerSection" style="display: none;">
                            <h4 class="text-center text-primary mb-4">Customer Registration</h4>
                            <div class="alert alert-danger py-2 px-3" id="registerError" role="alert"></div>

                            <form id="registerForm">
                                <div class="mb-3">
                                    <label class="form-label" for="registerName">Full Name *</label>
                                    <input class="form-control form-control-lg" id="registerName" type="text"
                                        required placeholder="Enter your full name" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="registerEmail">Email address *</label>
                                    <input class="form-control form-control-lg" id="registerEmail" type="email"
                                        required placeholder="Enter your email" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="registerPassword">Password *</label>
                                    <input class="form-control form-control-lg" id="registerPassword" type="password"
                                        required placeholder="Enter a password" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="registerPasswordConfirm">Confirm Password
                                        *</label>
                                    <input class="form-control form-control-lg" id="registerPasswordConfirm"
                                        type="password" required placeholder="Confirm your password" />
                                </div>

                                <div class="d-grid mb-3">
                                    <button class="btn btn-register btn-lg" type="submit">Register</button>
                                </div>

                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a class="form-link fw-semibold" id="switchToLogin" href="#">Login
                                        here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Modal Behavior -->
    <script>
        const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        const loginSection = document.getElementById('loginSection');
        const registerSection = document.getElementById('registerSection');
        const loginVisual = document.getElementById('loginVisual');
        const registerVisual = document.getElementById('registerVisual');

        // Always show login when "Login" link is clicked
        document.querySelectorAll('[data-bs-target="#loginModal"]').forEach(el => {
            el.addEventListener('click', () => {
                loginSection.style.display = 'block';
                loginVisual.style.display = 'block';
                registerSection.style.display = 'none';
                registerVisual.style.display = 'none';
            });
        });

        // Switch to Register
        document.getElementById('switchToRegister').addEventListener('click', (e) => {
            e.preventDefault();
            loginSection.style.display = 'none';
            loginVisual.style.display = 'none';
            registerSection.style.display = 'block';
            registerVisual.style.display = 'block';
        });

        // Switch to Login
        document.getElementById('switchToLogin').addEventListener('click', (e) => {
            e.preventDefault();
            registerSection.style.display = 'none';
            registerVisual.style.display = 'none';
            loginSection.style.display = 'block';
            loginVisual.style.display = 'block';
        });

        // Reset forms and errors on modal close
        document.getElementById('loginModal').addEventListener('hidden.bs.modal', () => {
            document.getElementById('loginForm').reset();
            document.getElementById('registerForm').reset();
            document.getElementById('loginError').style.display = 'none';
            document.getElementById('registerError').style.display = 'none';
        });
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const loginError = document.getElementById('loginError');

            loginForm.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Reset error box
                loginError.classList.add('d-none');
                loginError.innerHTML = '';

                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                try {
                    const response = await fetch("{{ route('customer.login.submit') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            email,
                            password
                        })
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Redirect on successful login
                        window.location.href = "{{ route('customer.dashboard') }}";
                    } else {
                        if (data.errors) {
                            const messages = Object.values(data.errors).flat();
                            loginError.innerHTML = messages.map(m => `<div>${m}</div>`).join('');
                        } else if (data.message) {
                            loginError.innerHTML = `<div>${data.message}</div>`;
                        }
                        loginError.classList.remove('d-none');
                    }
                } catch (error) {
                    loginError.innerHTML = '<div>Something went wrong. Please try again.</div>';
                    loginError.classList.remove('d-none');
                    console.error(error);
                }
            });
        });
    </script>
