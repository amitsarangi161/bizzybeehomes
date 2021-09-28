<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeServices">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Page Title -->
  <title>Bizzybee Homes</title>
  <!-- Favicon Icon -->
  
   @if(!$contactus)
      <link rel="icon" href="/img/logo.png">
      @else
      <link rel="icon" href="{{URL::asset('/logo/'.$contactus->logo)}}" alt="logo" class="custom-logo">
  @endif
  <!-- Stylesheets -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/fontAwesome.min.css">
  <link rel="stylesheet" href="/css/lineIcons.min.css">
  <link rel="stylesheet" href="/css/owlCarousel.min.css">
  <link rel="stylesheet" href="/css/animate.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body class="home">
	<!-- Start Preloader -->
	<div id="preloader">
		<div class="t-circle">
			<div class="t-circle1 t-child"></div>
			<div class="t-circle2 t-child"></div>
			<div class="t-circle3 t-child"></div>
			<div class="t-circle4 t-child"></div>
			<div class="t-circle5 t-child"></div>
			<div class="t-circle6 t-child"></div>
			<div class="t-circle7 t-child"></div>
			<div class="t-circle8 t-child"></div>
			<div class="t-circle9 t-child"></div>
			<div class="t-circle10 t-child"></div>
			<div class="t-circle11 t-child"></div>
			<div class="t-circle12 t-child"></div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Start Site Header -->
  <div class="height80"></div>
	<header class="site-header">
    <div class="header-wrap style2">
      <div class="container">
        <div class="header-in">
          <div class="site-branding">
            <!-- For Image Logo -->
            <a href="/" class="custom-logo-link">
              @if(!$contactus)
              <img src="/img/logo.png" alt="Image" class="custom-logo">
              @else
                <img src="{{URL::asset('/logo/'.$contactus->logo)}}" alt="logo" class="custom-logo">
              @endif
            </a>
            <!-- For Site Title -->
            <!-- <span class="site-title">
              <a href="index.html">Bizzybeehomes</a>
            </span> -->
          </div>
          <nav class="primary-nav">
            <div class="m-menu-btn" id="m-menu-btn"><span></span></div>
            <ul class="primary-nav-list" id="primary-nav-list">
              <li class="menu-item"><a href="/">Home</a></li>
              <li class="menu-item"><a href="/#about">About</a></li>
              <li class="menu-item"><a href="/#services">Services</a></li>
              <li class="menu-item"><a href="/#projects">Projects</a></li>
              <li class="menu-item"><a href="/#team">Team</a></li>
              <li class="menu-item"><a href="/#testimonial">Testimonial</a></li>
              <li class="menu-item"><a href="/#contact">Contact</a></li>
            </ul>
            <div class="sp-phone">
              <img src="/img/phone-icon.png" alt="Image">
              <span>Call Us</span>
              <div class="sp-phone-no">{{($contactus)?$contactus->supportmobile:''}}</div>
            </div>
          </nav>
        </div>
      </div><!-- .header-wrap -->
    </div>
  </header>
  <!-- End Site Header -->

  <div class="main-content">

  @yield('content')
</div>

  <!-- Start Footer Scetion -->
    <footer class="site-footer sticky-footer">
    <div class="site-footer-in">
     <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2 class="footer-widget-title">About</h2>
            <div class="short-description">Bizzybeehomes is a very experienced construction company that give a great service of any kinds of construction project</div>
            <div class="social-btn">
              <a href="{{($contactus)?$contactus->fblink:''}}" target="_balnk"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="{{($contactus)?$contactus->twitterlink:''}}" target="_balnk"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="{{($contactus)?$contactus->instalink:''}}" target="_balnk"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2 class="footer-widget-title">Important Links</h2>
            <div class="footer-widget-list">
              <ul>
                <li><a href="/#">Home</a></li>
                <li><a href="/#about">About Us</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/#contact">Contact</a></li>
                <li><a href="/terms-and-conditions">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2 class="footer-widget-title">Contact Info</h2>
            <div class="contact-info">
              <span><i class="icon-basic_geolocalize-01"></i>{{($contactus)?$contactus->address:''}}</span>
              <span><i class="icon-device_iphone"></i>
                @if($contactus->mobile)
                  @foreach(explode(",",$contactus->mobile) as $mob)
                   {{$mob}}<br>
                  @endforeach
                @endif
              </span>
              @if($contactus->email)
                  @foreach(explode(",",$contactus->email) as $em)
                   <span><i class="icon-mail_envelope"></i><a href="#">{{$em}}</a></span>
                  @endforeach
                @endif
              
            </div>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2 class="footer-widget-title">Business Hours</h2>
            <div class="business-hours">
              <p>Our support available to help you 24 hours a day, seven days a week.</p>
              <ul>
                <li><span class="business-day">Monday-Friday:</span><span class="business-time">{{($contactus)?$contactus->mondaytofridaytiming:''}}</span></li>
                <li><span class="business-day">Saturday:</span><span class="business-time">{{($contactus)?$contactus->saturdaytiming:''}}</span></li>
                <li><span class="business-day">Sunday:</span><span class="business-time">{{($contactus)?$contactus->sundaytiming:''}}</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- .row -->
    </div> 
  </div>
  <div class="container">
    <div class="copy-right-sectin">@ 2021 Bizzybeehomes - All Right Reserved</div>
  </div>
</footer>
  <!-- End Footer Scetion -->

  <!-- Start Video Popup -->
  <div class="video-popup">
    <div class="video-popup-overlay"></div>
    <div class="video-popup-content">
      <div class="video-popup-layer"></div>
      <div class="video-popup-container">
        <div class="video-popup-align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="video-popup-close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

  <!-- Scroll Up Button -->
  <span class='scrollup' id="scrollup"></span>

 
  
  <!-- Scripts -->
  <script src="/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="/js/owlCarousel.min.js"></script>
  <script src="/js/parallax.min.js"></script>
  <script src="/js/isotope.min.js"></script>
  <script src="/js/tamjidCounter.min.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>