<!-- app/views/montir/create.blade.php -->
@extends('adminlte::page')
@section('content')
<h3>Data Montir Baru</h3>
{!! Form::open(['route' => 'montir.store','method'=>'POST',
 'enctype'=>'multipart/form-data']) !!}

<div class="form-group">
 {!! Form::label('nama', 'Nama:',['class' =>'control-label']) !!}
 {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('jenis_kelamin', 'Jenis Kelamin:',
 ['class' => 'control-label']) !!}
 {!! Form::radio('jenis_kelamin','L',false) !!} Laki-laki
 {!! Form::radio('jenis_kelamin','P',false) !!} Perempuan
</div>

<div class="form-group">
 {!! Form::label('no_hp', 'Telepon/HP:',
 ['class' => 'control-label']) !!}
 {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
 </div>
<div class="form-group">
 {!! Form::label('email', 'E-mail:',
 ['class' => 'control-label']) !!}
 {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('alamat', 'Alamat:',
 ['class' => 'control-label']) !!}
 {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
