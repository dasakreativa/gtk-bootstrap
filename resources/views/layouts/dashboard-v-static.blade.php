<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Judul & CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Addon Stylesheet -->
    @yield('addon-style')
    
    <!-- Custom Stylesheet -->
    @yield('style')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    
    <!-- Pace Script -->
    <link rel="stylesheet" href="{{ asset('vendor/pace-js/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/pace-js/pace-theme-corner-indicator.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body data-layout="static-sidebar" data-sidebar-theme="primary">
    <!-- Sidebar Wrapper -->
    <aside class="sidebar">
        <a href="" class="sidebar-header">
            <img src="{{ asset('images/brands/logo-white.svg') }}" class="w-75 mx-auto d-block" alt="Garuda Admin Kit" />
        </a>

        <ul class="sidemenu">
            <li class="nav-heading">Dashboard</li>
            
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fa-solid fa-tachometer-alt nav-icon"></i>
                    <span class="nav-text">Dasbor</span>
                </a>
            </li>
            <li class="nav-item has-arrow">
                <a href="" class="nav-link">
                    <i class="fa-solid fa-tachometer-alt nav-icon"></i>
                    <span class="nav-text">Testing 2</span>
                </a>
                <ul class="submenu">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="nav-text">Dasbor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-arrow">
                <a href="" class="nav-link">
                    <i class="fa-solid fa-tachometer-alt nav-icon"></i>
                    <span class="nav-text">Testing 2</span>
                </a>
                <ul class="submenu">
                    <li class="nav-item has-arrow">
                        <a href="" class="nav-link">
                            <span class="nav-text">Dasbor</span>
                        </a>

                        <ul class="submenu">
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-arrow">
                        <a href="" class="nav-link">
                            <span class="nav-text">Dasbor</span>
                        </a>

                        <ul class="submenu">
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-arrow">
                        <a href="" class="nav-link">
                            <span class="nav-text">Dasbor</span>
                        </a>

                        <ul class="submenu">
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-arrow">
                        <a href="" class="nav-link">
                            <span class="nav-text">Dasbor</span>
                        </a>

                        <ul class="submenu">
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tes</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li class="nav-heading">Dashboard</li>
            
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fa-solid fa-tachometer-alt nav-icon"></i>
                    <span class="nav-text">Dasbor</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fa-solid fa-tachometer-alt nav-icon"></i>
                    <span class="nav-text">Dasbor</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- TopBar Wrapper -->
    <nav class="topbar">
        <div class="d-flex">
            <form action="#" class="app-form d-none d-md-none d-lg-flex">
                <input type="text" class="app-input" placeholder="Search something&hellip;" />
                <button class="btn btn-app-button"><i class="fa-solid fa-search"></i></button>
            </form>
        </div>
        <div class="d-flex">
            <div class="user-info dropdown">
                <a href="#" data-toggle="dropdown" class="user-wrapper dropdown-toggle">
                    <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-md" alt="Agus" />
                    <span class="user-name ml-2 d-none d-md-none d-lg-inline">Agus Zaenuddin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="fa-fw fa-solid fa-user mr-2"></i><span>Ubah Profil</span></a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="fa-fw fa-solid fa-key mr-2"></i><span>Ganti Sandi</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="fa-fw fa-sign-out fa-solid mr-2"></i><span>Keluar</span></a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Content Wrapper -->
    <div id="content-wrapper"></div>

    <!-- Pace Javascript -->
    <script src="{{ asset('vendor/pace-js/pace.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Addon Script -->
    @yield('addon-script')
    
    <!-- Custom Script -->
    @yield('script')
</body>
</html>
