@extends('index')
@section('title', 'Profil Dosen')
@section('container')

<div class="m-3">
    <div class="row">
    <div class="col-2">Nama</div>
    <div class="col-1">:</div>
    <div class="col-7">{{$dosen->dosen_nama}}</div>
    </div>
    <div class="row">
    <div class="col-2">NIPY</div>
    <div class="col-1">:</div>
    <div class="col-7">{{$dosen->dosen_nip}}</div>
    </div>
    <div class="row">
    <div class="col-2">Mata Kuliah</div>
    <div class="col-1">:</div>
    <div class="col-7">{{$dosen->matkuls->mata_kuliah}}</div>
    </div>
    <div class="row">
    <div class="col-2">No. Telpon</div>
    <div class="col-1">:</div>
    <div class="col-7">{{$dosen->dosen_no_telpon}}</div>
    </div>
    <div class="row">
    <div class="col-2">Alamat</div>
    <div class="col-1">:</div>
    <div class="col-7">{{$dosen->dosen_alamat}}</div>
    </div>
    <div class="row">
    <div class="col-2">Relasi</div>
    <div class="col-1">:</div>
    <div class="col-7">{{$dosen->matkuls->mata_kuliah}}</div>
    </div>
    <div class="row m-3">
     <a href="/dosens" class="btn btn-primary">Kembali</a>
    </div>
</div>

@endsection