<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	
	<h3>Form Edit Data Dosen</h3>

	<a href="/dosen"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($dosen as $d)
	<form action="/dosen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->dosen_nip}}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $d->dosen_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="mata_kuliah" value="{{ $d->dosen_mata_kuliah }}"> <br/>
		Umur <input type="number" required="required" name="no_telpon" value="{{ $d->dosen_no_telpon }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $d->dosen_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>