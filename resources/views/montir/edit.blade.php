@extends('adminlte::page')

@section('content')
<h4>Ubah Data Montir</h4>
{!! Form::model($montir,['method'=> 'PATCH','route'=>['montir.update',$montir->id_montir]]) !!}
<div class="form-group">
 {!! Form::label('id_montir', 'ID Montir:',['class' =>'control-label']) !!}
 {!! Form::text('id_montir', null, ['class' => 'form-control','disabled']) !!}
</div>
<div class="form-group">
 {!! Form::label('nama', 'Nama:',['class' =>'control-label']) !!}
 {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('jenis_kelamin', 'Jenis Kelamin:',
 ['class' => 'control-label']) !!}
 <br>
 @if ($montir->jenis_kelamin=='L')

 {!! Form::radio('jenis_kelamin','L',true,['checked'=>'checked']) !!} Laki-laki
 <br>
 {!! Form::radio('jenis_kelamin','P',false) !!} Perempuan
 @else
 {!! Form::radio('jenis_kelamin','L',false) !!} Laki-laki
 <br>
 {!! Form::radio('jenis_kelamin','P',true,['checked'=>'checked']) !!} Perempuan
 @endif
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
