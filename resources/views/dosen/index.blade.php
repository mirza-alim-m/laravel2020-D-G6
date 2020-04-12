@extends('index')

@section('title', 'Dosen')

@section('container')

	<h1>Daftar Data Dosen</h1>

	 <a href="/dosens/create"> + Tambah Dosen Baru</a>
	
	<br/>
	<br/>

	@if(session('info'))
	<div class="alert alert-info">{{session('info')}}</div>
	@endif

	<div class="row ml-3">
	<form action="{{route('caridosen')}}" method="get" class="m-2 row">
	<input type="text" class="form-control mr-2 col-6" name="cari"> 
	<button class="btn btn-primary">Cari</button>
	</form>
	<form action="{{route('caridosen-matkul')}}" method="get" class="m-2 row">
	<select name="matkul" class="form-control mr-2 col-8">
	<option value="" selected>Mata Kuliah</option>
	@foreach($matkul as $d)
	<option value="{{$d->dosen_mata_kuliah}}">{{$d->dosen_mata_kuliah}}</option>
	@endforeach
	</select>
	<button class="btn btn-primary">Cari</button>
	</form>
	</div>
	

	<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr class ="bg-primary">
			<th>Nama</th>
			<th>Mata Kuliah</th>
			<th>No Telpon</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($dosen as $d)
		<tr>
			<td>{{ $d->dosen_nama }}</td>
			<td>{{ $d->dosen_mata_kuliah }}</td>
			<td>{{ $d->dosen_no_telpon }}</td>
			<td>{{ $d->dosen_alamat }}</td>
			<td>
				<a href="{{route('dosens.show', ['dosen' => $d->id])}}" class="m-1 btn btn-success">Detail</a>
				<a href="{{route('dosens.edit', ['dosen' => $d->id])}}" class="m-1 btn btn-warning">Edit</a>
				<form action="{{route('dosens.destroy',['dosen' => $d->id])}}" method="post" class="m-1">
				@method('delete')
				@csrf
				<button type="submit" onclick="return alert('apakah anda yakin?')" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
		</thead>
	</table>

{{$dosen->withQueryString()->links()}}

@endsection