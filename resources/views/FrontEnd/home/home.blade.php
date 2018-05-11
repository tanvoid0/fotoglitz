@extends('FrontEnd.layouts.master')

@section('title', 'Foto Glitz')

@section('main-content')
  <!-- HOME
  ================================================== -->
  <section class="carousel-section parallax" data-stellar-background-ratio="0.8" id="home">
      <div class="home-bg"></div>
      <div id="carousel-example-generic" class="carousel carousel-razon" data-ride="carousel" data-interval="5000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active"> <!-- item-1 -->
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                              <div class="carousel-caption">
                                  <div class="carousel-text">
                                      <h1 class="animated fadeInDownBig animation-delay-1 carousel-title">World class  <span> services </span></h1>
                                      <p class="animated fadeInUpBig animation-delay-8 margin-t-md">Clipping path, Background remove, Image retouch, Ghost mannequin, <br> e-commerce image ready, color correction.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item"> <!-- item-2 -->
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                              <div class="carousel-caption">
                                  <div class="carousel-text">
                                      <h1 class="animated fadeInDownBig animation-delay-1 carousel-title">We <span> Are </span> Creative Agency</h1>
                                      <p class="animated fadeInUpBig animation-delay-8 margin-t-md">Newspaper ad design, Product catalog, Flayer, Brocheure, Magazine.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item"> <!-- item-3 -->
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                              <div class="carousel-caption">
                                  <div class="carousel-text">
                                      <h1 class="animated fadeInDownBig animation-delay-1 carousel-title"><span> Attractions!  </span> We Offer:</h1>
                                      <p class="animated fadeInUpBig animation-delay-8 margin-t-md">
                                        <i class="fas fa-check"></i>Quality Image Editing &nbsp; <i class="fas fa-check"></i>You can choose a comfortable price. &nbsp; <i class="fas fa-check"></i>Re-work on Clients' Dissatisfaction* &nbsp; <i class="fas fa-check"></i>Discount on Big Volume Editing &nbsp; <i class="fas fa-check"></i>Special Discount on Long-term Editing &nbsp;
                                        <i class="fas fa-check"></i>Delivery before Due Deadline &nbsp; <i class="fas fa-check"></i>Three Steps Quality Check &nbsp; <i class="fas fa-check"></i>24/7 Support Round the Year &nbsp; <i class="fas fa-check"></i>Two Trial Image Editing (Free)
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end HOME/SLIDER -->

  <!-- Services -->
  @include('FrontEnd.home.sections.services')
  <!-- /Services -->

  <!-- FUN-FACTS -->
  @include('FrontEnd.home.sections.counter')
  <!-- / FUN-FACTS -->

  <!-- Portfolio -->
  @include('FrontEnd.home.sections.portfolio-home')
  <!-- / Portfolio -->

  <!--  Intro-section -->
  <section class="section-full studio-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="studio-content">
						<div class="text text-uppercase">
              <p>take our services and</p>
              <h1>just relax!</h1>
            </div>
            <div class="action-buttons">
              <a href="#" class="btn btn-custom btn-contact">CONTACT WITH US</a>
              <a href="#" class="btn btn-custom btn-trail">START TRIAL</a>
            </div>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- / Intro-section -->

  <!-- Skills -->
  @include('FrontEnd.home.sections.skills')
  <!-- / Skills -->

  <!-- Testimonials -->
  @include('FrontEnd.home.sections.testimonials')
  <!-- / Testimonials -->

  <!-- CONTACT -->
  @include('FrontEnd.home.sections.contact')
  <!-- End CONTACT -->


@endsection
