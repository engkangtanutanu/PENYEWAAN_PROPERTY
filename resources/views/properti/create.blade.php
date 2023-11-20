@extends('layout.master')

@section('title', 'Tambah Properti')

@section('content')
    <div class="content-wrapper">
        <h1>Tambah Properti</h1>
        <form action="{{ route('properti.store') }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="jenis_properti">Jenis Properti</label>
                <input type="text" class="form-control" id="jenis_properti" name="jenis_properti">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="luas_bangunan">Luas Bangunan</label>
                <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan">
            </div>
            <div class="form-group">
                <label for="jumlah_kamar_tidur">Jumlah Kamar Tidur</label>
                <input type="number" class="form-control" id="jumlah_kamar_tidur" name="jumlah_kamar_tidur">
            </div>
            <div class="form-group">
                <label for="jumlah_kamar_mandi">Jumlah Kamar Mandi</label>
                <input type="number" class="form-control" id="jumlah_kamar_mandi" name="jumlah_kamar_mandi">
            </div>
            <div class="form-group">
                <label for="jenis_properti">Properti</label>
                <input type="file" class="form-control" id="jenis_properti" name="photo">
            </div>
            
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas">
            </div>
            <div class="form-group">
                <label for="harga_sewa_harian">Harga Sewa Harian</label>
                <input type="text" class="form-control" id="harga_sewa_harian" name="harga_sewa_harian">
            </div>
            <div class="form-group">
                <label for="harga_sewa_bulanan">Harga Sewa Bulanan</label>
                <input type="text" class="form-control" id="harga_sewa_bulanan" name="harga_sewa_bulanan">
            </div>
            <div class="form-group">
                <label for="harga_sewa_tahunan">Harga Sewa Tahunan</label>
                <input type="text" class="form-control" id="harga_sewa_tahunan" name="harga_sewa_tahunan">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
