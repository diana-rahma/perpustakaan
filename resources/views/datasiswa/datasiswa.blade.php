<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Data Siswa</title>

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

        <!-- Quill Theme -->
        <link type="text/css"
              href="css/vendor-quill.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-quill.rtl.css"
              rel="stylesheet">

        <!-- Dropzone -->
        <link type="text/css"
              href="css/vendor-dropzone.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-dropzone.rtl.css"
              rel="stylesheet">

        <!-- Select2 -->
        <link type="text/css"
              href="css/vendor-select2.css"
              rel="stylesheet">
        <link type="text/css"
              href="css/vendor-select2.rtl.css"
              rel="stylesheet">
        <link type="text/css"
              href="vendor/select2/select2.min.css"
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
                                           href="profile.html"><i class="material-icons">account_circle</i> My profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="login.html"><i class="material-icons">exit_to_app</i> Logout</a>
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
                                            <li class="breadcrumb-item"><a href="/index">Home</a></li>
                                            <li class="breadcrumb-item active"
                                                aria-current="page">Data Siswa</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Data Siswa</h1>
                                </div>
                                <a href="/tambah_siswa"
                                   class="btn btn-success ml-3">Tambah Data Siswa <i class="material-icons">add</i></a>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-15 card-form__body card-body">

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="lname">Kelas</label>
                                                        <select class="form-control" name="jk">
                                                            <option value="">Kelas</option>
                                                            <option>X</option>
                                                            <option>XI</option>
                                                            <option>XII</option>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="lname">Jurusan</label>
                                                        <select class="form-control" name="jk">
                                                            <option value="">Jurusan</option>
                                                            <option>MM</option>
                                                            <option>RPL</option>
                                                            <option>TKJ</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="lname">Alfabet</label>
                                                        <select class="form-control" name="jk">
                                                            <option value="">Alfabet</option>
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid page__container">
                                            
                                            <div class="row no-gutters">
                                                <div class="col-lg-15 card-form__body card-body">
                                                    <label for="select05">Nama Siswa</label>
                                                    <select id="select05"
                                                            style="height: 35px;"
                                                            data-toggle="select"
                                                            class="form-control form-control-sm">
                                                        <option>Nama Siswa</option>
                                                        <option>Christiana Inggit</option>
                                                        <option>Clarissa Putri</option>
                                                        <option>Jesika Novanda</option>
                                                        <option>Michael Putra</option>
                                                        <option>Rahmalia Putri</option>
                                                        <option>Vania Bunga</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="text-right mb-15">
                                            <a href=""
                                               class="btn btn-success">Enter</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="container-fluid page__container">
                            <div class="card">
                                <div class="table-responsive"
                                     data-toggle="lists"
                                     data-lists-values='["js-lists-values-employee-name"]'>

                                    <table class="table mb-0 thead-border-top-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NISN</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Alfabet</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telepon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @php
                                            $no = 1;
                                        @endphp

                                        @foreach ($data as $row)

                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $row->nisn }}</td>
                                                <td>{{ $row->nama_siswa }}</td>
                                                <td>{{ $row->kelas }}</td>
                                                <td>{{ $row->jurusan }}</td>
                                                <td>{{ $row->alfabet }}</td>
                                                <td>{{ $row->jk }}</td>
                                                <td>{{ $row->telp }}</td>
                                                <td>
                                                <form action="{{ route('delete.siswa', $row->id) }}" method="POST">
                                                    <a href="{{ route('edit.siswa', $row->id) }} "class="btn btn-warning btn sweet-confirm">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn sweet-confirm">Delete</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        <br>

                        <ul class="pagination m-0">

                            <li class="page-item disabled">
                                <a class="page-link"
                                   href="#"
                                   aria-label="Previous">
                                    <span aria-hidden="true"
                                          class="material-icons">chevron_left</span>
                                    <span>Prev</span>
                                </a>
                            </li>

                            <li class="page-item active">
                                <a class="page-link"
                                   href="#"
                                   aria-label="1">
                                    <span>1</span>
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link"
                                   href="#"
                                   aria-label="2">
                                    <span>2</span>
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link"
                                   href="#"
                                   aria-label="Next">
                                    <span>Next</span>
                                    <span aria-hidden="true"
                                          class="material-icons">chevron_right</span>
                                </a>
                            </li>
                        </ul>

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
      'default': 'ui-forms.html',
      'fixed': 'fixed-ui-forms.html',
      'fluid': 'fluid-ui-forms.html',
      'mini': 'mini-ui-forms.html'
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

        <!-- jQuery Mask Plugin -->
        <script src="vendor/jquery.mask.min.js"></script>

        <!-- Quill -->
        <script src="vendor/quill.min.js"></script>
        <script src="js/quill.js"></script>

        <!-- Dropzone -->
        <script src="vendor/dropzone.min.js"></script>
        <script src="js/dropzone.js"></script>

        <!-- Select2 -->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="js/select2.js"></script>

    </body>

</html>