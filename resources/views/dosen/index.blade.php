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

@endsection