@extends("layouts.global")
@section("title") Ubah Dosen @endsection
@section("content")
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
	
	<h1>Ubah Password</h1>

	<a href="{{url()->previous()}}"> Kembali</a>
	
	<br/>
	<br/>

	<form enctype="multipart/form-data" action="{{route('ubah.word')}}" method="post" class="form m-3">
		@csrf
		<div class="row mt-2">
		<div class="col-2">Password Lama</div>
		<input class="form-control col-6" type="password" name="old_password" required="required" value="{{$user->dosen_nama}}">
		</div>
		<div class="row mt-2">
		<div class="col-2">Password Baru</div>
		<input class="form-control col-6" type="password" name="new_password" required="required" value="{{$user->dosen_nama}}">
		</div>
		<div class="row mt-2">
		<div class="col-2">Konfirmasi Password</div>
		<input class="form-control col-6" type="password" name="confirm_password" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-6"></div>
		{{  Form::hidden('url',URL::previous())  }}
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a class="ml-3 btn btn-primary" href="/dosens"> Kembali</a>
		</div>
	</form>
@endsection