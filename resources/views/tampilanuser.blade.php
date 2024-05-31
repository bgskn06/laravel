@extends('template')
@section('content')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h2>Ini Halaman User</h2>
@endsection