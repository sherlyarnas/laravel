  @extends('layouts.master')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Dinas Pendidikan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('homepage/img/favicon.png')}}" rel="icon">
  <link href="{{url('homepage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('homepage/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('homepage/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('homepage/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('homepage/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('homepage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('homepage/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('homepage/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
   <section id="pricing" class="wow fadeInUp section-bg">
      <div class="container">
        <header class="section-header">
          <h3>Yupi</h3>
          <p>Yuk Pintar</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      @foreach ($video as $e)
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title"> 
                  {{$e->judul}}
                </h4>
                <a href="/video/10/babmath" class="btn">Pelajari</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </section>