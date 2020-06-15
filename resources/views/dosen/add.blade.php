@extends("layouts.global")
@section("title") Tambah Data Dosen @endsection
@section("content")
<div class="col-md-8">
    @if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
	
	<h1>Data Dosen</h1>

	
	<br/>
	<br/>

	<form enctype="multipart/form-data" action="/dosens" method="post" class="bg-white shadow-sm p-3">
		@csrf
		<div class="row mt-2">
		<div class="col-2">Image</div><input class="form-control col-6" type="file" name="image" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Nama</div><input class="form-control col-6" type="text" name="dosen_nama" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">NIPY</div>
		<input class="form-control col-6" type="text" name="dosen_nip" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Mata Kuliah</div>
		<select class="form-control col-6" name="mata_kuliah_id" required="required">
		<option value="">Pilih Mata Kuliah</option>
		@foreach($matkul as $mk)
		<option value="{{$mk->id}}">{{$mk->mata_kuliah}}</option>
		@endforeach
		</select>
		</div>
		<div class="row mt-2">
		<div class="col-2">No. Telpon</div>
		<input class="form-control col-6" type="number" name="dosen_no_telpon" required="required">
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