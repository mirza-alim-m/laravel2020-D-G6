@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-12">
    <div class="card">
    <div class="card-body">
      <div class="col-2">Image</div>
      <div class="col-1">:</div>
      <div class="col-7"><img width="250px" src="{{asset('storage/'. $mk->image)}}" alt=""></div>
    </div>
    <b>Mata_kuliah:</b> <br/>
    {{$mk->mata_kuliah}}
    <br><br>
    <b>Relasi Dosen:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>NIP</td>
          <td>Dosen</td>
          <td>mata_kuliah_id</td>
          <td>No Telpon</td>
          <td>Alamat</td>
        </tr>
      </thead>
      <tbody>
        @foreach($mk->dosens as $d)
        <tr>
          <td>{{$d->dosen_nip}}</td>
          <td>{{$d->dosen_nama}}</td>
          <td>{{$d->mata_kuliah_id}}</td>
          <td>{{$d->dosen_no_telpon}}</td>
          <td>{{$d->dosen_alamat}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <br><br>
    <a href="{{route('mata_kuliah.edit', ['mata_kuliah' => $mk->id])}}" class="btn btn-success">Edit</a>
    <a href="{{route('mata_kuliah.index')}}" class="btn btn-danger">Back</a>

@endsection
