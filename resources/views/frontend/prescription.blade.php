@extends('layouts.frontend.master')
@section('content')
    <section>

        <!-- banner section start -->

        <section class="upload-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="card shadow-lg border-0 rounded-4 upload-card">
                            <div class="card-section text-center p-5">
                                <div class="upload-icon mb-4">
                                    <svg width="80" height="80" fill="#0d6efd" viewBox="0 0 24 24">
                                        <path d="M12 2L6 8h4v6h4V8h4l-6-6zm-9 18v2h18v-2H3z" />
                                    </svg>
                                </div>
                                <h3 class="card-title mb-3 fw-bold">Upload Your Prescription</h3>
                                {{-- <p class="text-muted mb-4">Drag & drop your file here or click anywhere below</p> --}}

                                <form>
                                    <label class="file-drop-area rounded-4 p-5 border border-dashed text-center">
                                        <input class="custom-file-input" type="file" />
                                        <div class="upload-placeholder">
                                            <svg class="mb-2" width="40" height="40" fill="#6c757d"
                                                viewBox="0 0 24 24">
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
    @endsection
