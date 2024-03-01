<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Localkod - Yönetim Panel</title>
    <meta name="description" content="Web ve Mobil Projelerinizde Localkod yanınızda ! Projelerinizde %100 güvenli ve özgür bir yazılım için bizi tercih edebilirsiniz." />
    <meta name="author" content="Localkod" />

    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.png') }}">

    @yield('css')

    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/backend/css/sweetalert.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/toastify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/custom.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .cst-web-link {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body data-topbar="dark" data-layout="horizontal">

    <div id="layout-wrapper">

        @include('backends.components.include-sections.header')

        @include('backends.components.include-sections.navbar')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>

            @yield('modal')

            @include('backends.components.include-sections.footer')
        </div>

    </div>


    @include('backends.components.include-sections.right-bar')

    <div class="rightbar-overlay"></div>


    <script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/jquery-validation/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/toastify.min.js') }}"></script>


    @yield('js')

    @include('components.alerts.all-alert')
</body>

</html>
