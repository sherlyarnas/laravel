@extends('layouts.master')

@section('content')
	<h3> Silahkan Edit Data buku</h3>
	<form method="post" action="{{ route('video.update', $video->id_video) }}" enctype="multipart/form-data" class="form-material"">
		@method('PATCH')
		@csrf
		<table>
			<tr>
				<div class="form-group">
					@csrf
					 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
					 <td> kelas</td>
					 <td><select name='kelas' value="{{$video->kelas}}"> 
					 	<option>--Pilih--</option>
					 	<option value="10">10</option>
					 	<option value="11">11</option>
					 	<option value="12">12</option>
					 </select>
					</td>
				</div>
				<div>
					<tr>
						<td> Mata Pelajaran</td>
						<td> <select name='mapel' value="{{$video->mapel}}">
							<option value='matematika'>Matematika</option>
							<option value="kimia">Kimia</option>
							<option value="fisika">Fisika</option>
							<option value="biologi">Biologi</option>
							<option value="english">Bahasa Inggris</option>

						</select>
					</tr>
				</div>
				<div>
					<td> <label>Judul</label></td>
					<td> <input type="text" class="form-control"name="judul" value="{{$video->judul}}" /></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Video</label></td>
					<td><input type="text" class="form-control" name="video" value="{{$video->video}}"></td>
				</div>	
			</tr>
			<tr>
				<div class="form-group">
					<td><input type="submit" value="Save" ></td>
				</div>
			</tr>

		</table>	
	</form>
@endsection
