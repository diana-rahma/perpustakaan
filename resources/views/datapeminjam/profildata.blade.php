<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Profile</title>

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
        <link type="text/css"
              href="css/app.rtl.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="css/vendor-material-icons.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-material-icons.rtl.css"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="css/vendor-fontawesome-free.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-fontawesome-free.rtl.css"
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

                        <div style="padding-bottom: calc(5.125rem / 2); position: relative; margin-bottom: 1.5rem;">
                            <div class="bg-primary"
                                 style="min-height: 150px;">
                                <div class="d-flex align-items-end container-fluid page__container"
                                     style="position: absolute; left: 0; right: 0; bottom: 0;">
                                    <div class="avatar avatar-xl">
                                        <img src="images/avatar/profile.png"
                                             alt="avatar"
                                             class="avatar-img rounded"
                                             style="border: 2px solid white;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h1 class="h4 mb-1">Jesika Novanda</h1>
                                    <p class="text-muted">@jsknvd</p>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div class="tab-pane active"
                                             id="activity">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Info Peminjaman</strong></p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fname">Nama</label>
                                                    <input id="fname"
                                                           type="text"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="Jesika Novanda">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fname">Kelas</label>
                                                    <input id="fname"
                                                           type="text"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="XI RPL B">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fname">Jumlah buku yang sedang dipinjam</label>
                                                    <input id="fname"
                                                           type="text"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="5">
                                                </div>
                                            </div>
                                        </div>
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
      'default': 'profile.html',
      'fixed': 'fixed-profile.html',
      'fluid': 'fluid-profile.html',
      'mini': 'mini-profile.html'
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