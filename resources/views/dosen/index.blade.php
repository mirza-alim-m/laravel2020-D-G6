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
	<div class="m-2 row form-inline">
	<select name="matkul" class="form-control mr-2 col-8">
	<option value="" selected>Mata Kuliah</option>
	@foreach($matkul as $d)
	<option value="{{$d->dosen_mata_kuliah}}">{{$d->dosen_mata_kuliah}}</option>
	@endforeach
	</select>
	</div>
	</div>
	

	<table class="table table-bordered table-striped table-hover"
	 id="datatable">
	<thead>
		<tr class ="bg-primary">
			<th>#</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Mata Kuliah</th>
			<th>No Telpon</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
	</thead>
		{{-- @foreach($dosen as $d)
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
{{$dosen->withQueryString()->links()}}
		@endforeach --}}
	</table>


@endsection

@push('scripts')
<script>
$(document).ready(function(){
	var datatable = $('#datatable').DataTable({
		processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.dosens') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'dosen_nip', name: 'dosen_nip' },
            { data: 'dosen_nama', name: 'dosen_nama' },
            { data: 'dosen_mata_kuliah', name: 'dosen_mata_kuliah' },
            { data: 'dosen_no_telpon', name: 'dosen_no_telpon' },
            { data: 'dosen_alamat', name: 'dosen_alamat' },
            { data: 'action', name: 'action' },
        ]
	});
	datatable.draw();
	$('select[name=matkul]').on('change',function(e){
		// menghancurkan datatable yang lama
		datatable.destroy();
		// menghapus data yang tersisa
		$('tbody').remove();
		// inisialisasi ulang dengan matkul yang difilter
		datatable = $('#datatable').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: '{!! route('datatables.dosens') !!}',
				data: function(d) {
					d.matkul = $('select[name=matkul]').val();
					console.log('cekrek');
				},
			},
			columns: [
				{ data: 'id', name: 'id' },
				{ data: 'dosen_nip', name: 'dosen_nip' },
				{ data: 'dosen_nama', name: 'dosen_nama' },
				{ data: 'dosen_mata_kuliah', name: 'dosen_mata_kuliah' },
				{ data: 'dosen_no_telpon', name: 'dosen_no_telpon' },
				{ data: 'dosen_alamat', name: 'dosen_alamat' },
				{ data: 'action', name: 'action' },
			]
		});
		datatable.draw();
		e.preventDefault();
	});
});
</script>
@endpush