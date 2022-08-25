<!-- app/views/transaksi/create.blade.php -->
@extends('adminlte::page')
@section('content')
<h3>Tambahkan Transaksi Baru</h3>
{!! Form::open(['route' => 'transaksi.store','method'=>'POST',
 'enctype'=>'multipart/form-data']) !!}

<div class="form-group">
 {!! Form::label('id_montir', 'ID Montir:',['class' =>'control-label']) !!}
 {!! Form::text('id_montir', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('jenis_service', 'Jenis Service:',['class' =>'control-label']) !!}
 {!! Form::text('jenis_service', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('total_biaya', 'Total Biaya:',['class' =>'control-label']) !!}
 {!! Form::text('total_biaya', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection



