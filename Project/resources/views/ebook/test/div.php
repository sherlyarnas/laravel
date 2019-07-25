
@extends('layouts.master')

@section('content')
	<h1>Yuk Baca Bukumu! </h1>
			@if(session()->get('success'))
				<div class="alert alert-success">
					{{session()->get('success')}}
				</div>
			 <br/>
			@endif
	<div class="row">
		@foreach ($EbookTampil as $e)
	  	<div class="col-sm-4">
	  		<a href="/file_ebook/{{$e->file_ebook}}" target="_blank"><img src="/file_ebook/{{$e->file_ebook}}" width="100px" height="100px" alt="Foto"></a>
	  		<p>ID :{{$e->kd_buku}}</p>
	  		<p>Kelas : {{$e->kelas}}</p>
	  		<p>mapel :{{$e->mapel}}</p>
	  		<p> Judul : {{$e->judul_buku}}</p>
	  	</div>
	  	@endforeach
	</div>
@endsection