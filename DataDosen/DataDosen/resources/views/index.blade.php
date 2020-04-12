<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
</head>
<body>

	
	<h3>Data Dosen</h3>

	<a href="/dosen/tambah"> + Tambah Dosen Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIP</th>
			
			<th>Mata Kuliah</th>
            <th>No Telepon</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($dosen as $p)
		<tr>
			<td>{{ $p->dosennip }}</td>
			
			<td>{{ $p->dosenmatakuliah }}</td>
			<td>{{ $p->dosennotelepon }}</td>
            <td>{{ $p->dosenalamat }}</td>
			<td>
				<a href="/dosen/edit/{{ $p->id_dosen }}">Edit</a>
				|
				<a href="/dosen/hapus/{{ $p->id_dosen }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>