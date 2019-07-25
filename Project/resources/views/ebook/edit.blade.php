@extends('layouts.homepage')

@section('content')
	<h3> Silahkan Edit Data buku</h3>
	<form method="post" action="{{ route('ebook.update', $ebook->kd_buku) }}" enctype="multipart/form-data" class="form-material"">
		@method('PATCH')
		@csrf
		<a href="/file_ebook/{{$ebook->file_ebook}}" target="_blank"> --- here ----</a>
		<table>
			<tr>
				<div class="form-group">
					 <input type="hidden" name="kd_buku" value="{{$ebook->kd_buku}}">
					 <td> kelas</td>
					 <td><select name='kelas' value="{{$ebook->kelas}}"> 
					 	<option>--Pilih--</option>
					 	<option value="10">10</option>
					 	<option value="11">11</option>
					 	<option value="12">12</option>
					 </select>
					</td>
				</div>
				<div>
					<tr>
						<td>Mata Pelajaran</td>
						<td><SELECT name='mapel' value='{{$ebook->mapel}}'>
								<option value='matematika'>Matematika</option>
							<option value="kimia">Kimia</option>
							<option value="fisika">Fisika</option>
							<option value="biologi">Biologi</option>
							<option value="english">Bahasa Inggris</option>					
						</SELECT>
					</tr>
				</div>
				<div>
					<td> <label>Judul</label></td>
					<td> <input type="text" class="form-control"name="judul_buku" value="{{$ebook->judul_buku}}" /></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Penerbit</label></td>
					<td><input type="text" class="form-control" name="penerbit" value="{{$ebook->penerbit}}"></td>
				</div>	
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Penulis</label></td>
					<td><input type="text" class="form-control" name="penulis" value="{{$ebook->penulis}}"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Tahun Terbit</label></td>
					<td><input type="text" class="form-control" name="tahun_terbit" value="{{$ebook->tahun_terbit}}"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Ebook</label></td>
					<td><label>{{$ebook->file_ebook}}</label><br/><input type="file" class="form-control" name="file_ebook"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><input type="submit" value="Update" ></td>
				</div>
			</tr>
		</table>	
	</form>
@endsection