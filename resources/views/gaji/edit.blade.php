@extends('adminlte::page')

@section('content')
<h4>Ubah Data Gaji</h4>
{!! Form::model($gaji,['method'=> 'PATCH','route'=>['gaji.update',$gaji->id_gaji]]) !!}
<div class="form-group">
 {!! Form::label('id_gaji', 'ID Gaji:',['class' =>'control-label']) !!}
 {!! Form::text('id_gaji', null, ['class' => 'form-control','disabled']) !!}
</div>
<div class="form-group">
 {!! Form::label('id_pegawai', 'ID Pegawai:',['class' =>'control-label']) !!}
 {!! Form::text('id_pegawai', null, ['class' => 'form-control','disabled']) !!}
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


