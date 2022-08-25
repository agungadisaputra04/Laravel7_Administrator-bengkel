<!-- app/views/barang/create.blade.php -->
@extends('adminlte::page')
@section('content')
<h3>Masukan Data Barang Baru</h3>
{!! Form::open(['route' => 'barang.store','method'=>'POST',
 'enctype'=>'multipart/form-data']) !!}

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
