@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        @if($message = Session::get('danger'))
            <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
            </div>
        @endif
        <form action="{{ action ('KelasController@store') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Ruang Kelas</label>
                <input class="form-control" type="text" name="ruang_kelas" placeholder="Ruang Kelas"/>
            </div> 
            <div class="form-group">
                <label>Gedung</label>
                <input class="form-control" type="text" name="gedung" placeholder="Gedung"/>
            </div>
            
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
