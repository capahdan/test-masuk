@extends('dashboard.layouts.cinta')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Mahasiswa Baru</h1>
   </div>

   @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
   @endif

    <div class="col-lg-8">
    <form method="POST" action="/student" class="mb-5" >
            @csrf
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name"  value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>

           
        
        <div class="mb-2">
            <label for="nim">NIM</label>
            <input type="number" name="nim" class="form-control @error('nim')is-invalid @enderror" id="name" placeholder="Username" value="{{ old('nim') }}">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div> 
        
        
      

      

        
{{-- 
         <div class="mb-2">
            <div class="form-check">
                <input class="form-check-input" name="approved" type="checkbox" value="true" id="approved" value={{ old('approved') }}>
                <label class="form-check-label" for="approved">
                  Approved
                </label>
              </div>
        </div> --}}

   
        

        <div class="mb-2">
            <label for="tingkat">Tingkat</label>
            <input type="number" name="tingkat" class="form-control @error('tingkat')is-invalid @enderror" id="name"  value="{{ old('tingkat') }}" max="4" min="1">
                    @error('tingkat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
        </div>

        <div class="mb-4">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control @error('jurusan')is-invalid @enderror" id="name" placeholder="Jurusan " value="{{ old('jurusan') }}">
                @error('jurusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>

        <div class="mb-2">
            <label for="ip_terakhir">IP Terakhir</label>
            <input type="text" name="ip_terakhir" class="form-control @error('ip_terakhir')is-invalid @enderror" id="name" placeholder="IPS terakhir" value="{{ old('ip_terakhir') }}">
            @error('ip_terakhir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="jumlah_sks">Jumlah SKS</label>
            <input type="number" name="jumlah_sks" class="form-control @error('jumlah_sks')is-invalid @enderror" id="name" placeholder="jumlah sks" value="{{ old('jumlah_sks') }}">
            @error('jumlah_sks')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
                <label for="status_tinggal">tempat Tinggal</label>
                <input type="text" name="status_tinggal" class="form-control rounded-top @error('status_tinggal')is-invalid @enderror" id="tempat_tinggal" placeholder="tempat_tinggal"  value="{{ old('status_tinggal') }}">
                @error('status_tinggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
               
        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
    </form>
             


@endsection