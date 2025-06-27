@extends('layouts.frontend.master')

@section('content')
    <section class="about-us-section py-5 bg-light">
        <div class="container">
            <!-- Heading -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold display-5" style="color: #00AEEF;">Terms & Conditions</h2>
                    </p>
                    <div class="mx-auto mt-3"
                        style="width: 60px; height: 4px; background-color: #00AEEF; border-radius: 2px;"></div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <!-- Optional image (only show if image exists) -->
                @if (!empty($content->image))
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="about-image-wrap text-center">
                            {!! get_image($content->image, 'img-fluid rounded-4 shadow') !!}
                        </div>
                    </div>
                @endif

                <!-- Content -->
                <div class="{{ !empty($content->image) ? 'col-lg-7' : 'col-lg-10' }}">
                    <div class="about-content bg-white p-4 p-md-5 rounded-4 shadow-sm lh-lg fs-6 text-secondary">
                        {!! $content->description ?? '<p class="text-muted">No content available at the moment.</p>' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
