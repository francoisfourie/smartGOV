@extends('layout.layout')

@section('title', 'Air Ambulance Requests')

@section('additional_css')
<style>
.card {
    margin: 0 1rem;
}

.table th {
    padding: 0.5rem;
    font-size: 0.9rem;
    white-space: nowrap;
    background-color: #f5f5f5;
    color: #333;
}

.table td {
    padding: 0.5rem;
    font-size: 0.9rem;
    vertical-align: middle;
}

.table-text {
    margin: 0;
}

.btn-action {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
}

.status-badge {
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-size: 0.875rem;
    font-weight: bold;
}

.status-pending {
    background-color: #ffc107;
    color: #333;
}

.status-approved {
    background-color: #28a745;
    color: #fff;
}

.status-declined {
    background-color: #dc3545;
    color: #fff;
}
</style>
@endsection

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">Air Ambulance Requests</h3>
                        <a href="air_ambulance/add" class="btn btn-primary">
                            <i class="fas fa-plus-circle me-2"></i>New Request
                        </a>
                    </div>

                    @if (count($air_ambulances) > 0)
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Ref #</th>
                                        <th>Date</th>
                                        <th>Capturer</th>
                                        <th>Caller</th>
                                        <th>Aircraft</th>
                                        <th>Call Type</th>
                                        <th>Incident</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($air_ambulances as $ambulance)
                                        <tr>
                                            <td>{{ $ambulance->reference }}</td>
                                            <td>{{ $ambulance->created_at->format('Y-m-d H:i') }}</td>
                                            <td>{{ \App\Models\User::find($ambulance->user_id)->lastName }}</td>
                                            <td>{{ $ambulance->name }}</td>
                                            <td>{{ $ambulance->aircraft_type }}</td>
                                            <td>{{ $ambulance->caller_type }}</td>
                                            <td>{{ \App\Models\Incident::find($ambulance->incident_id)->description }}</td>
                                            <td>{{ $ambulance->referring_institution }}</td>
                                            <td>{{ $ambulance->receiving_institution }}</td>
                                            <td>{{ $ambulance->total_airtime }}</td>
                                            <td>
                                                <span class="status-badge status-{{ strtolower($ambulance->status) }}">
                                                    {{ $ambulance->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('editAA', ['id' => $ambulance->id, 'air_ambulance_id' => $ambulance->id]) }}"
                                                   class="btn btn-sm btn-primary btn-action">
                                                    <i class="fas fa-eye me-1"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle me-2"></i> No air ambulance records available
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional_js')
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        responsive: true,
        dom: '<"d-flex justify-content-between align-items-center mb-3"Bf>rt<"d-flex justify-content-between align-items-center mt-3"lip>',
        buttons: [
            {
                extend: 'excel',
                text: '<i class="fas fa-file-excel me-1"></i> Excel',
                className: 'btn btn-success btn-sm'
            },
            {
                extend: 'pdf',
                text: '<i class="fas fa-file-pdf me-1"></i> PDF',
                className: 'btn btn-danger btn-sm'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print me-1"></i> Print',
                className: 'btn btn-info btn-sm'
            }
        ],
        pageLength: 15,
        order: [[1, 'desc']], // Sort by date column
        columnDefs: [
            {
                targets: 11, // Actions column
                orderable: false
            }
        ]
    });
});
</script>
@endsection
