@extends('layout.master')

@section('title', 'Tambah Admin')

@section('content')
    <div class="content-wrapper">
        <h1>Tambah Admin</h1>
        <form action="{{ route('admins.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" class="form-control" id="nama_admin" name="nama_admin">
            </div>
            <div class="form-group">
                <label for="email_admin">Email Admin</label>
                <input type="email" class="form-control" id="email_admin" name="email_admin">
            </div>
            <div class="form-group">
                <label for="password_admin">Password Admin</label>
                <input type="password" class="form-control" id="password_admin" name="password_admin">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
