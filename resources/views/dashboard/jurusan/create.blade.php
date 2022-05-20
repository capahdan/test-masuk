@extends('dashboard.layouts.cinta')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah jurusan baru</h1>
   </div>

   @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
   @endif

    <div class="col-lg-8">
    <form method="POST" action="/jurusan" class="mb-5" >
            @csrf

        <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan </label>
        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="" value="{{ old('jurusan') }}" >
        @error('jurusan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>              

        
        <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
    </form>
    </div>


@endsection