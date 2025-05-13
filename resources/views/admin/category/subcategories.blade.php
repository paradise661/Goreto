@extends('layouts.admin.master')
@section('title', 'Subcategories of ' . $parent->name)

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5><strong>{{ $parent->name }}</strong></h5>
            <a class="btn btn-primary" href="{{ route('category.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($subCategories->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 3%">SN</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th style="text-align: end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($subCategories as $key => $category)
                            <tr>
                                <td><strong>{{ $key + 1 }}</strong></td>
                                <td><strong>{{ $category->name }}</strong></td>
                                <td>
                                    <span
                                        class="badge {{ $category->status == 0 ? 'bg-label-danger' : 'bg-label-success' }}">
                                        {{ $category->status == 0 ? 'Draft' : 'Published' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route('category.subcategories', $category->id) }}"
                                            style="margin-right: 5px;" title="View Sub Category">
                                            View Subcategory
                                        </a>

                                        <a class="btn btn-sm btn-primary" href="{{ route('category.edit', $category->id) }}"
                                            style="margin-right: 5px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <form class="delete-form" action="{{ route('category.destroy', $category->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger delete_category" type="submit"
                                                title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            {{-- Optional: Recursive display of further children --}}
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="card-body">
                    <p>No subcategories found for this category.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
