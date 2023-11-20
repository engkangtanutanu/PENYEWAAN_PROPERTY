@extends('layout.master')

@section('title', 'Edit Admin')

@section('content')
    <div class="container">
        <h1>Edit Admin</h1>
        <form action="{{ route('admin.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="{{ $admin->Nama_Admin }}">
            </div>

            <div class="form-group">
                <label for="email_admin">Email Admin</label>
                <input type="email" class="form-control" id="email_admin" name="email_admin" value="{{ $admin->Email_Admin }}">
            </div>

            <div class="form-group">
                <label for="password_admin">Password Admin</label>
                <input type="password" class="form-control" id="password_admin" name="password_admin">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
