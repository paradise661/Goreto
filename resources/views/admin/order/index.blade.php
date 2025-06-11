@extends('layouts.admin.master')
@section('title', 'Orders')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="row mt-3 mb-0 m-2">
            <div class="col-md-9">
                {{-- <form class="d-flex" method="GET" action="">
                    <div class="col-md-10">
                        <div class="input-group gap-2">
                            <input class="form-control" name="search" type="search" placeholder="Enter Order Number"
                                value="{{ request('search') ?? '' }}" aria-label="Search">

                            <input class="form-control flatpicker" name="start_date" type="" placeholder="Start Date"
                                value="{{ request('start_date') ?? '' }}" aria-label="Search">

                            <input class="form-control flatpicker" type="text" name="end_date"
                                value="{{ request('end_date') ?? '' }}" placeholder="End Date">

                            <button class="input-group-text" type="submit"><i class="tf-icons bx bx-search"></i>
                                Search</button>
                            <a class="input-group-text" href="#"> Reset</a>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Orders ({{ $orders->total() }})</h5>
            <a class="btn btn-outline-primary" href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>
                Excel Export</a>

        </div>

        <div class="table-responsive text-nowrap">
            @if ($orders->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Order Status</th>
                            <th scope="col">Pay Status</th>
                            <th scope="col">Order Time</th>
                            <th scope="col">Seen</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($orders as $key => $order)
                            <tr>
                                <td><strong>{{ $key + $orders->firstItem() }}</strong></td>
                                <td>{{ $order->order_number }}</td>
                                <td>
                                    {{ $order->customer ? $order->customer->name : 'Not Registered' }}
                                </td>

                                <td>{{ $order->payment_method ?: 'NA' }}</td>
                                <td>{{ $order->status ?? '' }}</td>
                                <td><span
                                        class="badge rounded-pill alert-warning">{{ $order->transaction_status ?: 'Not Paid' }}</span>
                                </td>
                                <td>{{ date('Y-m-d, h:i A', strtotime($order->created_at)) }}</td>
                                <td>
                                    <span
                                        class="badge {{ $order->is_seen ? 'badge rounded-pill alert-success' : '' }}">{{ $order->is_seen ? 'Seen' : '' }}
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-primary" title="View"
                                        href="{{ route('orders.items', $order->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa fa-eye"></i></a>

                                    <form class="delete-form" action="{{ route('orders.delete', $order->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger delete_order mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $orders->appends($searchParams)->links() }}
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
        $('.delete_order').click(function(e) {
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
