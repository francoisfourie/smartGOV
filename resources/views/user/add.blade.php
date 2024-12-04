@extends('layout.guest_layout')

@section('title', 'Add User')

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
        <h2>NEW ACCOUNT REGISTRATION</h2>
        {{-- <a href="{{ route('user.index') }}" class="btn btn-secondary"> --}}
            
        </a>
    </div>

     <form action="" method="POST" class="needs-validation" novalidate> 
        @csrf
        
        <!-- Personal Information -->
        <fieldset class="fieldset">
            <legend class="legend">Personal Information</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Contact No</label>
                    <input type="text" class="form-control" name="mobile_number" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
            </div>
        </fieldset>

        <!-- Account Information -->
        <fieldset class="fieldset">
            <legend class="legend">Account Information</legend>
            <div class="row">
                
                <div class="col-md-4 mb-3">
                    <label class="form-label">District</label>
                    <select class="form-select" name="district" id="district" required>
                        <option value="">Select District</option>
                        @foreach($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Institution</label>
                    <select class="form-select" id="institution" name="institution" required>
                        <option value="">Select Institution</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Upload Image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
            </div>
        </fieldset>

        <!-- Login Information -->
        <fieldset class="fieldset">
            <legend class="legend">Personal Information</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="userName" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="role_id" required>
                        <option value="">Select a User Role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->description}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-end gap-2 mb-4">
            {{-- <a href="{{ route('user.index') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> Cancel
            </a> --}}
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-arrow-right"></i> Save
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
