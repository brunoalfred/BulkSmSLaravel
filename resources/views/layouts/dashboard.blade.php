<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Dashboard') }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('assets/css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    @yield('css')
    @stack('css')
</head>


<body class="loading" data-layout="topnav"
    data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>

    <div class="wrapper">

        <div class="content-page">
            <div class="content">

                @include('layouts.navbar')
                @include('layouts.partials.header')
                @yield('content')

            </div>
        </div>
    </div>
    <!-- bundle -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- Apex js -->
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>

    <!-- Todo js -->
    <script src="{{ asset('assets/js/ui/component.todo.js') }}"></script>

    <!-- demo app -->
    <script src="{{ asset('assets/js/pages/demo.dashboard-crm.js') }}"></script>
    <!-- end demo js-->
    @stack('scripts')

</body>

</html>
