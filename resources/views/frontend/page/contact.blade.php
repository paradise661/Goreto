@extends('layouts.frontend.master')
<style>
    .social-icon {
        display: inline-block;
    }
</style>
@section('content')
    <section class="contact-us-section py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <img class="mb-3"
                    src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                    alt="Goreto Pharmacy Logo" style="height: 80px;">
                <h2 class="fw-bold" style="color: #00AEEF;">Contact Us</h2>
                <p class="text-muted">We’re always here to help you with your health and wellness needs.</p>
            </div>

            <div class="row text-center gy-4">
                <!-- Phone Contact -->
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 shadow-sm h-100">
                        <h5 class="fw-bold" style="color: #00AEEF;">📞 Give Us a Call</h5>
                        <a class="text-success" href="tel:{{ $setting['site_phone'] ?? '' }}">
                            <i class="fas fa-phone"></i> {{ $setting['site_phone'] ?? '' }}
                        </a>
                        @if ($setting['site_phone_two'])
                            <br>
                            <a href="tel:{{ $setting['site_phone_two'] ?? '' }}"><i class="fas fa-phone"></i>
                                {{ $setting['site_phone_two'] ?? '' }}</a>
                        @endif

                        <small class="text-muted"></small>
                    </div>
                </div>

                <!-- Email Contact -->
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 shadow-sm h-100">
                        <h5 class="fw-bold" style="color: #00AEEF;">📧 Email Us</h5>
                        <p class="mb-0">
                            <a class="text-success" href="mailto:{{ $setting['site_email'] ?? '' }}"><i
                                    class="fas fa-envelope"></i>
                                {{ $setting['site_email'] ?? '' }}</a>
                            @if ($setting['site_email_two'])
                                <br />
                                <a href="mailto:{{ $setting['site_email_two'] ?? '' }}"><i class="fas fa-envelope"></i>
                                    {{ $setting['site_email_two'] ?? '' }}</a>
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 shadow-sm h-100 text-center">
                        <h5 class="fw-bold mb-3" style="color: #00AEEF;">🔗 Connect With Us</h5>
                        @if ($socialdata->isNotEmpty())
                            <div class="d-flex justify-content-center gap-3">
                                @foreach ($socialdata as $data)
                                    <a class="social-link" href="{{ $data->link ?? '#' }}" target="_blank">
                                        <i class="{{ $data->icon ?? '' }} social-icon"></i>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
