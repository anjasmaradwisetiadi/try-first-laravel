@extends('layout.Layout')
@section('content')
    <h1>Dashboard Profile</h1>
    <h4>Profile Penulis</h4>
    <ul>
        <li>Nama: {{ $name }}</li>
        <li>Pekerjaan: {{ $pekerjaan }} </li>
        <li>Age: <?= $age; ?> tahun</li>
        <li>Hobby: <?= $hobby; ?></li>
    </ul>
@endsection
