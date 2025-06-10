@extends('layouts.admin.master')
@section('title', 'Coupons')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Coupons ({{ $coupons->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('coupons.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($coupons->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Coupon Code</th>
                            <th>Coupon Type</th>
                            <th>Coupon Value</th>
                            <th>Cart Value</th>
                            <th>Valid From</th>
                            <th>Valid To</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($coupons as $key => $coupon)
                            <tr>
                                <td><strong>{{ $key + $coupons->firstItem() }}</strong></td>
                                <td><strong>{{ $coupon->coupon_code ?? '' }}</strong></td>
                                <td>{{ $coupon->coupon_type ?? '' }}</td>
                                <td>{{ $coupon->coupon_type == 'fixed' ? 'R.s ' : '' }}{{ $coupon->coupon_value ?? '' }}{{ $coupon->coupon_type == 'percent' ? '%' : '' }}
                                </td>
                                <td>{{ $coupon->cart_value ?? '' }}</td>
                                <td>{{ $coupon->valid_from ?? '' }}</td>
                                <td>{{ $coupon->valid_to ?? '' }}</td>

                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('coupons.edit', $coupon->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('coupons.destroy', $coupon->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_coupon mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $coupons->links() }}
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete_coupon').click(function(e) {
            e.preventDefault();
            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(this).closest("form").submit();
                    }
                });

        });
    </script>
@endsection
