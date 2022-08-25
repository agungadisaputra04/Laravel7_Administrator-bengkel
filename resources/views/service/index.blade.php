@extends('adminlte::page')
@section('content')
 <h4>Data Service</h4>
 <a href="{{ route('service.create') }}"
 class="btn btn-info btn-sm">Service Baru</a>

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
 <th>Keterangan</th>
<th>Harga</th>
 <th>Action</th>
 </thead>
 <tbody>
 @php $i=1;@endphp
 @foreach ($service as $p)
 <tr>
 <td>{{ $i++ }}</td>
 <td>{{ $p->id_service }}</td>
 <td>{{ $p->nama }}</td>
 <td>{{ $p->keterangan }}</td>
 <td>{{ $p->harga }}</td>
 <td><a href="{{ route('service.show', $p->id_service) }}">
 {{ $p->service }}</a>
 <form action="{{ route('service.destroy', $p->id_service) }}"
 method="post">
 {{csrf_field()}}
{{ method_field('DELETE') }}
<a href="{{ route('service.edit', $p->id_service) }}"
class="btn btn-warning btn-sm">Ubah Data Service</a>
 <button type="submit"
class="btn btn-danger btn-sm">Hapus Data Service</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
@endsection
