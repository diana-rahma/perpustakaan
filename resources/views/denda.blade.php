<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Denda</title>

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

        <!-- Flatpickr -->
        <link type="text/css"
              href="css/vendor-flatpickr.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-flatpickr.rtl.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-flatpickr-airbnb.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-flatpickr-airbnb.rtl.css"
              rel="stylesheet">

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
                            <a href="/indexuser"
                               class="navbar-brand ">

                                <span>Perpustakaan</span>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="/indexuser">
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
                                            <span class="text-light">{{ auth()->user()->name }}</span>
                                        </span>
                                        <img src="{{ asset('foto/'. auth()->user()->foto) }}"
                                             class="rounded-circle"
                                             width="32"
                                             alt="">
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>{{ auth()->user()->name }}</strong></div>
                                            <div class="text-muted">{{ auth()->user()->email }}</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="/profileuser"><i class="material-icons">account_circle</i> My profile</a>
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
                            <div class="page__heading d-flex align-items-center">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="/indexuser">Home</a></li>
                                            <li class="breadcrumb-item active"
                                                aria-current="page">Denda</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Denda</h1>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="card">
                                <div class="table-responsive"
                                     data-toggle="lists"
                                     data-lists-values='["js-lists-values-employee-name"]'>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Buku</th>
                                                <th>Gambar Buku</th>
                                                <th>Nominal Denda</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @php
                                                $no=1;
                                            @endphp

                                            @foreach ($data as $row)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $row->pinjam->buku->judulbuku }}</td>
                                                <td>
                                                    <img src="{{asset('foto/'.$row->pinjam->buku->file)}}" alt="" class="card-img" style="width:75px;">
                                                </td>
                                                <td>{{ $row->denda }}</td>
                                                <td>{{ $row->keterangan }}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        <br>

                        {{$data->links('vendor.pagination.custom')}}

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
                                            href="/indexuser">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                            <span class="sidebar-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="listbuku">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">library_books</i>
                                            <span class="sidebar-menu-text">List Buku</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/dipinjam">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">book</i>
                                            <span class="sidebar-menu-text">Sedang Dipinjam</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/history">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">history</i>
                                            <span class="sidebar-menu-text">History Peminjaman</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="/denda">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">attach_money</i>
                                            <span class="sidebar-menu-text">Denda</span>
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
      'default': 'ecommerce.html',
      'fixed': 'fixed-ecommerce.html',
      'fluid': 'fluid-ecommerce.html',
      'mini': 'mini-ecommerce.html'
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

        <!-- Flatpickr -->
        <script src="vendor/flatpickr/flatpickr.min.js"></script>
        <script src="js/flatpickr.js"></script>

        <!-- Global Settings -->
        <script src="js/settings.js"></script>

        <!-- Moment.js -->
        <script src="vendor/moment.min.js"></script>
        <script src="vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="vendor/Chart.min.js"></script>

        <!-- App Charts JS -->
        <script src="js/charts.js"></script>

        <!-- Chart Samples -->
        <script src="js/page.ecommerce.js"></script>

    </body>

</html>