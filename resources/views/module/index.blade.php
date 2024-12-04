@extends('layout.layout')

@section('title', 'Modules')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Available Modules</h2>
    
    <div class="row g-4">
        <div class="col-md-4 col-lg-3">
            <a href="{{ route('air_ambulance') }}" class="card h-100 text-decoration-none">
                <div class="card-body text-center">
                    <i class="fas fa-helicopter fa-3x mb-3" style="color: var(--primary-color)"></i>
                    <h5 class="card-title">Air Ambulance</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-3">
            <a href="#" class="card h-100 text-decoration-none">
                <div class="card-body text-center">
                    <i class="fas fa-ambulance fa-3x mb-3" style="color: var(--primary-color)"></i>
                    <h5 class="card-title">Emergency Medical Services</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-3">
            <a href="{{ route('calls') }}" class="card h-100 text-decoration-none">
                <div class="card-body text-center">
                    <i class="fas fa-phone-alt fa-3x mb-3" style="color: var(--primary-color)"></i>
                    <h5 class="card-title">Generic Call</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-3">
            <a href="{{ route('instStatus') }}" class="card h-100 text-decoration-none">
                <div class="card-body text-center">
                    <i class="fas fa-hospital fa-3x mb-3" style="color: var(--primary-color)"></i>
                    <h5 class="card-title">Hospital/Clinic Status</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-3">
            <a href="{{ route('foreMort') }}" class="card h-100 text-decoration-none">
                <div class="card-body text-center">
                    <i class="fas fa-procedures fa-3x mb-3" style="color: var(--primary-color)"></i>
                    <h5 class="card-title">Forensic/Mortuary</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-3">
            <a href="{{ route('comMan') }}" class="card h-100 text-decoration-none">
                <div class="card-body text-center">
                    <i class="fas fa-comments fa-3x mb-3" style="color: var(--primary-color)"></i>
                    <h5 class="card-title">Complaints</h5>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
