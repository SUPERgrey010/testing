@extends('layouts.mainlayout')
@section('title', 'Class')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>Nama Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classlist as $dt)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dt->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection