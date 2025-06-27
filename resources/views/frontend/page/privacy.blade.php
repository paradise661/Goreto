@extends('layouts.frontend.master')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Heading -->
            <div class="text-center mb-5">
                <h1 class="fw-bold display-5" style="color: #00AEEF;">Shipping Policy</h1>
                <p class="text-muted fs-5">Everything you need to know about our delivery and payment process.</p>
                <div class="mx-auto" style="width: 60px; height: 4px; background-color: #00AEEF; border-radius: 2px;"></div>
            </div>

            <!-- Policy Content -->
            <div class="bg-white p-5 rounded-4 shadow-sm">
                @if (!empty($content->description))
                    <article class="policy-content lh-lg fs-6 text-secondary">
                        {!! $content->description !!}
                    </article>

                    <!-- Contact Us Section -->
                    <div class="mt-5 border-top pt-4">
                        <h4 class="fw-semibold mb-3" style="color: #00AEEF;">5. 📞 Contact Us</h4>
                        <p>For any questions regarding shipping, feel free to reach out:</p>
                        <ul class="ps-3">
                            <li><strong>Hotline Numbers:</strong></li>
                            📞<a class="text-success" href="tel:{{ $setting['site_phone'] ?? '' }}">
                                <i class="fas fa-phone"></i> {{ $setting['site_phone'] ?? '' }}
                            </a>

                            <li class="mt-2"><strong>Email:</strong><br>✉️
                                <a class="text-success" href="mailto:{{ $setting['site_email'] ?? '' }}"><i
                                        class="fas fa-envelope"></i>
                                    {{ $setting['site_email'] ?? '' }}</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        Shipping policy content coming soon.
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
