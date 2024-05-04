@extends('layouts.master')

@section('content')
<div class="display">
    <img src="https://techaccess.co.za/wp-content/uploads/2021/12/Black-Technology-LinkedIn-Banner-9.jpg" alt="BPJS Kesehatan" style="width: 100%; height: 100%;">
</div>
<span class="imgfade"></span>
<div class="container">
    <h1>Selamat Datang!</h1>
    <p class="lead">Website ini menggunakan pengaplikasian metode Create, Read, Update, and Delete (CRUD) data yang akan dilakukan untuk register data pasien BPJS menggunakan framework Laravel.</p>
    <hr>
    
    <button onclick="location.href='{{ url('pasien') }}'" class="btn blue">Daftar Pasien</button>
    <button onclick="location.href='{{ url('pasien/create') }}'" class="btn green">Tambah Pasien Baru</button>
</div>


@endsection
