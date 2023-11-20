@extends('layout.master')

@section('title', 'Daftar Admins')

@section('content')
    <div class="content-wrapper">
        <h1>Daftar Admin</h1>
        <a href="{{ route('admins.create') }}" class="btn btn-success">Tambah Admin</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Admin</th>
                    <th>Nama Admin</th>
                    <th>Email Admin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->nama_admin }}</td>
                        <td>{{ $admin->email_admin }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.destroy', $admin->id) }}" method="POST">
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
