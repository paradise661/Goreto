@extends('layouts.frontend.master')
@section('content')
    <section class="upload-section py-5 bg-light min-vh-50 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body text-center p-5">
                            <div class="upload-icon mb-4">
                                <svg width="80" height="80" fill="#0d6efd" viewBox="0 0 24 24">
                                    <path d="M12 2L6 8h4v6h4V8h4l-6-6zm-9 18v2h18v-2H3z" />
                                </svg>
                            </div>
                            <h3 class="card-title mb-3 fw-bold">Upload Your Prescription</h3>
                            <p class="text-muted mb-4">Drag & drop your prescription or click to upload</p>

                            <form id="prescriptionForm">
                                <label
                                    class="file-drop-area border border-dashed rounded-4 p-5 w-100 d-block cursor-pointer">
                                    <input class="d-none" id="fileInput" type="file" accept="image/*,application/pdf" />
                                    <div class="upload-placeholder text-secondary">
                                        <svg class="mb-3" width="40" height="40" fill="#6c757d"
                                            viewBox="0 0 24 24">
                                            <path d="M16 13v-2h-4V7h-2v4H6v2h4v4h2v-4h4z" />
                                        </svg>
                                        <div class="fw-semibold">Click or drag file to this area</div>
                                    </div>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal: Doctor Info with Preview -->
    <div class="modal fade" id="doctorModal" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="doctorModalLabel">Confirm Prescription Details</h5>
                    <button class="btn-close" id="cancelBtn" data-bs-dismiss="modal" type="button"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4 align-items-start">
                        <!-- Preview -->
                        <div class="col-md-6 text-center d-flex justify-content-center align-items-center"
                            style="min-height: 300px;">
                            <img class="img-fluid rounded shadow-sm border" id="previewImage" src="#"
                                alt="Prescription Preview" style="max-height: 300px; object-fit: contain; display:none;" />
                            <div id="pdfPreview" style="display:none; user-select:none; text-align:center;">
                                <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="64" height="80"
                                    fill="#dc3545" viewBox="0 0 24 24">
                                    <path
                                        d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6H6zm7 1.5L18.5 9H13V3.5z" />
                                </svg>
                                <div id="pdfFilename" style="font-weight: 600; color: #6c757d;"></div>
                            </div>
                        </div>

                        <!-- Doctor Info Form -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="doctorName">Doctor Name</label>
                                <input class="form-control" id="doctorName" type="text" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="doctorTitle">Title</label>
                                <input class="form-control" id="doctorTitle" type="text" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button class="btn btn-outline-secondary" id="modalCancelBtn" type="button">Cancel</button>
                    <button class="btn btn-primary" id="confirmBtn" type="button">Confirm & Upload</button>
                </div>
            </div>
        </div>
    </div>
@endsection
