@extends('layouts.admin.master')
@section('title', 'Prescription Details')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Prescription Details</h5>
        </div>
        <div class="card-body">
            <p><strong>Customer Name:</strong> {{ $prescription->customer->name ?? 'N/A' }}</p>
            <p><strong>Customer Email:</strong> {{ $prescription->customer->email ?? 'N/A' }}</p>
            <p><strong>Customer Number:</strong> {{ $prescription->customer->number ?? 'N/A' }}</p>
            <p><strong>Doctor Name:</strong> {{ $prescription->doctor_name ?? '-' }}</p>
            <p><strong>Title:</strong> {{ $prescription->doctor_title ?? '-' }}</p>
            <p><strong>Message:</strong> {{ $prescription->message ?? '-' }}</p>
            <p><strong>File:</strong></p>
            @if ($prescription->file_path)
                @php
                    $ext = pathinfo($prescription->file_path, PATHINFO_EXTENSION);
                    $url = asset('storage/' . $prescription->file_path);
                @endphp
                @if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png']))
                    <img src="{{ $url }}" alt="Prescription Image" style="max-width: 100%; height: auto;">
                @elseif (strtolower($ext) == 'pdf')
                    <embed src="{{ $url }}" type="application/pdf" width="100%" height="600px" />
                @else
                    <a href="{{ $url }}" target="_blank">Download File</a>
                @endif
            @else
                N/A
            @endif
        </div>
        <div class="card-footer text-center">
            <a class="btn btn-secondary" href="{{ route('admin.prescriptions.index') }}">Back to List</a>
        </div>

    </div>
@endsection
