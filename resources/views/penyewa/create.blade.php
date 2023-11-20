@extends('layout.master')

@section('title', 'Tambah Penyewa')

@section('content')
    <div class="container">
        <h1>Tambah Penyewa</h1>
        <form action="{{ route('penyewa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_penyewa">Ktp</label>
                <input type="file" class="form-control" id="nama_penyewa" name="photo">
            </div>
            <div class="form-group">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa">
            </div>
            <div class="form-group">
                <label for="alamat_penyewa">Alamat</label>
                <input type="text" class="form-control" id="alamat_penyewa" name="alamat_penyewa">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
