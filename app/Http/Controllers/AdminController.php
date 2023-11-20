<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create');
    }

     public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_admin' => 'required',
            'email_admin' => 'required',
            'password_admin' => 'required',
        ]);

        $admin = new Admin;
        $admin->Nama_Admin = $request->input('nama_admin');
        $admin->Email_Admin = $request->input('email_admin');
        $admin->Password_Admin = $request->input('password_admin');
        $admin->save();

        return redirect()->route('admins.index')->with('success', 'Admin berhasil ditambahkan');
    }

    public function edit(Admin $admin)
    {
        return view('admins.edit', compact('admin'));
    }
}
