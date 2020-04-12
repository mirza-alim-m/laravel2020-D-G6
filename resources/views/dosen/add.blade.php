@extends('index')
@section('title', 'Tambah Data')
@section('container')
	
	<h1>Data Dosen</h1>

	
	<br/>
	<br/>

	<form action="/dosens" method="post" class="form m-3">
		@csrf
		<div class="row mt-2">
		<div class="col-2">Nama</div><input class="form-control col-6" type="text" name="dosen_nama" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">NIPY</div>
		<input class="form-control col-6" type="text" name="dosen_nip" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Mata Kuliah</div>
		<input class="form-control col-6" type="text" name="dosen_mata_kuliah" required="required"> <br/></br>
		</div>
		<div class="row mt-2">
		<div class="col-2">No. Telpon</div>
		<input class="form-control col-6" type="number" name="dosen_no_telpon" required="required"> <br/></br>
		</div>
		<div class="row mt-2">
		<div class="col-2">Alamat</div>
		<textarea class="form-control col-6" name="dosen_alamat" required="required"></textarea> <br/><br>
		</div>
		<div class="row mt-2">
		<div class="col-6"></div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a class="ml-3 btn btn-primary" href="/dosens"> Kembali</a>
		</div>
	</form>
@endsection