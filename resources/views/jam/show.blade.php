@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-12">
    <div class="card">
    <div class="card-body">
      <div class="row">

      <div class="col-2">Pdf</div>
      <div class="col-1">:</div>
      <div class="col-7"><img width="250px" src="{{asset('storage/' . $jamkuliah->pdf) }}">dokumen.pdf</a></div>

      <div class="col-2">Image</div>
      <div class="col-1">:</div>
      <div class="col-7"><img width="250px" src="{{ asset('storage/'.jamkuliah->image )}}" alt=""></div>
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
    <b>Relasi Dosen:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>dosen_nip</td>
          <td>dosen_nama</td>
          <td>mata_kuliah_id</td>
          <td>Mata Kuliah</td>
          <td>dosen_no_telpon</td>
          <td>dosen_alamat</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$jam_Kuliah->dosens->dosen_nip}}</td>
          <td>{{$jam_Kuliah->dosens->dosen_nama}}</td>
          <td>{{$jam_Kuliah->dosens->mata_kuliah_id}}</td>
          <td>{{$jam_Kuliah->dosens->matkuls->mata_kuliah}}</td>
          <td>{{$jam_Kuliah->dosens->dosen_no_telpon}}</td>
          <td>{{$jam_Kuliah->dosens->dosen_alamat}}</td>
        </tr>

      </tbody>
    </table>
    <br><br>
    <b>Relasi Ruang:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>id</td>
          <td>kelas</td>
          <td>gedung</td>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>{{$jam_Kuliah->ruangs->id}}</td>
          <td>{{$jam_Kuliah->ruangs->kelas}}</td>
          <td>{{$jam_Kuliah->ruangs->gedung}}</td>
        </tr>

      </tbody>
    </table>
    <br><br>
    <a href="{{route('jamkuliah.edit', ['jamkuliah' => $jam_Kuliah->id])}}" class="btn btn-success">Edit</a>
    <a href="{{route('jamkuliah.index')}}" class="btn btn-danger">Back</a>

@endsection
