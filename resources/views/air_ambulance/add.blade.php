@extends('layout.layout')

@section('title', 'Add Air Ambulance Request')

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

.form-control {
    border-radius: 5px;
    border: 1px solid #ced4da;
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(128, 128, 128, 0.25);
}

textarea {
    resize: vertical;
    min-height: 100px;
}
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Air Ambulance Request</h2>
        <a href="{{ route('air_ambulance') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <form action="{{ route('strPg') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        
        <!-- Caller Information -->
        <fieldset class="fieldset">
            <legend class="legend">Caller Information</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="fullName" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Telephone No</label>
                    <input type="text" class="form-control" name="telephoneNo" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Mobile No</label>
                    <input type="text" class="form-control" name="mobileNo" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">District</label>
                    <select class="form-select" name="district" id="district" required>
                        <option value="">Select District</option>
                        @foreach($districts as $district)
                            <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Institution</label>
                    <select class="form-select" name="institution" id="institution" required>
                        <option value="">Select Institution</option>
                        @foreach($institutions as $institution)
                            <option value="{{$institution->id}}">{{$institution->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Institution Type</label>
                    <select class="form-select" name="institution_type" required>
                        <option value="">Choose Institution Type</option>
                        <option value="Hospital">Hospital</option>
                        <option value="Clinic">Clinic</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <!-- Control Center -->
        <fieldset class="fieldset">
            <legend class="legend">Control Center</legend>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Aircraft Type</label>
                    <select class="form-select" name="aircraft_type" required>
                        <option value="">Select Aircraft</option>
                        <option value="Rotor Wing">Rotor Wing</option>
                        <option value="Fixed Wing">Fixed Wing</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Call Type</label>
                    <select class="form-select" name="call_type" required>
                        <option value="">Select Call Type</option>
                        <option value="Hot Response">Hot Response</option>
                        <option value="Transfer">Transfer</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Service Provider</label>
                    <input type="text" class="form-control" name="service_provider">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Incident</label>
                    <select class="form-select" name="incident_id" required>
                        <option value="">Select an Incident</option>
                        @foreach($incidents as $incident)
                            <option value="{{$incident->id}}">{{$incident->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Motivation</label>
                    <textarea class="form-control" name="motivation" rows="3"></textarea>
                </div>
            </div>
        </fieldset>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-end gap-2 mb-4">
            <a href="{{ route('air_ambulance') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-arrow-right"></i> Next
            </button>
        </div>
    </form>
</div>

@endsection

@section('additional_js')
<script>
$(document).ready(function() {
    // District change handler
    $('#district').change(function() {
        var districtId = $(this).val();
        if (districtId) {
            $.ajax({
                url: '/get-institutions/' + districtId,
                type: 'GET',
                success: function(data) {
                    $('#institution').html('<option value="">Select Institution</option>');
                    $.each(data, function(key, value) {
                        $('#institution').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                }
            });
        } else {
            $('#institution').html('<option value="">Select Institution</option>');
        }
    });

    // Form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
});
</script>
@endsection
