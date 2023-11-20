@extends('layout.master')

@section('title', 'Edit Penyewa')

@section('content')
    <div class="container">
        <h1>Edit Penyewa</h1>
        <form action="{{ route('penyewa.update', $penyewa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewa->Nama_Penyewa }}">
            </div>
            <div class="form-group">
                <label for="alamat_penyewa">Alamat</label>
                <input type="text" class="form-control" id="alamat_penyewa" name="alamat_penyewa" value="{{ $penyewa->Alamat_Penyewa }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $penyewa->Email }}">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $penyewa->Telepon }}">
            </div>
            
            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
        </form>
    </div>
@endsection
