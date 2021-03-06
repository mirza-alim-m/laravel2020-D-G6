@extends('layouts.global')
@section('title') Edit Ruang @endsection
@section('content')
<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form class="bg-white shadow-sm p-3" action="{{route('mata_kuliah.update', ['mata_kuliah'=> @$mk->id])}}"
        method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row m-2">
        <div class="col-8">File</div>
        <div><input class="form-control col-12" type="file" name="file" required="required"></div>
        </div>

        <div class="row m-2">
        <div class="col-8">Image</div>
        <div><input class="form-control col-12" type="file" name="image" required="required"></div>
        </div>

        <div class="row m-2">
        <input type="hidden" value="PUT" name="_method">
        <div class="col-12">Mata Kuliah</div>
        <div><input class="form-control col-12" placeholder="Mata Kuliah" type="text" name="mata_kuliah"
        value="{{$mk->mata_kuliah}}" /></div>
        </div>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="{{route('mata_kuliah.index')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
