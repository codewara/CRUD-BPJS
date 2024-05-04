@extends('layouts.master')

@section('content')

<div class="container">
    <div class="index show">
        <a href="{{ route('pasien.index') }}" class="btn blue show nav"><i class="fas fa-arrow-left"></i><span>kembali</span></a>
        <h1>Detail Pasien {{ $pasien->id }}</h1>
    </div>
    <hr>
    <h3>{{ $pasien->Nama }}</h3>
    <div class="attribute">
        <div class="list">
            <p class="lead">NIK</p>
            <p class="lead">Nomor BPJS</p>
            <p class="lead">Tanggal Lahir</p>
            <p class="lead">Jenis Kelamin</p>
            <p class="lead">Alamat</p>
            <p class="lead">Nomor Telepon</p>
        </div>
        <div>
            <p class="lead">: {{ $pasien->NIK }}</p>
            <p class="lead">: {{ $pasien->Nomor_BPJS }}</p>
            <p class="lead">: {{ $pasien->Tanggal_Lahir }}</p>
            <p class="lead">: {{ $pasien->Jenis_Kelamin }}</p>
            <p class="lead">: {{ $pasien->Alamat }}</p>
            <p class="lead">: {{ $pasien->No_Telepon }}</p>
        </div>
    </div>
    <hr>
    
    
    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-primary">Edit Pasien</a>
    <a href="#pop" class="btn btn-danger">Hapus Pasien</a>
    <div id="pop" class="popup">
        <div class="content">
            <p>Apakah Anda yakin ingin menghapus data pasien ini?</p>
            <div class="buttons">
                <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-primary">Batal</a>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['pasien.destroy', $pasien->id],
                    'style' => 'display:inline'
                ]) !!}
                {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection