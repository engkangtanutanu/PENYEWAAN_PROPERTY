@extends('layout.master')

@section('title', 'Detail Penyewa')

@section('content')
    <div class="container">
        <h1>Detail Penyewa</h1>
        <div class="form-group">
            <label for="nama_penyewa">Nama Penyewa</label>
            <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewa->Nama_Penyewa }}" disabled>
        </div>
        <div class="form-group">
            <label for="alamat_penyewa">Alamat</label>
            <input type="text" class="form-control" id="alamat_penyewa" name="alamat_penyewa" value="{{ $penyewa->Alamat_Penyewa }}" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $penyewa->Email }}" disabled>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $penyewa->Telepon }}" disabled>
        </div>

        <a href="{{ route('penyewa.index') }}" class="btn btn-info">Back</a>
    </div>
@endsection
