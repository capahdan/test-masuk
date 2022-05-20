@extends('dashboard.layouts.cinta')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jurusan </h1>
   </div>

   @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
   @endif

    <div class="col-lg-8">
    <form method="POST" action="/jurusan/{{ $jurusan->id }}" class="mb-5" >
            @csrf
            @method('PUT')

        <div class="mb-3">
        <label for="nama" class="form-label">Jurusan </label>
        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="" value="{{ $jurusan->jurusan}}" >
        @error('jurusan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>              

        
        <button type="submit" class="btn btn-warning">Edit jurusan</button>
    </form>
    </div>


@endsection