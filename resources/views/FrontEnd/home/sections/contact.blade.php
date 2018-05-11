<section id="contact" class="">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="title">About <span>Us</span></h3>
                <div class="titleHR"><span></span></div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

        <div class="row">
            <div class="col-md-7">
              <p class="slog">Welcome to Fotoglitz, the leading provider of Clipping Path services. We have a team of professionals that are dedicated to providing you with the best image solutions for both personal and business use. We understand that images play a significant role in communicating and holding memories. In order for these images to be effective for such purposes, they have to be of high quality. It is for this reason that we offer clients a wide array of services.</p>
              <div class="row features-box">
                  <div class="col-sm-12">
                    <div class="media">
                      <div class="media-left">
                        <i class="fas fa-gem"></i>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">POWER OF FLEXIBILITY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /col -->
                  <div class="col-sm-12">
                    <div class="media">
                      <div class="media-left">
                        <i class="fas fa-window-restore"></i>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">FULLY RESPONSIVE</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /col -->
                  <div class="col-sm-12">
                    <div class="media">
                      <div class="media-left">
                        <i class="fas fa-globe"></i>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">GREAT WEB IDEAS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /col -->
              </div>
              <!-- /row -->
            </div>
            <div class="col-md-5">
              <div class="contact-form">
                <h4 class="text-center"><i class="icon-envelope-letter"></i> &nbsp; Contact</h4>
                <form action="{{ route('mail') }}" method="post">
                    {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your Name"  required />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Your Email"  required/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject.."  required/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Message...."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 text-right">
                      <input type="submit" class="submitBnt btn btn-block" value="Send Message">
                    </div>
                  </div>
                </form>
                <!-- /form -->
              </div>
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</section>
