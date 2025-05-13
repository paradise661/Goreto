@extends('layouts.admin.master')
@section('title', 'Products under ' . $category->name)

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Products in <strong>{{ $category->name }}</strong></h5>
            <a class="btn btn-primary" href="{{ route('category.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="table-responsive">
            @if ($products->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 3%">SN</th>
                            <th>Name</th>
                            <th>Parent Category</th>
                            <th>Children Categories</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key + $products->firstItem() }}</td>
                                <td><strong>{{ $product->name }}</strong></td>

                                {{-- Display Parent Category --}}
                                {{-- Display Parent Category --}}
                                <td>
                                    @if ($product->category->isNotEmpty())
                                        @foreach ($product->category as $category)
                                            @if ($category->parent)
                                                {{ $category->parent->name }}<br>
                                            @else
                                                N/A<br>
                                            @endif
                                        @endforeach
                                    @else
                                        N/A
                                    @endif
                                </td>

                                {{-- Display Children Categories --}}
                                {{-- Display Children Categories --}}
                                <td>
                                    @if ($product->category->isNotEmpty())
                                        @foreach ($product->category as $category)
                                            @if ($category->children->isNotEmpty())
                                                @foreach ($category->children as $child)
                                                    <span class="badge bg-info">{{ $child->name }}</span><br>
                                                @endforeach
                                            @else
                                                N/A
                                            @endif
                                        @endforeach
                                    @else
                                        N/A
                                    @endif
                                </td>

                                <td>{{ $product->status == 1 ? 'Published' : 'Draft' }}</td>
                                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $products->links() }}
            @else
                <div class="card-body">
                    <p>No products found in this category.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
