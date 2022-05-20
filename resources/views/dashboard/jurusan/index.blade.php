@extends('dashboard.layouts.cinta')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  
<h2>Tambah Jurusan</h2>

   </div>

   @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success')}}
    </div>
   @endif
   <div class="table-responsive col-lg-8">
  
    <a href="/jurusan/create" class="btn btn-primary mb-3">Buat Jurusan Baru</a>
 
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Jurusan</th>
         
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

          
          @foreach($jurusans as $jurusan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $jurusan->jurusan }}</td>
         
          {{-- <td>{{ $adepartemen>keterangan}}</td> --}}
         
          <td>
              {{-- <a href="/dashboard/posts/{{ $absensi->id }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
              <a href="/jurusan/{{ $jurusan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/jurusan/{{ $jurusan->id }}" method="post" class="d-inline">
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
@endsection