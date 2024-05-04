@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="index">Daftar Pasien BPJS</h1>
    <button class="btn green" onclick="location.href='{{ route('pasien.create') }}'">Tambah Pasien Baru</button>
    <hr>
    
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    
    @if($all_pasien->isEmpty()) 
        <div class="emptyres">
            <img src="{{ asset('img/noresult.jpg') }}">
            <p>Tidak ada pasien dalam daftar!</p>
        </div>
    @else
        <?php $cc = 1; ?>
        @foreach($all_pasien as $pasien)
            <h4>Pasien {{ $pasien->id }}{{-- $cc++ --}}</h4>
            <div class="attribute">
                <div class="list">
                    <p>Nama</p>
                    <p>Nomor BPJS</p>
                    <p>No Telepon</p>
                </div>
                <div>
                    <p>: {{ $pasien->Nama }}</p>
                    <p>: {{ $pasien->Nomor_BPJS }}</p>
                    <p>: {{ $pasien->No_Telepon }}</p>
    
                </div>
            </div>
            <p class="btnlist">
                <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-info">Lihat Pasien</a>
                <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-primary">Edit Pasien</a>
                <a href="#pop" class="btn btn-danger">Hapus Pasien</a>
                <div id="pop" class="popup">
                    <div class="content">
                        <p>Apakah Anda yakin ingin menghapus data pasien ini?</p>
                        <div class="buttons">
                            <a href="{{ url('pasien') }}" class="btn btn-primary">Batal</a>
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
            </p>
        <hr>
        @endforeach
    @endif
</div>

@endsection