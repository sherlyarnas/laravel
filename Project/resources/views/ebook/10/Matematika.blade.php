
@extends('layouts.homepage')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
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

  <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">
        <header class="section-header">
          <h3>ENJOY YOUR STUDY</h3>
          <p>Belajar sesukamu</p>
        </header>
             <div class="row">
                @foreach ($EbookTampil as $e)
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                             <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a href="">{{$e->judul_buku}}</a></h4>
                                    <p><a href="/file_ebook/{{$e->file_ebook}}" target="_blank">read me</a></p>
                        </div> 
                    </div>       
                @endforeach
             </div>
         </div>
    </section><!-- #services -->

    
	<h1>Yuk Baca Bukumu! </h1>
			@if(session()->get('success'))
				<div class="alert alert-success">
					{{session()->get('success')}}
				</div>
			 <br/>
			@endif
	<table border="1">
		<tr>
			<th>Kode Buku</th>
			<th>Judul</th>
			<th>Penerbit</th>
			<th>Penulis</th>
			<th >Tahun Terbit</th>
			<th> Ebook </th>
			<th><td colspan='2' href="{{ route('ebook.create') }}">Tambah</td></th>
				@foreach ($EbookTampil as $e)
				<tr>
					<td> {{$e->kd_buku}}</td>
					<td> {{$e->judul_buku}}</td>
					<td> {{$e->penerbit}}</td>
					<td> {{$e->penulis}}</td>
					<td> {{$e->tahun_terbit}}</td>
					<td><a href="/file_ebook/{{$e->file_ebook}}" target="_blank"> --- baca ----</a></td>

					<td class="btn btn-secondary"> <a href="{{ route('ebook.edit' ,$e->kd_buku)}}">Edit </a>|
						<form action="{{route ('ebook.destroy' , $e->kd_buku)}}" method="post">
							@csrf
							@method ('DELETE')
							 <td>Delete</td>
                		</form>
                	</td>
				</tr>			
			@endforeach
			</tr>
	</table>

@endsection