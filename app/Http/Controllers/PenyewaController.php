<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewa = Penyewa::all();
        return view('penyewa.index', compact('penyewa'));
    }

    public function create()
    {
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'nama_penyewa' => 'required',
            'alamat_penyewa' => 'required',
            'email' => 'required|email',
            'telepon' => 'required|numeric',
           
        ]);
        
        // dd($request);

        $photo    = $request->file('photo');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'photo-user/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($photo));

        $penyewa = new Penyewa;
        $penyewa->Nama_Penyewa = $request->nama_penyewa;
        $penyewa->Alamat_Penyewa = $request->alamat_penyewa;
        $penyewa->Email = $request->email;
        $penyewa->Telepon = $request->telepon;
        $penyewa->Image = $filename;

        $penyewa->save();

        return redirect()->route('penyewa.index');
    }

    public function edit(Penyewa $penyewa)
    {
        return view('penyewa.edit', compact('penyewa'));
    }

    public function show(Penyewa $penyewa)
    {
        return view('penyewa.show', compact('penyewa'));
    }

    public function update(Request $request, Penyewa $penyewa)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'nama_penyewa' => 'required',
            'alamat_penyewa' => 'required',
            'email' => 'required|email',
            'telepon' => 'required|numeric',
        ]);

        $penyewa->Nama_Penyewa = $request->nama_penyewa;
        $penyewa->Alamat_Penyewa = $request->alamat_penyewa;
        $penyewa->Email = $request->email;
        $penyewa->Telepon = $request->telepon;

        $penyewa->save();

        return redirect()->route('penyewa.index');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil dihapus.');
    }
}
