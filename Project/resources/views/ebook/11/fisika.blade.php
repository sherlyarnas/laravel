
@extends('layouts.homepage')

@section('content')
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
							 <td  class="btn btn-danger" a href="{{route ('ebook.destroy' , $e->kd_buku)}}">Delete</a></td>
                		</form>
                	</td>
				</tr>			
			@endforeach
			</tr>
	</table>
@endsection