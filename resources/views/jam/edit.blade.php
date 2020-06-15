@extends('layouts.global')
@section('title') Edit Ruang @endsection
@section('content')
<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form class="bg-white shadow-sm p-3" action="{{route('jamkuliah.update', ['jamkuliah' => $jam_Kuliah->id])}}" method="POST">
        @csrf
        <div class="row mt-2">
        <div class="col-2">Image</div><input class="form-control col-6" type="file" name="image" required="required">
        </div>
        @method('PATCH')
        <label for="dosen_id">Dosen</label>
        <select class="form-control" name="dosen_id" required>
          <option value="">Pilih Dosen</option>
          @foreach($dosen as $d)
          <option value="{{$d->id}}" @if($jam_Kuliah->dosen_id == $d->id) selected @endif >{{$d->dosen_nama}}</option>
          @endforeach
        </select>
        <br>
        <label for="ruang_id">Ruangan</label>
        <select class="form-control" name="ruang_id" required>
          <option value="">Pilih Ruangan</option>
          @foreach($ruang as $r)
          <option value="{{$r->id}}" @if($jam_Kuliah->ruang_id == $r->id) selected @endif >{{$r->kelas}}</option>
          @endforeach
        </select>
        <br>
        <label for="hari">Hari</label>
        <select class="form-control" name="hari" required>
          <option value="">Pilih Hari</option>
          <option value="Senin" @if($jam_Kuliah->hari == 'Senin') selected @endif>Senin</option>
          <option value="Selasa" @if($jam_Kuliah->hari == 'Selasa') selected @endif>Selasa</option>
          <option value="Rabu" @if($jam_Kuliah->hari == 'Rabu') selected @endif>Rabu</option>
          <option value="Kamis" @if($jam_Kuliah->hari == 'Kamis') selected @endif>Kamis</option>
          <option value="Jumat" @if($jam_Kuliah->hari == 'Jumat') selected @endif>Jumat</option>
          <option value="Sabtu" @if($jam_Kuliah->hari == 'Sabtu') selected @endif>Sabtu</option>
          <option value="Minggu" @if($jam_Kuliah->hari == 'Minggu') selected @endif>Minggu</option>
        </select>
        <br>
        <label for="jam">Jam</label>
        <input class="form-control" type="time" placeholder="00:00" name="jam" value="{{$jam_Kuliah->jam}}" required>
        <br>
        <button class="btn btn-primary" type="submit" value="Save">Simpan</button>
        <a href="{{route('jamkuliah.index')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
