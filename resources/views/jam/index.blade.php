@extends("layouts.global")
@section("title") Jam Kuliah list @endsection
@section("content")
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div class="row">
    <div class="col-md-4">
        <select name="matkul" class="form-control mr-2 col-8 filter">
            <option value="" selected>Mata Kuliah</option>
            @foreach($matkul as $d)
            <option value="{{$d->id}}">{{$d->mata_kuliah}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <select name="ruang" class="form-control mr-2 col-8 filter">
            <option value="" selected>Ruang</option>
            @foreach($ruang as $d)
            <option value="{{$d->id}}">{{$d->kelas}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
      <select class="form-control mr-2 col-8 filter" name="hari" required>
        <option value="">Pilih Hari</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
      </select>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('jamkuliah.create')}}" class="btn btn-primary">Tambah Jam Kuliah</a>
    </div>
</div>
<br>

<table class="table table-bordered" id="datatable">
    <thead>
        <tr>
            <th><b>ID</b></th>
            <th><b>Dosen</b></th>
            <th><b>Mata Kuliah</b></th>
            <th><b>Ruang</b></th>
            <th><b>Hari</b></th>
            <th><b>Jam</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
</table>
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function(){
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route('datatables.jamkuliah') !!}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'dosens.dosen_nama', name: 'dosens.dosen_nama' },
            { data: 'dosens.matkuls.mata_kuliah', name: 'dosens.matkuls.mata_kuliah' },
            { data: 'ruangs.kelas', name: 'ruangs.kelas' },
            { data: 'hari', name: 'hari' },
            { data: 'jam', name: 'jam' },
            { data: 'action', name: 'action' },
        ]
    });
    datatable.draw();
    $('.filter').on('change', function (e) {
        datatable.destroy();
        $('tbody').remove();
        datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{!! route('datatables.jamkuliah') !!}",
                data: function(d) {
                    d.matkul = $('select[name=matkul]').val();
                    d.hari = $('select[name=hari]').val();
                    d.ruang = $('select[name=ruang]').val();
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'dosens.dosen_nama', name: 'dosens.dosen_nama' },
                { data: 'dosens.matkuls.mata_kuliah', name: 'dosens.matkuls.mata_kuliah' },
                { data: 'ruangs.kelas', name: 'ruangs.kelas' },
                { data: 'hari', name: 'hari' },
                { data: 'jam', name: 'jam' },
                { data: 'action', name: 'action' },
            ]
        });
        datatable.draw();
    });
});
</script>
@endpush
