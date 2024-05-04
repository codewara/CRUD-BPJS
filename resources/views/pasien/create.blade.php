@extends('layouts.master')

@section('content')
<div class="container">
    <div class="index show">
      <a href="{{ route('pasien.index') }}" class="btn blue show nav"><i class="fas fa-arrow-left"></i><span>kembali</span></a>
      <h1>Tambah Pasien Baru</h1>
    </div>
    <hr>
    
    @if(Session::has('flash_message'))
      <div class="alert alert-success">
        {{ Session::get('flash_message') }}
      </div>
    @endif
    
    
    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif
    
    
    {!! Form::open([
        'route' => 'pasien.store'
    ]) !!}
    
    <div class="form-group">
        {!! Form::label('Nama', 'Nama Lengkap:', ['class' => 'control-label']) !!}
        {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('NIK', 'NIK:', ['class' => 'control-label']) !!}
        {!! Form::text('NIK', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Nomor_BPJS', 'Nomor BPJS:', ['class' => 'control-label']) !!}
        {!! Form::text('Nomor_BPJS', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Jenis_Kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
        {!! Form::select('Jenis_Kelamin', array(
                         '0' => 'Pilih',
                         'Laki-laki' => 'Laki-laki',
                         'Perempuan' => 'Perempuan'),
                         '0', ['class' => 'form-control'],
                         ['0' => ['disabled' => true]]) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('No_Telepon', 'No Telepon:', ['class' => 'control-label']) !!}
        {!! Form::text('No_Telepon', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Alamat', 'Alamat:', ['class' => 'control-label']) !!}
        {!! Form::textarea('Alamat', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Tanggal_Lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
        {!! Form::date('Tanggal_Lahir', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Tambah Pasien', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>

@endsection