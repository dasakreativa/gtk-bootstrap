<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Dashboard Panel</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendor/jqvmap/jqvmap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>

    <div id="app">
        <!-- .header-navbar -->
        <header class="header-navbar" id="masthead">
            <nav class="navbar navbar-expand navbar-light" id="navbar-main">
                <a class="navbar-brand d-none d-md-none d-lg-inline" href="#">
                    <img src="{{ asset('images/brands/svg/logo-color.svg') }}" alt="Garuda Admin Kit" class="img-full" />
                    <img src="{{ asset('images/brands/svg/icon-color.svg') }}" alt="Garuda Admin Kit" class="img-mini" />
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item d-lg-none">
                            <a href="javascript:void(0)" class="nav-link sidebar-toggler"><i class="fa-solid fa-bars"></i></a>
                        </li>
                        <li class="nav-item">
                            <div class="p-1 px-2 text-sm rounded bg-primary text-white" style="font-size: .8em"><span class="d-none d-md-none d-lg-inline">Sekarang Pukul </span><span id="jam"></span></div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown userinfo">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/profile/profile-blank.png') }}" alt="User Avatar" class="rounded-circle" />
                                <span class="ml-2 d-none d-md-none d-lg-inline">Halo DKD Jatim</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profilku</a>
                                <a class="dropdown-item" href="#">Ganti Kata Sandi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /.header-navbar -->

        <!-- .content-wrap -->
        <div class="content-wrap">
            <!-- .sidebar -->
            <section class="sidebar">
                <a href="#" class="sidebar-header">
                    <img src="{{ asset('images/brands/svg/logo-color.svg') }}" alt="Garuda Admin Kit" class="w-100" />
                </a>
                <div class="sidebar-userinfo">
                    <img src="{{ asset('images/profile/profile-blank.png') }}" class="profile" alt="Nama User" />
                    <div class="details">
                        <div class="name">DKD Jawa Timur</div>
                        <div class="role">Dewan Kerja Daerah</div>
                    </div>
                </div>

                <ul id="mainmenu" class="sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-tachometer fa-fw"></i></div>
                            <div class="title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-list fa-fw"></i></div>
                            <div class="title">Daftar Kwartir</div>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-users fa-fw"></i></div>
                            <div class="title">Anggota</div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Daerah</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Cabang</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Ranting</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-clipboard fa-fw"></i></div>
                            <div class="title">Penilaian</div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Cabang</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Ranting</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-file fa-fw"></i></div>
                            <div class="title">Surat Keputusan</div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Daerah</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Cabang</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dewan Kerja Ranting</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-camera fa-fw"></i></div>
                            <div class="title">Giat dan Prestasi</div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="has-arrow">Prestasi</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Daerah</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Cabang</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Ranting</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="has-arrow">Kegiatan</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Daerah</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Cabang</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Ranting</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="has-arrow">Delegasi</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Daerah</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Cabang</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dewan Kerja Ranting</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <div class="icon"><i class="fa-solid fa-info-circle fa-fw"></i></div>
                            <div class="title">Tentang Sistem</div>
                        </a>
                    </li>
                </ul>

                <div class="copyright">
                    <p class="font-weight-bold m-0">Dewan Kerja Daerah Jawa Timur</p>
                    <p class="m-0">&copy; {{ date('Y') }} <a href="https://www.dasakreativa.web.id" target="_blank">Garuda Admin Kit</a></p>
                </div>
            </section>
            <!-- .sidebar -->

            <!-- .overlay -->
            <div class="overlay">
                <a href="javascript:void(0)" class="sidebar-toggler"><i class="fa-solid fa-times"></i></a>
            </div>
            <!-- .overlay -->

            <main id="main-content">
                <div class="inner-content">

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-3">
                            <div class="widget widget-statistic-plain widget-primary">
                                <div class="widget-icon">
                                    <i class="fa-solid fa-user-circle"></i>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-counter">10</div>
                                    <div class="widget-title">Anggota Dewan Kerja</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-3">
                            <div class="widget widget-statistic-color widget-warning">
                                <div class="widget-icon">
                                    <i class="fa-solid fa-bullhorn"></i>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-counter">10</div>
                                    <div class="widget-title">Semua Data Kegiatan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-3">
                            <div class="widget widget-statistic-color widget-success">
                                <div class="widget-icon">
                                    <i class="fa-solid fa-map-marker"></i>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-counter">38</div>
                                    <div class="widget-title">Dewan Kerja Cabang</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-3">
                            <div class="widget widget-statistic-color widget-success">
                                <div class="widget-icon">
                                    <i class="fa-solid fa-map-marker"></i>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-counter">100</div>
                                    <div class="widget-title">Dewan Kerja Ranting</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-0 mt-md-3">
                        <div class="col-md-8">
                            <div class="card card-widget">
                                <div class="card-header">
                                    <h4>Peta Keterisian Data</h4>
                                    <p>Pemaparan data terhadap kwarcab yang sudah mengisikan data.</p>
                                </div>
                                <div id="vmap" style="height:300px;"></div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                </div>
                <footer class="footer">
                    <p class="m-0">Hak Cipta {{ date('Y') }} <a href="https://www.dasakreativa.web.id">Dasa Kreativa Group</a>.</p>
                </footer>
            </main>
        </div>
        <!-- /.content-wrap -->
    </div>

    <!-- Main Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/indonesia/jatim.js') }}"></script>

    <script>
        // jQuery VMAP
        jQuery(document).ready(function() {
            jQuery('#vmap').vectorMap({
                map: 'jatim',
                backgroundColor: '#a5bfdd',
                borderColor: '#818181',
                borderOpacity: 0.15,
                borderWidth: 1,
                color: '#fff',
                enableZoom: true,
                hoverColor: '#4f1d09',
                hoverOpacity: null,
                normalizeFunction: 'linear',
                scaleColors: ['#b6d6ff', '#005ace'],
                selectedColor: '#2e2211',
                selectedRegions: null,
                showTooltip: true,
                setColors: function (key, color) {
                    if (typeof key == 'string') {
                        this.countries[key].setFill(color);
                        this.countries[key].setAttribute("original", color);
                    } else {
                        var colors = key;

                        for (var code in colors) {
                            if (this.countries[code]) {
                                this.countries[code].setFill(colors[code]);
                                this.countries[code].setAttribute("original", colors[code]);
                            }
                        }
                    }
                },
                onRegionClick: function(element, code, region)
                {
                    Swal.fire('Success', `You're selected ${region} which has the code ${code.toUpperCase()}.`, 'success');
                    // var message = 'You clicked "'
                    //     + region
                    //     + '" which has the code: '
                    //     + code.toUpperCase();

                    // alert(message);
                }
            });
        });
    </script>
</body>
</html>
