<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
</head>
<body>

	<h2></h2>
	<h3>Data Pegawai</h3>

	<a href="/dosen"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/dosen/store" method="post">
		{{ csrf_field() }}
		NIP Dosen <input type="text" name="dosennip"> <br/>
		
		Mata Kuliah Dosen <input type="text" name="dosenmatakuliah"> <br/>
        No Telepon Dosen <input type="number" name="dosennotelepon"> <br/>
		Alamat Dosen <textarea name="dosenalamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
		


</body>
</html>