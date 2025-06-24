@extends('layouts.admin.master')
@section('title', 'All Prescriptions - Admin Dashboard')

@section('content')
    @include('admin.includes.message')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Prescriptions</h5>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($prescriptions->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 3%">SN</th>
                            <th>Customer</th>
                            <th>Doctor Name</th>
                            <th>Doctor Title</th>
                            <th>Message</th>
                            <th>File</th>
                            <th style="text-align: end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($prescriptions as $key => $prescription)
                            <tr>
                                <td><strong>{{ $key + $prescriptions->firstItem() }}</strong></td>
                                <td>{{ $prescription->customer->name ?? 'N/A' }}</td>
                                <td>{{ $prescription->doctor_name ?? '-' }}</td>
                                <td>{{ $prescription->doctor_title ?? '-' }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($prescription->message, 50, '...') ?? '-' }}</td>
                                <td>
                                    @if ($prescription->file_path)
                                        @php
                                            $ext = strtolower(pathinfo($prescription->file_path, PATHINFO_EXTENSION));
                                            $url = asset('storage/' . $prescription->file_path);
                                        @endphp

                                        @if (in_array($ext, ['jpg', 'jpeg', 'png']))
                                            <a href="{{ $url }}" target="_blank"
                                                style="display: inline-block; width: 60px; height: 60px;">
                                                <img src="{{ $url }}" alt="Image"
                                                    style="width: 60px; height: 60px; object-fit: cover;">
                                            </a>
                                        @elseif ($ext === 'pdf')
                                            <a href="{{ $url }}" target="_blank">View PDF</a>
                                        @else
                                            <a href="{{ $url }}" target="_blank">Download File</a>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-end">

                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('admin.prescriptions.show', $prescription->id) }}"
                                            style="float: left;margin-right: 5px;"><i class="fa-solid fa-eye"></i></a>

                                        <form class="delete-form"
                                            action="{{ route('admin.prescriptions.destroy', $prescription->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger delete_prescriptions mr-2" id=""
                                                data-type="confirm" type="submit" title="Delete"><i
                                                    class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $prescriptions->links() }}
            @else
                <div class="card-body">
                    <h6>No Prescriptions Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.delete_prescriptions').click(function(e) {
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
