<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
</head>
<body>

	<h2></h2>
	<h3>Edit Dosen</h3>

	<a href="/dosen"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($dosen as $p)
	<form action="/dosen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_dosen" value="{{ $p->id_dosen }}"> <br/>
		NIP Dosen <input type="text" required="required" name="dosennip" value="{{ $p->dosennip }}"> <br/>
        
		Mata Kuliah Dosen <input type="text" required="required" name="dosenmatakuliah" value="{{ $p->dosenmatakuliah }}"> <br/>
		No Telepon Dosen <input type="number" required="required" name="dosennotelepon" value="{{ $p->dosennotelepon }}"> <br/>
		Alamat Dosen <textarea required="required" name="dosenalamat">{{ $p->dosenalamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>