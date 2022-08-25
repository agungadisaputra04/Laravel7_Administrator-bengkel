@extends('adminlte::page')
@section('content')
 <h4>Manajemen Data Gaji</h4>
 <a href="{{ route('gaji.create') }}"
 class="btn btn-info btn-sm">Gaji Baru</a>

 @if ($message = Session::get('message'))
 <div class="alert alert-success martop-sm">
 <p>{{ $message }}</p>
 </div>
 @endif
 <table class="table table-responsive martop-sm">
 <thead>
 <th>No</th>
 <th>ID</th>
 <th>ID Pegawai</th>
 <th>Uang Makan</th>
 <th>Komisi</th>
 <th>Jumlah Komisi</th>
 <th>Cuti</th>
 <th>Jumlah Cuti</th>
 <th>Total</th>
 <th>Action</th>
 </thead>
 <tbody>
 @php $i=1;@endphp
 @foreach ($gaji as $p)
 <tr>
 <td>{{ $i++ }}</td>
 <td>{{ $p->id_gaji }}</td>
 <td>{{ $p->id_pegawai }}</td>
 <td>{{ $p->uang_makan }}</td>
 <td>{{ $p->komisi }}</td>
 <td>{{ $p->jumlah_komisi }}</td>
 <td>{{ $p->cuti }}</td>
 <td>{{ $p->jumlah_cuti }}</td>
 <td>{{ $p->total }}</td>
 <td><a href="{{ route('gaji.show', $p->id_gaji) }}">
 {{ $p->gaji }}</a>
 <form action="{{ route('gaji.destroy', $p->id_gaji) }}"
 method="post">
 {{csrf_field()}}
{{ method_field('DELETE') }}
<a href="{{ route('gaji.edit', $p->id_gaji) }}"
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


