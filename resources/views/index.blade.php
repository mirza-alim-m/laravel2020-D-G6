<!DOCTYPE html>
<html>
<head>
	<title>CRUD DOSEN</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<h1>Daftar Data Dosen</h1>

	 <a href="/dosen/tambah"> + Tambah Dosen Baru</a>
	
	<br/>
	<br/>

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
				<a href="/dosen/edit/{{ $d->dosen_nip }}">Edit</a>
				|
				<a onclick="return alert('apakah anda yakin?')" href="/dosen/hapus/{{ $d->dosen_nip }}">Hapus</a>
			</td>
		</tr>
		@endforeach
		</thead>
	</table>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>