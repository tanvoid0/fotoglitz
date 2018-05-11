<!-- JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- initialize jQuery Library -->
<script src="{{asset('FrontEnd/js/jquery.min.js')}}"></script>
<!-- jquery easing -->
<script src="{{asset('FrontEnd/js/jquery.easing.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('FrontEnd/js/bootstrap.min.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{asset('FrontEnd/js/SmoothScroll.js')}}"></script>
<!-- owl-carousel -->
<script src="{{asset('FrontEnd/js/owl.carousel.js')}}"></script>
<!-- Counter-up -->
<script src="{{asset('FrontEnd/js/waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('FrontEnd/js/jquery.counterup.min.js')}}" type="text/javascript"></script>
<!--popup js-->
<script src="{{asset('FrontEnd/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
<!-- Parallax -->
<script src="{{asset('FrontEnd/js/jquery.stellar.min.js')}}"></script>
<!-- EasyPieChart -->
<script src="{{asset('FrontEnd/js/jquery.circliful.min.js')}}"></script>
<!-- Typed -->
<script src="{{asset('FrontEnd/js/typed.js')}}" type="text/javascript"></script>
<!-- Dropify image upload -->
<script src="{{asset('FrontEnd/js/dropify.min.js')}}" type="text/javascript"></script>
<!-- Custom -->
<script src="{{asset('FrontEnd/js/app.js')}}" type="text/javascript"></script>

<!-- Extra Script -->
@section('extra-script')
@show

<!-- Switcher script for demo only -->
<script type="text/javascript" src="{{asset('FrontEnd/js/switcher.js')}}"></script>

<script>
  $(document).ready(function(){
    // Basic
    $('.dropify').dropify();
  });
</script>
