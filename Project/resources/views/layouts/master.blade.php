<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ url('homepage/img/favicon.png')}}" rel="icon">
  <link href="{{ url('homepage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ url('homepage/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('homepage/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ url('homepage/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ url('homepage/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ url('homepage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ url('homepage/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url('homepage/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
             <li class="drop-down"><a href="">SMP</a>
            <ul>
                <li class="drop-down"><a href="">Kelas 7</a>
                    <ul>
                        <li class="drop-down"><a href="">Matematika</a></li>
                        <li><a href="">Kimia</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Kelas 8</a>
                    <ul>
                        <li><a href="">Fisika</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Kelas 9</a>
                    <ul>
                        <li><a href="">Bahasa Inggris</a></li>
                        <li><a href="">Biologi</a></li>
                    </ul>
                </li>
            </ul>
          </li>
          <li class="drop-down"><a href="">SMA</a>
            <ul>
                <li class="drop-down"><a href="">Kelas 10</a>
                    <ul>
                        <li><a href="/video/10/matematika">Matematika</a></li>
                        <li><a href="/ebook/10/kimia">Kimia</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Kelas 11</a>
                    <ul>
                        <li><a href="/ebook/11/fisika">Fisika</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Kelas 12</a>
                    <ul>
                        <li><a href="/ebook/12/english">Bahasa Inggris</a></li>
                        <li><a href="/ebook/12/biologi">Biologi</a></li>
                    </ul>
                </li>
            </ul>
          </li>
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Rapid Solutions<br>for Your <span>Business!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="{{ url('homepage/img/intro-img.svg')}}" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

   <nav aria-label="breadcrumb">
       @yield('menu')
    </nav>
    <!-- //breadcrumbs -->
    <!-- about-->
    
    <!-- //about -->
    <!-- about-->
    <section class="single_grid_w3_main align-w3">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">@yield('judul_konten')</h4>
                <p class="sub-title">@yield('content')</p>
              
            </div>
            
            
        </div>
    </section>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Rapid</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      A108 Adam Street <br>
                      New York, NY 535022<br>
                      United States <br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
              <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ url('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ url('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ url('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('lib/easing/easing.min.js')}}"></script>
  <script src="{{ url('lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ url('lib/wow/wow.min.js')}}"></script>
  <script src="{{ url('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ url('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ url('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ url('lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ url('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('js/main.js')}}"></script>

</body>
</html>
