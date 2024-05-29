@extends ('template')
@section('content')
<form action="{{ route('siswa.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control @error ('nis') is-invalid @enderror" name="nis" placeholder="NIS" value="{{ old('nis') }}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ old('nama') }}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control @error ('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
    
@endsection