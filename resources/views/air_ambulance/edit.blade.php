@extends('layout.layout')

@section('title', 'Review Air Ambulance Request')

@section('additional_css')
<style>
.fieldset {
    border: 1px solid var(--primary-color);
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: white;
}

.legend {
    color: var(--primary-color);
    font-weight: bold;
    width: auto;
    padding: 0 10px;
    margin-bottom: 0;
    font-size: 1.1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-label {
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.reference-number {
    background-color: var(--primary-color);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    font-weight: 500;
}

.authority-actions {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1rem;
}
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1">Review Air Ambulance Request</h2>
            <span class="reference-number">Reference: {{ $air_ambulance->reference }}</span>
        </div>
        <a href="{{ route('approveAA') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('updateAA', $air_ambulance->id) }}">
        @csrf
        @method('PATCH')

        <!-- Caller Information -->
        <fieldset class="fieldset">
            <legend class="legend">Caller Information</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $air_ambulance->name }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Telephone No</label>
                    <input type="text" class="form-control" name="telephoneNo" value="{{ $air_ambulance->telephoneNo }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Mobile No</label>
                    <input type="text" class="form-control" name="mobileNo" value="{{ $air_ambulance->mobileNo }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">District</label>
                    <input type="text" class="form-control" name="district" value="{{ \App\Models\District::find($air_ambulance->district_id)->name }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Institution</label>
                    <input type="text" class="form-control" name="institution" value="{{ \App\Models\Institution::find($air_ambulance->institution_id)->name }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Institution Type</label>
                    <input type="text" class="form-control" name="institution_type" value="{{ $air_ambulance->institution_type }}" readonly>
                </div>
            </div>
        </fieldset>

        <!-- Patient Information -->
        <fieldset class="fieldset">
            <legend class="legend">Patient Information</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Patient Name</label>
                    <input type="text" class="form-control" name="patient_name" value="{{ $air_ambulance->patientName }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Gender</label>
                    <input type="text" class="form-control" name="gender" value="{{ $air_ambulance->gender }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" value="{{ $air_ambulance->age }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Weight</label>
                    <input type="text" class="form-control" name="weight" value="{{ $air_ambulance->weight }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Diagnosis</label>
                    <input type="text" class="form-control" name="diagnosis" value="{{ $air_ambulance->diagnosis }}" readonly>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Case Type</label>
                    <input type="text" class="form-control" name="caseType_id" value="{{ \App\Models\CaseType::find($air_ambulance->caseType_id)->type }}" readonly>
                </div>
            </div>
        </fieldset>

        <!-- Authority -->
        <fieldset class="fieldset">
            <legend class="legend">Authority Decision</legend>
            
            <div class="authority-actions text-center mb-4">
                <button type="submit" name="action" value="approve" class="btn btn-success btn-lg mx-2">
                    <i class="fas fa-check-circle me-2"></i> Approve Request
                </button>
                <button type="submit" name="action" value="decline" class="btn btn-danger btn-lg mx-2">
                    <i class="fas fa-times-circle me-2"></i> Decline Request
                </button>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Updated By</label>
                    <input type="text" class="form-control" name="updated_by" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Time</label>
                    <input type="time" class="form-control" name="time_authorized" value="{{ now()->format('H:i') }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Reason</label>
                    <input type="text" class="form-control" name="reason" required>
                </div>
            </div>
        </fieldset>
    </form>
</div>
@endsection
