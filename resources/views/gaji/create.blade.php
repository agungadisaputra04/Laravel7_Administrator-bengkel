<!-- app/views/gaji/create.blade.php -->
@extends('adminlte::page')
@section('content')
<h3>Menambahkan Data Gaji Baru</h3>
{!! Form::open(['route' => 'gaji.store','method'=>'POST',
 'enctype'=>'multipart/form-data']) !!}

 <div class="form-group">
 {!! Form::label('id_pegawai', 'ID Pegawai:',['class' =>'control-label']) !!}
 {!! Form::text('id_pegawai', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('uang_makan', 'Uang Makan:',['class' =>'control-label']) !!}
 {!! Form::text('uang_makan', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('komisi', 'Komisi:',['class' =>'control-label']) !!}
 {!! Form::text('komisi', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('jumlah_komisi', 'Jumlah Komisi:',['class' =>'control-label']) !!}
 {!! Form::text('jumlah_komisi', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('cuti', 'Cuti:',['class' =>'control-label']) !!}
 {!! Form::text('cuti', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('jumlah_cuti', 'Jumlah Cuti:',
 ['class' => 'control-label']) !!}
 {!! Form::text('jumlah_cuti', null, ['class' => 'form-control']) !!}
 </div>
<div class="form-group">
 {!! Form::label('total', 'Total:',
 ['class' => 'control-label']) !!}
 {!! Form::text('total', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection


