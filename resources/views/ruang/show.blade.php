ss@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
    <div class="card-body">
    <div class="row">
<div class="col-2">Pdf</div>
    <div class="col-1">:</div>
    <div class="col-7"><a href="{{ asset('storage/'. $ruang->file) }}">dokumen.pdf{{-- explode('/',$ruang->file)[1] --}}</a></div>
    </div>

    <div class="col-2">Image</div>
    <div class="col-1">:</div>
    <div class="col-7"><img width="250px" src="{{asset('storage/'. $ruang->image)}}" alt=""></div>
    </div>

    <b>Kelas:</b> <br/>
    {{$ruang->kelas}}
    <br><br>

    <b>Gedung:</b><br>
    {{$ruang->gedung}}
    <br/><br/>
    <b>Relasi Jam Kuliah:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>id</td>
          <td>ID Dosen</td>
          <td>NIP</td>
          <td>Dosen</td>
          <td>ID Ruang</td>
          <td>Hari</td>
          <td>Jam</td>
        </tr>
      </thead>
      <tbody>
        @foreach($ruang->jamkuliahs as $j)
        <tr>
          <td>{{$j->id}}</td>
          <td>{{$j->dosen_id}}</td>
          <td>{{$j->dosens->dosen_nip}}</td>
          <td>{{$j->dosens->dosen_nama}}</td>
          <td>{{$j->ruang_id}}</td>
          <td>{{$j->hari}}</td>
          <td>{{$j->jam}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <br><br>
    <a href="{{route('ruang.index')}}" class="btn btn-danger">Back</a>

@endsection
