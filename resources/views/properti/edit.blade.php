@extends('layout.master')

@section('title', 'Edit Properti')

@section('content')
    <div class="container">
        <h1>Edit Properti</h1>
        <form action="{{ route('properti.update', $properti->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="jenis_properti">Jenis Properti</label>
                <input type="text" class="form-control" id="jenis_properti" name="jenis_properti" value="{{ $properti->Jenis_Properti }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $properti->Alamat }}">
            </div>
            <div class="form-group">
                <label for="luas_bangunan">Luas Bangunan</label>
                <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" value="{{ $properti->Luas_Bangunan }}">
            </div>
            <div class="form-group">
                <label for="jumlah_kamar_tidur">Jumlah Kamar Tidur</label>
                <input type="number" class="form-control" id="jumlah_kamar_tidur" name="jumlah_kamar_tidur" value="{{ $properti->Jumlah_Kamar_Tidur }}">
            </div>
            <div class="form-group">
                <label for="jumlah_kamar_mandi">Jumlah Kamar Mandi</label>
                <input type="number" class="form-control" id="jumlah_kamar_mandi" name="jumlah_kamar_mandi" value="{{ $properti->Jumlah_Kamar_Mandi }}">
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="{{ $properti->Fasilitas }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa_harian">Harga Sewa Harian</label>
                <input type="text" class="form-control" id="harga_sewa_harian" name="harga_sewa_harian" value="{{ $properti->Harga_Sewa_Harian }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa_bulanan">Harga Sewa Bulanan</label>
                <input type="text" class="form-control" id="harga_sewa_bulanan" name="harga_sewa_bulanan" value="{{ $properti->Harga_Sewa_Bulanan }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa_tahunan">Harga Sewa Tahunan</label>
                <input type="text" class="form-control" id="harga_sewa_tahunan" name="harga_sewa_tahunan" value="{{ $properti->Harga_Sewa_Tahunan }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $properti->Status }}">
            </div>

            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
        </form>
    </div>
@endsection
