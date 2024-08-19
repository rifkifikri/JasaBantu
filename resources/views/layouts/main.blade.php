<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5" />
        <meta name="author" content="NobleUI" />
        <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />
        <!-- Icon -->
        <link rel="icon" href="{{ url('images/LogoPerusahaan.png') }}" />
        <title>ADMIN JASA BANTU</title>
        
        @include('layouts.partials.css')
        @notifyCss
    </head>

    <body>
        <div class="main-wrapper">
            <!-- Sidebar -->
            @include('layouts.partials.sidebar')
            <!-- End of Sidebar -->

            <div class="page-wrapper">
                <!-- partial:partials/_navbar.html -->
                @include('layouts.partials.navbar')
                <!-- partial -->
               
                <!-- Body -->
                <div class="page-content">
                    @yield('content')
                </div>
                <!-- End of Body -->

                <!-- partial:partials/_footer.html -->
                @include('layouts.partials.footer')
                <!-- partial -->
            </div>
        </div>

        @include('layouts.partials.js')
        @stack('script')
    </body>

</html>