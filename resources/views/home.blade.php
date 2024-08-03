@extends('layouts.mainlayout')
@section('title', 'Home')

@section('content')
    <h1>Ini Halam an Home</h1>
    <h2>Hay, {{ Auth::user()->name }} sebagai {{ Auth::user()->role->name }}</h2>

    {{-- @if ($role == 'admin')
        <a href="#">Halaman Admin</a>
    @elseif ($role == 'staff')
        <a href="#">Halaman Gudang</a>
    @else
        <a href="#">Halaman Guest</a>
    @endif --}}

    {{-- @foreach ($buah as $data)
        <p>{{ $data }}</p>
    @endforeach --}}

    {{-- <table class="table">
        <tr>
            <th>No. </th>
            <th>Nama</th>
        </tr>            
        @foreach ($buah as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data }}</td>
        </tr>
        @endforeach
    </table> --}}
@endsection