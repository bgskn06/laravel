@extends('admin.template')
@section('content')
    <h1>Ini Halaman Table</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Gorengan</th>
          </tr>
        </thead>
        <tbody>
        {{-- @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item }}</td> 
          </tr>
        @endforeach --}}
        </tbody>
      </table>
@endsection