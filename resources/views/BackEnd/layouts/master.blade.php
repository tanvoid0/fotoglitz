<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="{{asset('FrontEnd/img/favicon.png')}}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    @include('BackEnd.layouts.partials.stylesheets')
  </head>

  <body>
    <div class="wrapper">
      @include('BackEnd.layouts.includs.sidebar')
      <div class="main-panel">
        @include('BackEnd.layouts.includs.header')
        <div class="content">
          @yield('main-content')
        </div>
        @include('BackEnd.layouts.includs.footer')
      </div>
    </div>
  </body>
  @include('BackEnd.layouts.partials.scripts')

</html>
