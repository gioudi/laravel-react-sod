<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Punto De Venta</title>
    <!-- plugins:css -->
    {!! Html::style('vendors/iconfonts/font-awesome/css/all.min.css') !!}
    {!! Html::style('vendors/css/vendor.bundle.base.css') !!}
    {!! Html::style('vendors/css/vendor.bundle.addons.css') !!}
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {!! Html::style('css/style.css') !!}
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            {{-- <div class="brand-logo"> --}}
                            {{-- <img src="{{asset('images/logo.svg')}}" alt="logo"> --}}
                            {{-- </div>------Codigo editado por Stiven --}}
                            <h4 class="text text-lg-center">S.O.D</h4>
                            <h6 class="font-weight-light text-lg-center">Bienvenido al centro de control de Examples,
                                por favor ingrese usuario y contraseña</h6>

                            @if (session()->has('message'))
                                <div class="row d-flex justify-content-center align-items-start">
                                    <div class="col-10">
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ session()->get('message') }}

                                        </div>

                                    </div>
                                </div>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;
                            2020
                            Todos los derechos reservados </p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {!! Html::script('vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('vendors/js/vendor.bundle.addons.js') !!}
    <!-- endinject -->
    <!-- inject:js -->
    {!! Html::script('js/off-canvas.js') !!}
    {!! Html::script('js/hoverable-collapse.js') !!}
    {!! Html::script('js/misc.js') !!}
    {!! Html::script('js/settings.js') !!}
    {!! Html::script('js/todolist.js') !!}
    <!-- endinject -->
</body>

</html>
