@extends('template')
@section('content')
    <h1>Ini Halaman Table</h1>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambbah Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item->nis }}</td> 
              <td>{{ $item->nama }}</td> 
              <td>{{ $item->alamat }}</td> 
              <td>{{ $item->sekolah->nama_sekolah }}</td> 
              <td><a href="{{ url('siswa/'. $item->id. '/edit')}}" class="btn btn-primary">Edit</a></td> 
              <form action="{{ route('siswa.destroy', $item->id)}}"method="post">
                @csrf 
                @method('delete') 
                <td>
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </td> 
              </form>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection