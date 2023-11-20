@extends('layout.master')

@section('title', 'Daftar Properti')

@section('content')
    <div class="content-wrapper">
        <h1>Daftar Properti</h1>
        <a href="{{ route('properti.store') }}" class="btn btn-success">Tambah Properti</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Properti</th>
                    <th>Jenis Properti</th>
                    <th>Alamat</th>
                    <th>Luas Bangunan</th>
                    <th>Jumlah Kamar Tidur</th>
                    <th>Jumlah Kamar Mandi</th>
                    <th>Properti</th>
                    <th>Fasilitas</th>
                    <th>Harga Sewa Harian</th>
                    <th>Harga Sewa Bulanan</th>
                    <th>Harga Sewa Tahunan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properti as $properti)
                    <tr>
                        <td>{{ $properti->id }}</td>
                        <td>{{ $properti->Jenis_Properti }}</td>
                        <td>{{ $properti->Alamat }}</td>
                        <td>{{ $properti->Luas_Bangunan }}</td>
                        <td>{{ $properti->Jumlah_Kamar_Tidur }}</td>
                        <td>{{ $properti->Jumlah_Kamar_Mandi }}</td>
                        <td><img src="{{ asset('storage/photo-user/'.$properti->image) }}" alt="" width="100"></td>
                        <td>{{ $properti->Fasilitas }}</td>
                        <td>{{ $properti->Harga_Sewa_Harian }}</td>
                        <td>{{ $properti->Harga_Sewa_Bulanan }}</td>
                        <td>{{ $properti->Harga_Sewa_Tahunan }}</td>
                        <td>{{ $properti->Status }}</td>
                        <td>
                        <a href="{{ route('properti.show', $properti->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('properti.edit', $properti->id) }}" class="btn btn-warning">Edit</a>
                       <form action="{{ route('properti.destroy', $properti->id) }}" 
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                       </form>
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
