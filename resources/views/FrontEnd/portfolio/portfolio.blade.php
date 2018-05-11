@extends('FrontEnd.layouts.master')

@section('title', 'Foto Glitz')

@section('extra-stylesheet')
  <link href="{{asset('FrontEnd/css/twentytwenty.css')}}" rel="stylesheet" type="text/css" />
  <style media="screen">
    .navbar-sticky{
      box-shadow: 0 2px 2px rgba(0,0,0,.1);
    }
    #details-portfolio .work-section{
      margin-bottom: 25px;
    }
    #details-portfolio .thumbnail{
      padding: 1px;
      border: none;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    #details-portfolio .thumbnail .caption{
      background-color: #4D4E4E;
      font-size: 17px;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
    }
    #details-portfolio .thumbnail .caption p{
      color: #fff;
    }
  </style>
@endsection

@section('main-content')
  <section class="" id="details-portfolio">
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h3 class="title">Our Portfolios</h3>
                  <div class="titleHR"><span></span></div>
              </div>
              <!-- /col -->
          </div>
          <div class="row">

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Backimage1.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Backimage1_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/t-shirt.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/t-shirt_done.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/teeth_-2.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/teeth_-2_done.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/reflect_111.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/reflect_111_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Reflect_1.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Reflect1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Refle.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Refle_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Raster-to-Vector-After.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Raster-to-Vector-Before.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/neckjoint_1.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/neckjoint_2.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/man.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/man_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/hair_done.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/hair_done_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Drop.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Drop_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Back-Remove1.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Back-Remove1_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Backig1.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Backig1_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Background-remove.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Background-remove_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

            {{-- Single Portfolio --}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="work-section">
                <div class="thumbnail">
                  <div class="twentytwenty-container">
                    <img src="{{asset('FrontEnd/img/portfolio-image/Background1.jpg')}}" />
                    <img src="{{asset('FrontEnd/img/portfolio-image/Background1_1.jpg')}}" />
                  </div>
                  <div class="caption text-center">
                    <p>Service Name</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- End of Single Portfolio --}}

          </div>
      </div>
      <!-- container -->
  </section>

@endsection

@section('extra-script')
  <script src="{{asset('FrontEnd/js/jquery.event.move.js')}}"></script>
  <script src="{{asset('FrontEnd/js/jquery.twentytwenty.js')}}"></script>
  <script>
  $(function(){
    $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
    $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.5, orientation: 'vertical'});
  });
  </script>
@endsection
