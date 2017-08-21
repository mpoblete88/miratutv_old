<!doctype html>
<html lang="es">
<head>
    @include('system.includes.head')
    @yield('head')
    <style>

        footer{
            background-color: #292b2c!important;
            padding: 10px;
        }

        #contact{
            color: #74787E;
        }

        #rrss{
            color: #74787E;
        }

        .logo-header
        {
            padding: 0 !important;
        }

     @yield('style')
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    {{--<header class="row">--}}
        @include('system.includes.header')
    {{--</header>--}}


    {{--@include('system.includes.sidebar')--}}

    <!-- main content -->
    @yield('content')

    <div id="content" class="">
    </div>
    <div id="main" class="row">

    </div>
    <!-- sidebar content -->

    <footer class="row">
        @include('system.includes.footer')
    </footer>
    @yield('script')

</body>
</html>