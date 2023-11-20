@extends('layout.master')

@section('title', 'Daftar Penyewa')

@section('content')
    <div class="content-wrapper">
        <h1>Daftar Penyewa</h1>
        <a href="{{ route('penyewa.store') }}" class="btn btn-success">Tambah Penyewa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ktp</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyewa as $penyewa)
                <tr>
                    <td>{{ $penyewa->id }}</td>
                    <td><img src="{{ asset('storage/photo-user/'.$penyewa->image) }}" alt="" width="100"></td>
                    <td>{{ $penyewa->Nama_Penyewa }}</td>
                    <td>{{ $penyewa->Alamat_Penyewa }}</td>
                    <td>{{ $penyewa->Email }}</td>
                    <td>{{ $penyewa->Telepon }}</td>
                    <td>
                    <form action="{{ route('penyewa.destroy', $penyewa->id) }}" method="POST">
                        <a href="{{ route('penyewa.show', $penyewa->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('penyewa.edit', $penyewa->id) }}" class="btn btn-warning">Edit</a>
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
