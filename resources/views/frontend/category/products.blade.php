@extends('layouts.frontend.master')

@section('content')
    <h2 class="mb-4">{{ $category->name }}</h2>
    <div class="row">
        @forelse($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ get_image_url($product->image, 'home-banner-slider') }}"
                        alt="{{ $product->name }}" style="max-width: 150px; height: auto;">

                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>Nrs {{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No products found under this category.</p>
        @endforelse
    </div>

    {{ $products->links() }}
@endsection
