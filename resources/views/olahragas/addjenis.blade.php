@extends('layouts.app') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Jenis Olahraga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jenis</li>
        <li class="breadcrumb-item"><a href="{{ route('Jenis') }}"></a>Data Jenis Olahraga</li>
        <li class="breadcrumb-item active">Tambah Data Jenis Olahraga</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertJenis') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="jenis_olahraga" class="form-label">Jenis Olahraga</label>
            <input type="jenis_olahraga" class="form-control" id="jenis_olahraga" name="jenis_olahraga" required>
          </div>
        <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
          </div>
         
              
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection