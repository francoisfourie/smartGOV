@extends('layout.layout')

@section('title', 'Approve Air Ambulance')

@section('additional_css')
<style>
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: var(--primary-color);
    color: white;
    border-radius: 10px 10px 0 0 !important;
    padding: 1rem;
}

.table th {
    background-color: var(--primary-color);
    color: white;
    font-weight: 500;
}

.table-hover tbody tr:hover {
    background-color: rgba(152, 251, 152, 0.1);
}

.btn-action {
    min-width: 130px;
}
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Air Ambulances Pending Approval</h4>
                    <a href="{{ route('air_ambulance') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    @if (count($air_ambulances) > 0)
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Ref #</th>
                                        <th>Date Captured</th>
                                        <th>Capturer</th>
                                        <th>Caller</th>
                                        <th>Aircraft Type</th>
                                        <th>Call Type</th>
                                        <th>Incident</th>
                                        <th>Referring Institution</th>
                                        <th>Receiving Institution</th>
                                        <th>Total Airtime</th>
                                        <th>Action</th>
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
                                                <a href="{{ route('editAA', ['id' => $ambulance->id, 'air_ambulance_id' => $ambulance->id]) }}" 
                                                   class="btn btn-primary btn-action">
                                                    <i class="fas fa-check-circle me-1"></i> Review
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle me-2"></i> No air ambulance records pending approval
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
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                text: '<i class="fas fa-file-excel me-1"></i> Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'pdf',
                text: '<i class="fas fa-file-pdf me-1"></i> PDF',
                className: 'btn btn-danger'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print me-1"></i> Print',
                className: 'btn btn-info'
            }
        ],
        order: [[1, 'desc']], // Sort by date captured
        pageLength: 10,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
});
</script>
@endsection
