@extends('layouts.homepage')

@section('content')
	<h3> Silahkan Tambahkan Data buku</h3>
	<form method="post" action="{{route ('ebook.store')}}" enctype="multipart/form-data" class="form-material">
		<table>
			<tr>
				<div class="form-group">
					@csrf
					 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
					 <td> kelas</td>
					 <td><select name='kelas'> 
					 	<option>--Pilih--</option>
					 	<option>10</option>
					 	<option>11</option>
					 	<option>12</option>
					 </select>
					</td>
				</div>
				<div>
					<tr>
						<td> Mata Pelajaran</td>
						<td> <select name='mapel'>
							<option>--Pilih--</option>
							<option>Matematika</option>
							<option>Kimia</option>
							<option>Fisika</option>
							<option>Biologi</option>
							<option>Bahasa Inggris</option>

						</select>
					</tr>
				</div>
				<div>
					<td> <label>Judul</label></td>
					<td> <input type="text" class="form-control"name="judul_buku"/></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Penerbit</label></td>
					<td><input type="text" class="form-control" name="penerbit"></td>
				</div>	
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Penulis</label></td>
					<td><input type="text" class="form-control" name="penulis"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Tahun Terbit</label></td>
					<td><input type="text" class="form-control" name="tahun_terbit"></td>
				</div>
			</tr>
				<tr>
				<div class="form-group">
					<td><label>Image</label></td>
					<td><input type="file" class="form-control" name="img_ebook"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td><label>Ebook</label></td>
					<td><input type="file" class="form-control" name="file_ebook"></td>
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
