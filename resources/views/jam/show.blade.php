@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
    <div class="card-body">
    <b>Dosen:</b> <br/>
    {{$jam_Kuliah->dosens->dosen_nama}}
    <br/>
    <b>Mata_kuliah:</b> <br/>
    {{$jam_Kuliah->dosens->matkuls->mata_kuliah}}
    <br/>
    <b>Ruang:</b> <br/>
    {{$jam_Kuliah->ruangs->kelas}}
    <br/>
    <b>Gedung:</b> <br/>
    {{$jam_Kuliah->ruangs->gedung}}
    <br/>
    <b>Hari:</b> <br/>
    {{$jam_Kuliah->hari}}
    <br/>
    <b>Jam:</b> <br/>
    {{$jam_Kuliah->jam}}
    <br><br>
    <a href="{{route('jamkuliah.edit', ['jamkuliah' => $jam_Kuliah->id])}}" class="btn btn-success">Edit</a>
    <a href="{{route('jamkuliah.index')}}" class="btn btn-danger">Back</a>

@endsection
