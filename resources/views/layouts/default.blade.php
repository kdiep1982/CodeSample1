<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body>

    <div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">
        @include('includes.header')


        <main id="main-container">
            @yield('content')
        </main>

            @include('includes.footer')

    </div>

</body>
</html>
