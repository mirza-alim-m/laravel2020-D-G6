@extends("layouts.global")
@section("title") Create New User @endsection
@section("content")
<div class="col-md-8">
    @if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
    <form class="bg-white shadow-sm p-3" action="{{route('mata_kuliah.store')}}" method="POST">
        @csrf
        <label for="mata_kuliah">Mata Kuliah</label>
        <input class="form-control" placeholder="Mata Kuliah" type="text" name="mata_kuliah"
        value="{{old('mata_kuliah')}}" />
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="{{route('mata_kuliah.index')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
