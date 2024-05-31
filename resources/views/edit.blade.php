@extends ('template')
@section('content')
<form action="{{ route('siswa.update', $data->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control @error ('nis') is-invalid @enderror" name="nis" placeholder="NIS" value="{{ $data->nis }}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ $data->nama }}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control @error ('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" value="{{ $data->alamat }}">
    </div>
        <select class="form-select" aria-label="Default select example" name="sekolah_id">
        @foreach ($sekolah as $item)
            <option value="{{$item->id}}" @selected($data->sekolah_id == $item->id)>{{$item->nama_sekolah}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
</form>
    
@endsection