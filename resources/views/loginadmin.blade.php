<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login Admin</title>

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
        <link type="text/css"
              href="{{url('css/app.rtl.css')}}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{url('css/vendor-material-icons.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{url('css/vendor-material-icons.rtl.css')}}"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{url('css/vendor-fontawesome-free.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{url('css/vendor-fontawesome-free.rtl.css')}}"
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
                <p class="m-0">Login untuk mengakses akun anda </p>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    
                </div>
            @endif

           <form action="{{ route('admin.check') }}" method="POST" autocomplete="off">
            @csrf
                <div class="form-group">
                    <label class="text-label"
                           for="email">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email"
                               type="email"
                               name="email"
                               required="" autofocus
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
                        <input id="password"
                               type="password"
                               name="password"
                               required=""
                               class="form-control form-control-prepended"
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
                            type="submit">Login</button>
                </div>
                <div class="form-group text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                               class="custom-control-input"
                               checked=""
                               id="remember">
                        <label class="custom-control-label"
                               for="remember">Remember me for 30 days</label>
                    </div>
                </div>
                <div class="form-group text-center">
                    Don't have an account? <a class="text-body text-underline"
                       href="/admin/signupadmin">Sign up!</a>
                </div>
            </form>
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
        <script src="{{url('js/check-selected-row.js')}}"></script>
        <script src="{{url('js/dropdown.js')}}"></script>
        <script src="{{url('js/sidebar-mini.js')}}"></script>
        <script src="{{url('js/app.js')}}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{url('js/app-settings.js')}}"></script>

    </body>

</html>