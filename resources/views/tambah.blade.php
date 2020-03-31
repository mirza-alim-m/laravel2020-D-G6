<!DOCTYPE html>
<html>
<head>
	<title>CRUD DATA DOSEN</title>
</head>
<body>

	
	<h1>Data Dosen</h1>

	<a href="/dosen"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/dosen/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/></br>
		Mata Kuliah <input type="text" name="mata_kuliah" required="required"> <br/></br>
		No Telpon <input type="number" name="no_telpon" required="required"> <br/></br>
		Alamat <textarea name="alamat" required="required"></textarea> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>