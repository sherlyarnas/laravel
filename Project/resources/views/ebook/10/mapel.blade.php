@extends('layouts.homepage')

@section('menu')
<head>
    <title>Intense Corporate Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Intense Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{url('homepage/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{url('homepage/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{url('homepage/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>


 <section class="single_grid_w3_main align-w3-abt" id="about">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">ENJOY YOUR STUDY</h4>
                <p class="sub-title">Nikmati belajar sesukamu tanpa batas, jarak </p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="abt-grid">
                        <div class="row">
                            <div class="col-3">
                                <div class="abt-icon">
                                    <span class="fa fa-ravelry"></span>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="abt-txt">
                                    <h4> <a href="/ebook/10/Matematika"><p>MATEMATIKA</p></a></h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-lg-0 my-4">
                    <div class="abt-grid">
                        <div class="row">
                            <div class="col-3">
                                <div class="abt-icon">
                                    <span class="fa fa-pencil"></span>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="abt-txt">
                                    <h4>KIMIA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="abt-grid">
                        <div class="row">
                            <div class="col-3">
                                <div class="abt-icon">
                                    <span class="fa fa-laptop"></span>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="abt-txt">
                                    <h4>FISIKA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection