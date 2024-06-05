@extends('layouts.app') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Jadwal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item"><a href="{{ route('Jadwal') }}"></a>Data Jadwal</li>
        <li class="breadcrumb-item active">Tambah Data Jadwal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertJadwal') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="col-12">
            <label for="jenis_olahraga" class="form-label">Jenis Olahraga</label>
            <input type="jenis_olahraga" class="form-control" id="jenis_olahraga" name="jenis_olahraga" required>
          </div>
          <div class="col-12">
            <label for="harga_latihan" class="form-label">Harga Latihan</label>
            <input type="harga_latihan" class="form-control" id="harga_latihan" name="harga_latihan" required>
          </div>
          <div class="col-12">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="tanggal_mulai" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
          </div>
          <div class="col-12">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="tanggal_selesai" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
          </div>
          
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection