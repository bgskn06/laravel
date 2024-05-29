@extends('template')
@section('content')
<form action="{{ route('post.store')}}" method="POST">
    <div class="mb-3">
        @csrf
        <label for="konten" class="form-label">Postingan</label>
        <textarea class="form-control" id="konten" name="konten" rows="3" value="{{ old('konten')}}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button> 
</form>
@endsection