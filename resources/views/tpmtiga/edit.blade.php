@extends('template')
@section('content')
<form action="{{ route('post.update', $data->id)}}" method="POST">
    <div class="mb-3">
        @csrf
        @method('put')
        <label for="konten" class="form-label">Postingan</label>
        <input type="text" class="form-control" id="konten" name="konten" rows="3" placeholder="Silahkan Isi Postingan" value="{{ $data->konten }}"></input>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button> 
</form>
@endsection