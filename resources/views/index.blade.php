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
              href="vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="css/app.css"
              rel="stylesheet">
        

        <!-- Material Design Icons -->
        <link type="text/css"
              href="css/vendor-material-icons.css"
              rel="stylesheet">
        

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="css/vendor-fontawesome-free.css"
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
                            <a href="index.html"
                               class="navbar-brand ">

                                <span>Perpustakaan</span>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="index.html">
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
                                        <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                    </a>
                                    <div id="notifications_menu"
                                         class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2">
                                            <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                            <a href="javascript:void(0)"
                                               class="text-muted"><small>Clear all</small></a>
                                        </div>
                                        <div class="navbar-notifications-menu__content"
                                             data-perfect-scrollbar>
                                            <div class="py-2">

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                             style="width: 32px; height: 32px;">
                                                            <img src="images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">JD</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                             style="width: 32px; height: 32px;">
                                                            <img src="images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">JD</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                             style="width: 32px; height: 32px;">
                                                            <img src="images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">JD</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"
                                           class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <span class="mr-1 d-flex-inline">
                                            <span class="text-light">Admin A.</span>
                                        </span>
                                        <img src="images/avatar/profile.png"
                                             class="rounded-circle"
                                             width="32"
                                             alt="Frontted">
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Admin Account</strong></div>
                                            <div class="text-muted">@adminacc</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="/profile"><i class="material-icons">account_circle</i> My profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="/login"><i class="material-icons">exit_to_app</i> Logout</a>
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
                                            <div class="text-muted mt-1">10.000</div>
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
                                            <div class="text-muted mt-1">8 Kategori</div>
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
                                            <div class="text-muted mt-1">35</div>
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
                                            <div class="text-muted mt-1">1000</div>
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
                                    <li class="sidebar-menu-item active open">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#dashboards_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                            <span class="sidebar-menu-text">Menu Utama</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse show "
                                            id="dashboards_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/index">
                                                    <span class="sidebar-menu-text">Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/datasiswa">
                                                    <span class="sidebar-menu-text">Data Siswa</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/listkelas">
                                                    <span class="sidebar-menu-text">Data Kelas</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/datapeminjam">
                                                    <span class="sidebar-menu-text">Data Peminjam</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/databuku">
                                                    <span class="sidebar-menu-text">Data Buku</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/konfirmasi">
                                                    <span class="sidebar-menu-text">Konfirmasi</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/listkategori">
                                                    <span class="sidebar-menu-text">List Kategori</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/historydenda">
                                                    <span class="sidebar-menu-text">History Denda</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="sidebar-menu-item active open">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#pages_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                            <span class="sidebar-menu-text">Akses</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse show "
                                            id="pages_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/login">
                                                    <span class="sidebar-menu-text">Login User</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="/login">
                                                    <span class="sidebar-menu-text">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
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
        <script src="vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendor/popper.min.js"></script>
        <script src="vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="vendor/material-design-kit.js"></script>

        <!-- App -->
        <script src="js/toggle-check-all.js"></script>
        <script src="js/check-selected-row.js"></script>
        <script src="js/dropdown.js"></script>
        <script src="js/sidebar-mini.js"></script>
        <script src="js/app.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="js/app-settings.js"></script>

    </body>

</html>