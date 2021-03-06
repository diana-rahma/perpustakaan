<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard Admin</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{url('vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{url('css/app.css')}}"
              rel="stylesheet">
        

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{url('css/vendor-material-icons.css')}}"
              rel="stylesheet">
        

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{url('css/vendor-fontawesome-free.css')}}"
              rel="stylesheet">
        

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header m-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0"
                         id="navbar"
                         data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none"
                                    type="button"
                                    data-toggle="sidebar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="/index"
                               class="navbar-brand ">

                                <span>Perpustakaan</span>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="/index">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search">
                            </form>

                            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a href="#notifications_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <span class="mr-1 d-flex-inline">
                                            <span class="text-light">{{ auth('admin')->user()->name }}</span>
                                        </span>
                                        <img src="{{ asset('foto/'. auth('admin')->user()->foto) }}"
                                             class="rounded-circle"
                                             width="32"
                                             alt="">
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>{{ auth('admin')->user()->name }}</strong></div>
                                            <div class="text-muted">{{ auth('admin')->user()->email }}</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="/profile"><i class="material-icons">account_circle</i> My profile</a>
                                        <div class="dropdown-divider"></div>
                                        
                                        <form action="/logout" method="POST">
                                        @csrf
                                            <button type="submit" class="dropdown-item"><i class="material-icons">exit_to_app</i>Logout</button>   
                                        </form>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active"
                                                aria-current="page">Dashboard</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Dashboard</h1>
                                </div>
                            </div>
                            <div class="row card-group-row">
                                <div class="col-xl-3 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card card-body flex-row align-items-center">
                                        
                                        <!-- <div><i class="material-icons icon-muted icon-40pt mr-3">gps_fixed</i></div> -->
                                        <div class="flex">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Buku Tersimpan</div>
                                            <div class="text-muted mt-1">{{ $tersimpan }} Buku</div>
                                            <!-- <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div> -->
                                        </div>
                                        <div data-v-da9425c4 data-v-70995076 class="icon">
                                            <i data-v-da9425c4 class="material-icons icon-40pt ">library_books</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card card-body flex-row align-items-center">
                                        
                                        <!-- <div><i class="material-icons icon-muted icon-40pt mr-3">monetization_on</i></div> -->
                                        <div class="flex">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Kategori Buku</div>
                                            <div class="text-muted mt-1">{{ $kategori }} Kategori</div>
                                            <!-- <div class="text-stats text-success">51.5% <i class="material-icons">arrow_upward</i></div> -->
                                        </div>
                                        <div data-v-da9425c4 data-v-70995076 class="icon">
                                            <i data-v-da9425c4 class="material-icons icon-40pt ">book</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card card-body flex-row align-items-center">
                                        
                                        <div class="flex">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Siswa Telat Bayar</div>
                                            <div class="text-muted mt-1">{{ $siswatelat }} Siswa</div>
                                        </div>
                                        <div data-v-da9425c4 data-v-70995076 class="icon">
                                            <i data-v-da9425c4 class="material-icons icon-40pt ">access_time</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card card-body flex-row align-items-center">
                                        
                                        <div class="flex">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Siswa</div>
                                            <div class="text-muted mt-1">{{ $siswa }} Siswa</div>
                                        </div>
                                        <div data-v-da9425c4 data-v-70995076 class="icon">
                                            <i data-v-da9425c4 class="material-icons icon-40pt ">person</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white">
                                    <h4 class="card-header__title m-0">Jumlah Peminjam Buku Perbulan</h4>
                                </div>
                                <div class="card-body py-4">

                                    <div class="d-flex justify-content-between pb-1">
                                        <span>January</span>
                                        <div>
                                            <strong>82</strong>
                                        </div>
                                    </div>
                                    <div class="progress mb-3"
                                         style="height: 8px;">
                                        <div class="progress-bar bg-success"
                                             role="progressbar"
                                             style="width: 52%;"
                                             aria-valuenow="25"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between pb-1">
                                        <span>February</span>
                                        <div>
                                            <strong>105</strong>
                                        </div>
                                    </div>
                                    <div class="progress mb-3"
                                         style="height: 8px;">
                                        <div class="progress-bar bg-success"
                                             role="progressbar"
                                             style="width: 100%;"
                                             aria-valuenow="25"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between pb-1">
                                        <span>March</span>
                                        <div>
                                            <strong>52</strong>
                                        </div>
                                    </div>
                                    <div class="progress mb-3"
                                         style="height: 8px;">
                                        <div class="progress-bar bg-danger"
                                             role="progressbar"
                                             style="width: 22%;"
                                             aria-valuenow="25"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between pb-1">
                                        <span>April</span>
                                        <div>
                                            <strong>65</strong>
                                        </div>
                                    </div>
                                    <div class="progress mb-3"
                                         style="height: 8px;">
                                        <div class="progress-bar bg-warning"
                                             role="progressbar"
                                             style="width: 40%;"
                                             aria-valuenow="25"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between pb-1">
                                        <span>May</span>
                                        <div>
                                            <strong>78</strong>
                                        </div>
                                    </div>
                                    <div class="progress"
                                         style="height: 8px;">
                                        <div class="progress-bar bg-warning"
                                             role="progressbar"
                                             style="width: 45%;"
                                             aria-valuenow="25"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
                    <!-- // END drawer-layout__content -->
                    
                    <div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
                        <div class="mdk-drawer__content">
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t"
                                 data-perfect-scrollbar>
                                <div class="sidebar-heading">Menu</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/index">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                            <span class="sidebar-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/datasiswa">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                                            <span class="sidebar-menu-text">Data Siswa</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/listkelas">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_balance</i>
                                            <span class="sidebar-menu-text">Data Kelas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/datapeminjam">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder_shared</i>
                                            <span class="sidebar-menu-text">Data Peminjam</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/databuku">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">library_books</i>
                                            <span class="sidebar-menu-text">Data Buku</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/konfirmasi">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">system_update_alt</i>
                                            <span class="sidebar-menu-text">Konfirmasi</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/listkategori">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">format_list_bulleted</i>
                                            <span class="sidebar-menu-text">List Kategori</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/historydenda">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">history</i>
                                            <span class="sidebar-menu-text">History Denda</span>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default"
                          :layout-location="{
      'default': 'stories.html',
      'fixed': 'fixed-stories.html',
      'fluid': 'fluid-stories.html',
      'mini': 'mini-stories.html'
    }"></app-settings>
        </div>

        <!-- jQuery -->
        <script src="{{url('vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{url('vendor/popper.min.js')}}"></script>
        <script src="{{url('vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{url('vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{url('vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{url('vendor/material-design-kit.js')}}"></script>

        <!-- App -->
        <script src="{{url('js/toggle-check-all.js')}}"></script>
        <script src="{{url('/check-selected-row.js')}}"></script>
        <script src="{{url('js/dropdown.js')}}"></script>
        <script src="{{url('js/sidebar-mini.js')}}"></script>
        <script src="{{url('js/app.js')}}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{url('js/app-settings.js')}}"></script>

        <!-- Chart.js -->
        <script src="{{url('assets/vendor/Chart.min.js')}}"></script>

        <!-- UI Charts Page JS -->
        <script src="{{url('assets/js/chartjs-rounded-bar.js')}}"></script>
        <script src="{{url('assets/js/charts.js')}}"></script>

        <!-- Chart.js Samples -->
        <script src="{{url('assets/js/page.ui-charts.js')}}"></script>


    </body>

</html>