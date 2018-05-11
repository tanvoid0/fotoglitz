<!-- Header -->
<nav class="navbar navbar-default navbar-fixed-top navbar-custom navbar-sticky">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('FrontEnd/img/logo.png') }}" class="img-responsive" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#home">Home</a>
                </li>
                <li>
                  <a href="#services">Services</a>
                </li>
                <li>
                  <a href="#works">Portfolio</a>
                </li>
                <li>
                  <a data-toggle="modal" href="#trailModal">Free Trail Offer</a>
                </li>
                {{-- <li>
                  <a href="#pricing">Pricing</a>
                </li>
                <li>
                  <a href="#team">Team</a>
                </li> --}}
                <li>
                  <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- /Header -->
