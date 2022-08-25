@extends('adminlte::page')

@section('content')
<h4>Ubah Data Barang</h4>
{!! Form::model($barang,['method'=> 'PATCH','route'=>['barang.update',$barang->id_barang]]) !!}
<div class="form-group">
 {!! Form::label('id_barang', 'ID Barang:',['class' =>'control-label']) !!}
 {!! Form::text('id_barang', null, ['class' => 'form-control','disabled']) !!}
</div>
<div class="form-group">
 {!! Form::label('nama_barang', 'Nama:',['class' =>'control-label']) !!}
 {!! Form::text('nama_barang', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('harga_beli', 'Harga Beli:',['class' =>'control-label']) !!}
 {!! Form::text('harga_beli', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('harga_jual', 'Harga Jual:',['class' =>'control-label']) !!}
 {!! Form::text('harga_jual', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('stok', 'Stok:',['class' =>'control-label']) !!}
 {!! Form::text('stok', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('satuan', 'Satuan:',['class' =>'control-label']) !!}
 {!! Form::text('satuan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('keterangan', 'Keterangan:',
 ['class' => 'control-label']) !!}
 {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
 </div>
<div class="form-group">
 {!! Form::label('kategori', 'Kategori:',
 ['class' => 'control-label']) !!}
 {!! Form::text('kategori', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
