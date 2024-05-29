@extends('template')
@section('content')
    <h1>Ini Halaman Coba</h1>
        @for ($i = 1; $i <= 5; $i++)
            @if ($i % 2)
                <h1>Ini Perulangan</h1>
            @endif
        @endfor
    <img src="{{ asset("gambar/foto.jpeg") }}" width="100px">
    <img src="{{ asset("logo.png") }}" width="100px">
@endsection