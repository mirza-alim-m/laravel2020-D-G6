@extends("layouts.global")
@section("title") Users list @endsection
@section("content")
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div class="row">
    <div class="col-md-6">
        <select name="matkul" class="form-control mr-2 col-8">
            <option value="" selected>Mata Kuliah</option>
            @foreach($matkul as $d)
            <option value="{{$d->id}}">{{$d->mata_kuliah}}</option>
            @endforeach
        </select>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('mata_kuliah.create')}}" class="btn btn-primary">Tambah Mata Kuliah</a>
    </div>
</div>
<br>

<table class="table table-bordered" id="datatable">
    <thead>
        <tr>
            <th><b>ID</b></th>
            <th><b>Mata Kuliah</b></th>
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
        ajax: '{!! route('datatables.matkul') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'mata_kuliah', name: 'mata_kuliah' },
            { data: 'action', name: 'action' },
        ]
    });
    datatable.draw();
    $('select[name=matkul').on('change', function (e) {
        datatable.destroy();
        $('tbody').remove();
        datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('datatables.matkul') !!}',
                data: function(d) {
                    d.matkul = $('select[name=matkul]').val();
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'mata_kuliah', name: 'mata_kuliah' },
                { data: 'action', name: 'action' },
            ]
        });
        datatable.draw();
    });
});    
</script>
@endpush
