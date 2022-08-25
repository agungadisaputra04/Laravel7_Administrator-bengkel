<!-- app/views/service/create.blade.php -->
@extends('adminlte::page')
@section('content')
<h3>Masukan Data Service Motor Baru</h3>
{!! Form::open(['route' => 'service.store','method'=>'POST',
 'enctype'=>'multipart/form-data']) !!}

<div class="form-group">
 {!! Form::label('nama', 'Nama:',['class' =>'control-label']) !!}
 {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('keterangan', 'Keterangan:',
 ['class' => 'control-label']) !!}
 {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
 </div>
<div class="form-group">
 {!! Form::label('harga', 'Harga :',['class' =>'control-label']) !!}
 {!! Form::text('harga', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
