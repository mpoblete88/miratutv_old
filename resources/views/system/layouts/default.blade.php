<!doctype html>
<html lang="es">
<head>
    @include('system.includes.head')
</head>
<body>

<style>
    footer{
        background-color: #292b2c!important;
    }

    #contact{
        color: #74787E;
    }

    #rrss{
        color: #74787E;
    }
</style>


    <header class="row">
        @include('system.includes.header')
    </header>


    {{--<div id="sidebar" class="col-md-4">--}}
    @include('system.includes.sidebar')
    {{--</div>--}}

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

</body>
</html>