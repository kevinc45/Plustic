
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="n2IR1tc5vwwY0liIC228cOVNUhPwCsxw91xRh7dN">

        <title>Laravel</title>
        <!-- Favicon -->
        <link href="http://localhost:8000/argon/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="http://localhost:8000/argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="http://localhost:8000/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="http://localhost:8000/argon/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>
    <body class="">
                    <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="n2IR1tc5vwwY0liIC228cOVNUhPwCsxw91xRh7dN">            </form>
            <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="http://localhost:8000/home">
            <img src="http://localhost:8000/argon/img/brand/LogoPlusticPNG.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="http://localhost:8000/argon/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="http://localhost:8000/profile" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="http://localhost:8000/logout" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="http://localhost:8000/home">
                            <img src="http://localhost:8000/argon/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/home">
                        <i class="ni ni-tv-2 text-primary"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/projects">
                            <i class="ni ni-planet text-blue"></i> Our Projects
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/blog">
                            <i class="ni ni-pin-3 text-orange"></i> Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fab fa-laravel" style="color: #f4645f;"></i>
                            <span class="nav-link-text" style="color: #f4645f;">Preferences</span>
                        </a>
    
                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/preferences">
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/preferences/contactus">
                                    Contact Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/preferences/tos">
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
                
        <div class="main-content">
            <!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="http://localhost:8000/test">Page Name</a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="http://localhost:8000/argon/img/theme/team-4-800x800.jpg">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">Adm1n</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="http://localhost:8000/profile" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="http://localhost:8000/logout" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>    
                <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
    </div>
</div>    
    <div class="container-fluid mt--7">

        <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 Kevin Christian Hadinata
            
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            
        </ul>
    </div>
</div></footer>    </div>
        </div>

        
        <script src="http://localhost:8000/argon/vendor/jquery/dist/jquery.min.js"></script>
        <script src="http://localhost:8000/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
            <script src="http://localhost:8000/argon/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="http://localhost:8000/argon/vendor/chart.js/dist/Chart.extension.js"></script>
        
        <!-- Argon JS -->
        <script src="http://localhost:8000/argon/js/argon.js?v=1.0.0"></script>
    </body>
</html>