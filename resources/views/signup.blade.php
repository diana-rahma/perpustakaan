<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sign Up</title>

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

    <body class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form card">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href="/index"
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">
                    <span class="text-primary mr-2">
                    </span>
                    <span>Perpustakaan</span>
                </a>
                <p class="m-0">Sign Up untuk memiliki akun </p>
            </div>

            <form action="signup" method="post" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label class="text-label"
                           for="name">Name:</label>
                    <div class="input-group input-group-merge">
                        <input id="name" type="text" name="name"
                               placeholder="Your Name"
                               class="form-control form-control-prepended @error('name') is-invalid @enderror"
                               value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-user"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                        for="nisn">NISN:</label>
                    <div class="input-group input-group-merge">
                        <input id="nisn" type="text" name="nisn"
                            placeholder="NISN"
                            class="form-control form-control-prepended @error('nisn') is-invalid @enderror"
                            value="{{ old('nisn') }}">
                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-user"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                           for="kelas">Kelas:</label>
                    <div class="input-group input-group-merge">
                        <input id="kelas" type="text" name="kelas"
                               placeholder="Kelas"
                               class="form-control form-control-prepended @error('kelas') is-invalid @enderror"
                               value="{{ old('kelas') }}">
                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                           for="telepon">No Telepon:</label>
                    <div class="input-group input-group-merge">
                        <input id="telepon" type="text" name="telepon"
                               placeholder="No. Telepon"
                               class="form-control form-control-prepended @error('telepon') is-invalid @enderror"
                               value="{{ old('telepon') }}">
                            @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-phone-square-alt"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                           for="jk">Jenis Kelamin:</label>
                    <div class="input-group input-group-merge">
                        <input id="jk" type="text" name="jk"
                               placeholder="Jenis Kelamin"
                               class="form-control form-control-prepended @error('jk') is-invalid @enderror"
                               value="{{ old('jk') }}">
                            @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-venus-mars"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                           for="alamat">Alamat:</label>
                    <div class="input-group input-group-merge">
                        <input id="alamat" type="text" name="alamat"
                               placeholder="Alamat"
                               class="form-control form-control-prepended @error('alamat') is-invalid @enderror"
                               value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-address-card"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                           for="email">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email" type="email" name="email"
                               placeholder="name@example.com"
                               class="form-control form-control-prepended @error('email') is-invalid @enderror"
                               value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-label"
                           for="password">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password" type="password" name="password" 
                                class="form-control form-control-prepended @error('password') is-invalid @enderror" 
                                placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary"
                            type="submit">Create Account</button>
                </div>
                <div class="form-group text-center">
                    Have an account? <a class="text-body text-underline"
                       href="/login">Login!</a>
                </div>
            </form>
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