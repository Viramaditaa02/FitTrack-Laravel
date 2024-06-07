@extends('layouts.app') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Jadwal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jenis</li>
        <li class="breadcrumb-item"><a href="{{ route('Jenis') }}"></a>Jenis Olahraga</li>
        <li class="breadcrumb-item active">Ubah Data Jenis Olahraga</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateJenis', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="jenis_olahraga" class="form-label">Jenis Olahraga</label>
            <input type="text" class="form-control" id="jenis_olahraga" name="jenis_olahraga" value="{{ $data->jenis_olahraga }}" required>
          </div>
          <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}" required>
          </div>
          
         
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection