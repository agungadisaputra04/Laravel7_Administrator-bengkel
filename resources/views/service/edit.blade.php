@extends('adminlte::page')

@section('content')
<h4>Ubah Data Service Motor</h4>
{!! Form::model($service,['method'=> 'PATCH','route'=>['service.update',$service->id_service]]) !!}
<div class="form-group">
 {!! Form::label('id_service', 'ID Service:',['class' =>'control-label']) !!}
 {!! Form::text('id_service', null, ['class' => 'form-control','disabled']) !!}
</div>
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
