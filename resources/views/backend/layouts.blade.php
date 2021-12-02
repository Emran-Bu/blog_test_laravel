<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}">
    </head>

    <body>
        <!-- Responsive navbar-->
        @include('backend.include.header')
        <!-- Page header with logo and tagline-->
        @yield('welcome')
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    @yield('content')

                    <!-- Pagination-->
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    {{-- @include('backend.include.right-sidebar') --}}
                </div>
            </div>
        </div>

       @include('backend.include.footer')

       <!-- Bootstrap core JS-->
        <script src="/assets/frontend/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

</html>
