@extends('adminlte::page')
@section('content')
 <h4>Data Montir</h4>
 <a href="{{ route('montir.create') }}"
 class="btn btn-info btn-sm">Montir Baru</a>

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
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Nomor Handphone</th>
 <th>Email</th>
 <th>Action</th>
 </thead>
 <tbody>
 @php $i=1;@endphp
 @foreach ($montir as $p)
 <tr>
 <td>{{ $i++ }}</td>
 <td>{{ $p->id_montir }}</td>
 <td>{{ $p->nama }}</td>
 <td>{{ $p->alamat }}</td>
 <td>{{ $p->jenis_kelamin }}</td>
 <td>{{ $p->no_hp }}</td>
 <td>{{ $p->email }}</td>

 <td><a href="{{ route('montir.show', $p->id_montir) }}">
 {{ $p->Montir }}</a>
 <form action="{{ route('montir.destroy', $p->id_montir) }}"
 method="post">
 {{csrf_field()}}
{{ method_field('DELETE') }}
<a href="{{ route('montir.edit', $p->id_montir) }}"
class="btn btn-warning btn-sm">Ubah Data</a>
 <button type="submit"
class="btn btn-danger btn-sm">Hapus Data</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
@endsection