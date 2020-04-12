@extends('index')
@section('title', 'Ubah Data')
@section('container')
	
	<h1>Data Dosen</h1>

	<a href="/dosens"> Kembali</a>
	
	<br/>
	<br/>

	<form action="{{route('dosens.update', ['dosen' => $dosen->id])}}" method="post">
		@method('put')
		@csrf
		Nama <input type="text" name="dosen_nama" required="required" value="{{$dosen->dosen_nama}}"> <br/></br>
		NIPY <input type="text" name="dosen_nip" required="required" value="{{$dosen->dosen_nip}}"> <br/></br>
		Mata Kuliah <input type="text" name="dosen_mata_kuliah" required="required" value="{{$dosen->dosen_mata_kuliah}}"> <br/></br>
		No Telpon <input type="number" name="dosen_no_telpon" required="required" value="{{$dosen->dosen_no_telpon}}"> <br/></br>
		Alamat <textarea name="dosen_alamat" required="required">{{$dosen->dosen_alamat}}</textarea> <br/><br>
		<button type="submit" class="btn btn-primary">Ubah</button>
	</form>
@endsection