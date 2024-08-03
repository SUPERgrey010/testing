@extends('layouts.mainlayout')
@section('title', $page_title)

@section('content')
    <h1>Ini Halaman {{ $page_title }}</h1>

    <table class="table">
        <tr>
            <th>No. </th>
            <th>Nama</th>
        </tr>
    </table>
@endsection