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

    {{-- @dd(auth()->user()) --}}

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
                                        <img src="{{ asset('foto/'. auth('admin')->user()->foto) }}"
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
                                    <h1 class="h4 mb-1">{{ auth('admin')->user()->name }}</h1>
                                    <p class="text-muted">{{ auth('admin')->user()->email }}</p>
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
                        <form method="post" action="{{ route('profileadmin.update', ['id'=> auth('admin')->user()->id]) }}" enctype="multipart/form-data">
                        @csrf
                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Basic Information</strong></p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fname">Nama</label>
                                                    <input id="fname"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Admin Account"
                                                           value="{{ auth('admin')->user()->name }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fname">No Telepon</label>
                                                    <input id="fname"
                                                           type="text"
                                                           class="form-control"
                                                           name="telepon"
                                                           placeholder="083831432980"
                                                           value="{{ auth('admin')->user()->telepon }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="lname">Jenis Kelamin</label>
                                                        <select class="form-control" name="jk">
                                                            <option selected>{{ auth('admin')->user()->jk }}</option>
                                                            <option>Perempuan</option>
                                                            <option>Laki-Laki</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fname">Alamat</label>
                                                    <input id="fname"
                                                           type="text"
                                                           class="form-control"
                                                           name="alamat"
                                                           placeholder="Jl Anggrek"
                                                           value="{{ auth('admin')->user()->alamat }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right mb-5">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Update Your Password</strong></p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="form-group">
                                            <label for="npass">New Password</label>
                                            <input style="width: 270px;"
                                                   id="npass"
                                                   type="password"
                                                   name="password"
                                                   class="form-control is-invalid">
                                            <small class="invalid-feedback">The new password must not be empty.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpass">Confirm Password</label>
                                            <input style="width: 270px;"
                                                   id="cpass"
                                                   type="password"
                                                   class="form-control"
                                                   name="password"
                                                   placeholder="Confirm password">
                                        </div>
                                        <div class="text-right mb-5">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Profile Settings</strong></p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <div class="dz-clickable media align-items-center"
                                                 data-toggle="dropzone"
                                                 data-dropzone-url="http://"
                                                 data-dropzone-clickable=".dz-clickable"
                                                 data-dropzone-files='["images/account-add-photo.svg"]'>
                                                <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                                    <div class="avatar"
                                                         style="width: 80px; height: 80px;">
                                                        <img src="{{ asset('foto/'. auth('admin')->user()->foto) }}"
                                                             class="avatar-img rounded"
                                                             alt=""
                                                             name="foto"
                                                             data-dz-thumbnail> 
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <input type="file" class="input" name="foto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right mb-5">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
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
        <script src="js/chartjs-rounded-bar.js"></script>

        <!-- Chart Samples -->
        <script src="js/page.dashboard.js"></script>
        <script src="js/progress-charts.js"></script>

        <!-- Vector Maps -->
        <script src="vendor/jqvmap/jquery.vmap.min.js"></script>
        <script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="js/vector-maps.js"></script>

    </body>

</html>