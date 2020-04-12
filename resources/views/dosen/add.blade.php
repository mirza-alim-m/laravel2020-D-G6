@extends('index')
@section('title', 'Tambah Data')
@section('container')
	
	<h1>Data Dosen</h1>

	<a href="/dosens"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/dosens" method="post">
		@csrf
		Nama <input type="text" name="dosen_nama" required="required"> <br/></br>
		NIPY <input type="text" name="dosen_nip" required="required"> <br/></br>
		Mata Kuliah <input type="text" name="dosen_mata_kuliah" required="required"> <br/></br>
		No Telpon <input type="number" name="dosen_no_telpon" required="required"> <br/></br>
		Alamat <textarea name="dosen_alamat" required="required"></textarea> <br/><br>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
@endsection