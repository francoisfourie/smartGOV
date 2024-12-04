<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMARTGOV - @yield('title', 'Dashboard')</title>
    @include('layout.resources')
    @yield('additional_css')
</head>
<body>
    <!-- Top Navigation -->
    <nav class="navbar top-nav">
        <div class="container-fluid">
                        
            <!-- Top Menu -->
            <div class="nav-container">
                <div class="nav flex-row">
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="{{ route('modules') }}" class="nav-link">
                        <i class="fas fa-th"></i> Modules
                    </a>
                    <div class="nav-item">
                        <a href="#moduleSubmenu" class="nav-link" data-bs-toggle="collapse">
                            <i class="fas fa-list"></i> Module List
                        </a>
                        <div class="collapse" id="moduleSubmenu">
                            <div class="nav flex-row ms-3">
                                <a href="{{ route('air_ambulance') }}" class="nav-link">
                                    <i class="fas fa-helicopter"></i> Air Ambulance
                                </a>
                                <a href="{{ route('calls') }}" class="nav-link">
                                    <i class="fas fa-phone"></i> Generic Call
                                </a>
                                <a href="{{ route('instStatus') }}" class="nav-link">
                                    <i class="fas fa-hospital"></i> Hospital Status
                                </a>
                                <a href="{{ route('foreMort') }}" class="nav-link">
                                    <i class="fas fa-procedures"></i> Forensic/Mortuary
                                </a>
                                <a href="{{ route('comMan') }}" class="nav-link">
                                    <i class="fas fa-comments"></i> Complaints
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-bar"></i> Reports
                    </a>
                    <a href="{{ route('users') }}" class="nav-link">
                        <i class="fas fa-users"></i> Users
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-newspaper"></i> News & Events
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                </div>
            </div>

            <div class="user-profile">
                {{-- <img src="{{ asset('images/image.png') }}" alt="Profile"> --}}
                <div>
                    <div class="fw-bold">{{ Auth::user()->name }}</div>
                    <a href="{{ route('logout') }}" class="text-white text-decoration-none">
                        <small><i class="fas fa-sign-out-alt"></i> Logout</small>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid py-4">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session()->get('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session()->get('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    @yield('additional_js')
</body>
</html>
