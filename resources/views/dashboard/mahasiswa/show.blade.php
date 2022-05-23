@extends('dashboard.layouts.cinta')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Mahasiswa</h1>
   </div>

   <a href="/student" style="text-decoration:none" class="badge bg-primary mb-3"><span data-feather="home"></span> Kembali</a>
   <div class="col-lg-8">



    <div class="card mb-3" style="max-width: 1080px;">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="https://source.unsplash.com/600x600?profile" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h2 class="card-title">{{ $user->name }}</h2>
              <table class="table table-hover table-sm">
               
                  <tr>
                      <th scope="row">Nim</th>
                      <td>{{ $user->nim }}</td>
                  </tr>
            
              
                  <tr>
                      <th scope="row">Jurusan</th>
                      <td>{{ $user->jurusan->jurusan }}</td>
                  </tr>
                  <tr>
                      <th scope="row">Tingkat</th>
                      <td>{{ $user->tingkat }}</td>
                  </tr>
              
                  <tr>
                      <th scope="row">IP Terakhir</th>
                      <td>{{ $user->ip_terakhir }}</td>
                  </tr>
                  <tr>
                      <th scope="row">Jumlah SKS</th>
                      <td>{{ $user->jumlah_sks }}</td>
                  </tr>
                  <tr>
                      <th scope="row">Status Tinggal</th>
                      <td>{{ $user->status_tinggal }}</td>
                  </tr>
                 
                  </tr>

              </table>
            </div>
          </div>
        </div>
      </div>

</div>

@endsection