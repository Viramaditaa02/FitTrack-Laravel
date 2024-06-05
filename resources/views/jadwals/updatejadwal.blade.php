@extends('layouts.app') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Jadwal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item"><a href="{{ route('Jadwal') }}"></a>Jadwal</li>
        <li class="breadcrumb-item active">Ubah Data Jadwal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateJadwal', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
          </div>
          <div class="col-12">
            <label for="jenis_olahraga" class="form-label">Jenis Olahraga</label>
            <input type="text" class="form-control" id="jenis_olahraga" name="jenis_olahraga" value="{{ $data->jenis_olahraga }}" required>
          </div>
          <div class="col-12">
            <label for="harga_latihan" class="form-label">Harga Latihan</label>
            <input type="text" class="form-control" id="harga_latihan" name="harga_latihan" value="{{ $data->harga_latihan }}" required>
          </div>
           <div class="col-12">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $data->tanggal_mulai }}" required>
          </div>
          <div class="col-12">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $data->tanggal_selesai }}" required>
          </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection