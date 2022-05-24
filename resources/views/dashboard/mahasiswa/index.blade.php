@extends('dashboard.layouts.cinta')

@section('container')

  {{-- {{ dd($users) }} --}}
  <div class="container">
    <div class="row justify-content-center">
      <form action="/student">
        <div class="col-md-8 d-flex">

        <div class="me-2">
              <select class="form-select" style="width:13rem" name="kolom" >
                 <option selected>Pencarian Berdasarkan</option>
                 <option value="name" {{ (request('kolom')=='name')?'selected':'' }}>Nama</option>
                 <option value="nim" {{ (request('kolom')=='nim')?'selected':'' }}>Nim</option>
                 <option value="jurusan" {{ (request('kolom')=='jurusan')?'selected':'' }}>Jurusan</option>
                 <option value="status_tinggal" {{ (request('kolom')=='status_tinggal')?'selected':'' }}>Tempat Tinggal</option>
              </select>        
        </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit" >Button</button>
          </div>
        </div>
      </form>
    </div>
  </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Mahasiswa</h1>
   </div>

   @if(session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success')}}
    </div>
   @endif
   <div class="table-responsive col-lg-10">
     <a href="/student/create" class="btn btn-primary mb-3">Tambah Mahasiswa Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIM </th>
          <th scope="col">Name</th>
          <th scope="col">tingkat</th>
          <th scope="col">jurusan</th>
          <th scope="col">ip terakhir</th>
          {{-- <th scope="col">Keterangan</th> --}}
          <th scope="col">jumlah sks</th>
          <th scope="col">tempat tinggal</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->nim }}</td>
          <td>{{ $user->name}}</td>
          <td>{{ $user->tingkat}}</td>
          <td>{{ $user->jurusan->jurusan}}</td>
          <td>{{ $user->ip_terakhir}}</td>
          <td>{{ $user->jumlah_sks}}</td>
          <td>{{ $user->status_tinggal}}</td>
          {{-- <td>{{ $absensi->keterangan}}</td> --}}
          
          {{-- <td>{{ $absensi->approved== 0? "Belum Disetujui ":" Sudah Disetujui" }}</td>--}}
          <td>
            <a href="/student/{{ $user->id }}" class="badge bg-primary"><span data-feather="eye"></span></a>
              <a href="/student/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/student/{{ $user->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">
                  <span data-feather="x-circle"></span>
                </button>
              </form>
          </td> 
        </tr>
            @endforeach
      </tbody>
    </table>
  </div>

  {{-- <div class="d-flex justify-content-center">
    {{ $users->links() }}
    </div> --}}
@endsection