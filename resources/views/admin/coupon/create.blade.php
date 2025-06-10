@extends('layouts.admin.master')
@section('title', 'Coupons')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Coupon</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('coupons.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('coupons.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Promo Name</label>
                            <input class="form-control @error('promo_name') is-invalid @enderror" id=""
                                type="text" name="promo_name" value="{{ old('promo_name') }}" placeholder="">
                            @error('promo_name')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Coupon Code</label>
                            <input class="form-control @error('coupon_code') is-invalid @enderror" id=""
                                type="text" name="coupon_code" value="{{ old('coupon_code') }}" placeholder="">
                            @error('coupon_code')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Valid From</label>
                            <input class="form-control flatpicker @error('valid_from') is-invalid @enderror" id=""
                                type="text" name="valid_from" value="{{ old('valid_from') }}" placeholder="">
                            @error('valid_from')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Valid To</label>
                            <input class="form-control flatpicker @error('valid_to') is-invalid @enderror" id=""
                                type="text" name="valid_to" value="{{ old('valid_to') }}" placeholder="">
                            @error('valid_to')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Coupon Type</label>
                            <select class="form-select @error('coupon_type') is-invalid @enderror" id=""
                                name="coupon_type">
                                <option value="fixed">Fixed</option>
                                <option value="percent">Percent</option>
                            </select>
                            @error('coupon_type')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Coupon Value</label>
                            <input class="form-control @error('coupon_value') is-invalid @enderror" id=""
                                type="number" name="coupon_value" value="{{ old('coupon_value') }}" placeholder=""
                                min="1">
                            @error('coupon_value')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="" name="status">
                                <option value="1">Published</option>
                                <option value="0">Draft</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Cart Value</label>
                            <input class="form-control @error('cart_value') is-invalid @enderror" id=""
                                type="number" name="cart_value" value="{{ old('cart_value') }}" placeholder=""
                                min="1">
                            @error('cart_value')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror ckeditor" id="" name="description"
                            rows="8" placeholder="">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-check"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
