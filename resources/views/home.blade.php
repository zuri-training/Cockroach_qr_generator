<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('assets/qr_icons/logo33.png') }}" rel="icon">
    <title>QR_Code - Dashboard</title>
    <link href="{{ asset('js/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('js/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboardmn.module.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <img src="assets/qr_icons/logo33.png">
                </div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('generate') }}" data-toggle=""
                    data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="fas fa-fw fa-plus"></i>
                    <span> Create QR code</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="" data-target="" aria-expanded="true"
                    aria-controls="collapsePage">
                    <i class="fas fa-fw fa-check"></i>
                    <span>All QR code</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">View all</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn register">Logout</button>
                </form>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#"></a>
                    </div>
                </div>

                <hr class="sidebar-divider">
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn  btn-link rounded-circle mr-3">
                        <i class="fa fa-bars" style="color:#5683F6;"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small"
                                            placeholder="What do you want to look for?" aria-label="Search"
                                            aria-describedby="basic-addon2" style="border-color: #5683F6;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <!-- Area QR code -->
                    @if ($files->count() <= 0 && $links->count() <= 0)
                        <div class="row mb-3">
                            <div class="col-xl-6 col-lg-7">
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <p>Saved QR codes will appear here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <h4>PDFs</h4><br>
                        <div class="row mb-3">
                            @foreach ($files as $file)
                                <div class="col-xl-4 col-lg-5 mb-4">
                                    <div class="card">
                                        <div
                                            class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                            {!! QrCode::size(150)->generate(asset('uploads/pdf') . '/' . $file->filename) !!}

                                            <br><br>
                                            <div>
                                                <h6>{{ $file->title }}</h6>
                                                <i class="fas fa-solid fa-file-pdf" style="color:#5683F6;"></i>
                                                <span>PDF</span><br>
                                                <i class="fas fa-thin fa-clock"></i>
                                                <span>{{ $file->created_at->format('d-m-y') }}</span><br><br>
                                                <a href="{{ route('preview-qr-pdf', $file->id) }}">Preview</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <h4>Links</h4><br>

                        <div class="row mb-3">
                            @foreach ($links as $link)
                                <div class="col-xl-4 col-lg-5 mb-4">
                                    <div class="card">
                                        <div
                                            class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                            {!! QrCode::size(150)->generate($link->url_link) !!}

                                            <br><br>
                                            <div>
                                                <h6>{{ $link->title }}</h6>
                                                <span>Link</span><br>
                                                <i class="fas fa-thin fa-clock"></i>
                                                <span>{{ $link->created_at->format('d-m-y') }}</span><br><br>

                                                <a href="{{ route('preview-qr-url', $link->id) }}">Preview</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>
                @endif

                <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('js/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                <script src="{{ asset('js/effects-admin.min.js') }}"></script>

</body>

</html>
