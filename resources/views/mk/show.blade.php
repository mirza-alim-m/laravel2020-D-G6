@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
    <div class="card-body">
    <b>Mata_kuliah:</b> <br/>
    {{$mk->mata_kuliah}}
    <br><br>
    <a href="{{route('mata_kuliah.edit', ['mata_kuliah' => $mk->id])}}" class="btn btn-success">Edit</a>
    <a href="{{route('mata_kuliah.index')}}" class="btn btn-danger">Back</a>

@endsection