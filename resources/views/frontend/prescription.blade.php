<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body>
    {{-- header --}}
    <div class=" top-header" id="header">
        <div class=" container-fluid d-none d-lg-block py-2 ">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo-part d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand nav-logo" href="/"><img
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
                        <button class="btn btn-primary">
                            <i class="ri-camera-switch-line camera-icon"></i> Upload Prescription
                        </button>
                    </a>
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
    <!-- banner section start -->
    <section class="banner-section">
        <div class="container banner-content">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li>Prescription</li>

            </ul>
        </div>
    </section>
    <section class="upload-section py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
              <div class="card shadow-lg border-0 rounded-4 upload-card">
                <div class="card-body text-center p-5">
                  <div class="upload-icon mb-4">
                    <svg width="80" height="80" fill="#0d6efd" viewBox="0 0 24 24">
                      <path d="M12 2L6 8h4v6h4V8h4l-6-6zm-9 18v2h18v-2H3z"/>
                    </svg>
                  </div>
                  <h3 class="card-title mb-3 fw-bold">Upload Your Prescription</h3>
                  {{-- <p class="text-muted mb-4">Drag & drop your file here or click anywhere below</p> --}}
      
                  <form>
                    <label class="file-drop-area rounded-4 p-5 border border-dashed text-center">
                      <input type="file" class="custom-file-input" />
                      <div class="upload-placeholder">
                        <svg width="40" height="40" fill="#6c757d" viewBox="0 0 24 24" class="mb-2">
                          <path d="M16 13v-2h-4V7h-2v4H6v2h4v4h2v-4h4z" />
                        </svg>
                        <span class="fw-semibold text-secondary">Drag & drop your file here</span>
                      </div>
                    </label>
      
                    {{-- <button type="submit" class="btn btn-primary mt-5 w-100 py-3 fs-5 rounded-pill">Submit Prescription</button> --}}
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
<script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<!-- swiper for review -->
<!-- Swiper JS -->
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
</html>
