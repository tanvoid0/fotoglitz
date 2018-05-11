<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/techtiq/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Apr 2018 08:15:22 GMT -->
<head>
    @include('FrontEnd.layouts.includs.meta')

    <link rel="shortcut icon" href="{{asset('FrontEnd/img/favicon.png')}}" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Google-Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600|Rubik:400,500,700" rel="stylesheet">

    @include('FrontEnd.layouts.partials.stylesheets')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    {{-- <div class="animationload">
        <div class="loader">&nbsp;</div>
    </div> --}}
    <!-- End Preloader -->

    @include('FrontEnd.layouts.includs.header-top')

    @include('FrontEnd.layouts.includs.header')

    @yield('main-content')

    @include('FrontEnd.layouts.includs.footer')

    @include('FrontEnd.layouts.includs.trail-modal')

    <!-- Back to top -->
    <a href="#" class="back-to-top">
      <i class="fa fa-chevron-up"></i>
    </a>

    @include('FrontEnd.layouts.partials.scripts')
</body>


<!-- Mirrored from themesdesign.in/techtiq/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Apr 2018 08:15:53 GMT -->
</html>
