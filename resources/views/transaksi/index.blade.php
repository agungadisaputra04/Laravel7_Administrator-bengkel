@extends('adminlte::page')
@section('content')
 <h4>Data Transaksi</h4>
 <a href="{{ route('transaksi.create') }}"
 class="btn btn-info btn-sm">Transaksi Baru</a>

 @if ($message = Session::get('message'))
 <div class="alert alert-success martop-sm">
 <p>{{ $message }}</p>
 </div>
 @endif
 <table class="table table-responsive martop-sm">
 <thead>
 <th>No</th>
 <th>ID</th>
 <th>ID Montir</th>
 <th>Jenis Service</th>
 <th>Total Biaya</th>
 <th>Tanggal</th>
 <th>Action</th>
 </thead>
 <tbody>
 @php $i=1;@endphp
 @foreach ($transaksi as $p)
 <tr>
 <td>{{ $i++ }}</td>
 <td>{{ $p->id_transaksi }}</td>
 <td>{{ $p->id_montir }}</td>
 <td>{{ $p->jenis_service}}</td>
 <td>{{ $p->total_biaya }}</td>
 <td>{{ $p->tanggal }}</td>
 <td><a href="{{ route('transaksi.show', $p->id_transaksi) }}">
 {{ $p->transaksi }}</a>
 <form action="{{ route('transaksi.destroy', $p->id_transaksi) }}"
 method="post">
 {{csrf_field()}}
{{ method_field('DELETE') }}
 <button type="submit"
class="btn btn-danger btn-sm">Hapus</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
@endsection



