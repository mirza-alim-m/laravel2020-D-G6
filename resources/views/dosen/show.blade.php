@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-body">
        <div class="row">
        <div class="col-2">Pdf</div>
            <div class="col-1">:</div>
            <div class="col-7"><a href="{{ asset('storage/' . $dosen->file) }}">dokumen.pdf{{-- explode('/',$dosen->file)[1] --}}</a></div>
            </div>
            <div class="col-2">Image</div>
            <div class="col-1">:</div>
            <div class="col-7"><img width="250px"  src="{{ asset('storage/' . $dosen->images )}}" alt=""></div>
            </div>
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
    </div>
</div>

@endsection