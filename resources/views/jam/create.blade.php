@extends("layouts.global")
@section("title") Create New User @endsection
@section("content")
<div class="col-md-8">
    @if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

    <form class="bg-white shadow-sm p-3" action="{{route('jamkuliah.store')}}" method="POST">
        @csrf
        <label for="dosen_id">Dosen</label>
        <select class="form-control" name="dosen_id" required>
          <option value="">Pilih Dosen</option>
          @foreach($dosen as $d)
          <option value="{{$d->id}}">{{$d->dosen_nama}}</option>
          @endforeach
        </select>
        <br>
        <label for="ruang_id">Ruangan</label>
        <select class="form-control" name="ruang_id" required>
          <option value="">Pilih Ruangan</option>
          @foreach($ruang as $r)
          <option value="{{$r->id}}">{{$r->kelas}}</option>
          @endforeach
        </select>
        <br>
        <label for="hari">Hari</label>
        <select class="form-control" name="hari" required>
          <option value="">Pilih Hari</option>
          <option value="Senin">Senin</option>
          <option value="Selasa">Selasa</option>
          <option value="Rabu">Rabu</option>
          <option value="Kamis">Kamis</option>
          <option value="Jumat">Jumat</option>
          <option value="Sabtu">Sabtu</option>
          <option value="Minggu">Minggu</option>
        </select>
        <br>
        <label for="jam">Jam</label>
        <input class="form-control" type="time" placeholder="00:00" name="jam" required>
        <br>
        <button class="btn btn-primary" type="submit" value="Save">Simpan</button>
        <a href="{{route('jamkuliah.index')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
