@extends('adminlte::page')
@section('content')
 <h4>Manajemen Data Barang</h4>
 <a href="{{ route('barang.create') }}"
 class="btn btn-info btn-sm">Barang Baru</a>

 @if ($message = Session::get('message'))
 <div class="alert alert-success martop-sm">
 <p>{{ $message }}</p>
 </div>
 @endif
 <table class="table table-responsive martop-sm">
 <thead>
 <th>No</th>
 <th>ID</th>
 <th>Nama</th>
 <th>Harga Beli</th>
 <th>Harga Jual</th>
 <th>Stok</th>
 <th>Satuan</th>
 <th>Keterangan</th>
 <th>Kategori</th>
 <th>Action</th>
 </thead>
 <tbody>
 @php $i=1;@endphp
 @foreach ($barang as $p)
 <tr>
 <td>{{ $i++ }}</td>
 <td>{{ $p->id_barang }}</td>
 <td>{{ $p->nama_barang}}</td>
 <td>{{ $p->harga_beli }}</td>
 <td>{{ $p->harga_jual }}</td>
 <td>{{ $p->stok }}</td>
 <td>{{ $p->satuan }}</td>
 <td>{{ $p->keterangan }}</td>
 <td>{{ $p->kategori }}</td>
 <td><a href="{{ route('barang.show', $p->id_barang) }}">
 {{ $p->barang }}</a>
 <form action="{{ route('barang.destroy', $p->id_barang) }}"
 method="post">
 {{csrf_field()}}
{{ method_field('DELETE') }}
<a href="{{ route('barang.edit', $p->id_barang) }}"
class="btn btn-warning btn-sm">Ubah</a>
 <button type="submit"
class="btn btn-danger btn-sm">Hapus</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
@endsection
