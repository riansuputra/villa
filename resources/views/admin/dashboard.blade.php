@extends('admin.layouts.app')

@section('content')
    <h1>Dashboard Villa</h1>

    <p>Selamat datang {{ auth()->user()->name }}</p>
@endsection
