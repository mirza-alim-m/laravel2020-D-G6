@extends("layouts.global")
@section("title") Ubah Dosen @endsection
@section("content")
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
	
	<h1>Ubah Data Dosen</h1>

	<a href="/dosens"> Kembali</a>
	
	<br/>
	<br/>

	<form enctype="multipart/form-data" action="{{route('dosens.update', ['dosen' => $dosen->id])}}" method="post" class="form m-3">
		@method('put')
		@csrf
		<div class="row mt-2">
		<div class="col-2">Pdf</div><input class="form-control col-6" type="file" name="file" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Image</div><input class="form-control col-6" type="file" name="image" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Nama</div><input class="form-control col-6" type="text" name="dosen_nama" required="required" value="{{$dosen->dosen_nama}}">
		</div>
		<div class="row mt-2">
		<div class="col-2">NIPY</div>
		<input class="form-control col-6" type="text" name="dosen_nip" required="required" value="{{$dosen->dosen_nip}}">
		</div>
		<div class="row mt-2">
		<div class="col-2">Mata Kuliah</div>
		<select class="form-control col-6" name="mata_kuliah_id" required="required">
		<option value="">Pilih Mata Kuliah</option>
		@foreach($matkul as $mk)
		<option value="{{$mk->id}}" @if($mk->id == $dosen->mata_kuliah_id) selected @endif>{{$mk->mata_kuliah}}</option>
		@endforeach
		</select>
		</div>
		<div class="row mt-2">
		<div class="col-2">No. Telpon</div>
		<input class="form-control col-6" type="number" name="dosen_no_telpon" required="required" value="{{$dosen->dosen_no_telpon}}">
		</div>
		<div class="row mt-2">
		<div class="col-2">Alamat</div>
		<textarea class="form-control col-6" name="dosen_alamat" required="required">{{$dosen->dosen_alamat}}</textarea> <br/><br>
		</div>
		<div class="row mt-2">
		<div class="col-6"></div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a class="ml-3 btn btn-primary" href="/dosens"> Kembali</a>
		</div>
	</form>
@endsection