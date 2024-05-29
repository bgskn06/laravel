@extends('template')
@section('content')  
    <h1>Daftar Post</h1>
    <a href="{{ route('post.create')}}" class="btn btn-primary">Tambah Post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Postingan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->konten }}</td>
                <td><a href="{{ url('post/'. $item->id .'/edit')}}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ route('post.destroy', $item->id)}}" class="btn btn-warning">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection