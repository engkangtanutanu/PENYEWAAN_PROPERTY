<?php

namespace App\Http\Controllers;

use App\Models\Properti; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertiController extends Controller
{
    public function index()
    {
        $properti = Properti::all();
        return view('properti.index', compact('properti'));
    }

    public function create()
    {
        return view('properti.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'jenis_properti' => 'required',
            'alamat' => 'required',
            'luas_bangunan' => 'required',
            'jumlah_kamar_tidur' => 'required|numeric',
            'jumlah_kamar_mandi' => 'required|numeric',
            'fasilitas' => 'required',
            'harga_sewa_harian' => 'required|numeric',
            'harga_sewa_bulanan' => 'required|numeric',
            'harga_sewa_tahunan' => 'required|numeric',
            'status' => 'required',
        ]);

        // dd($request);

        $photo    = $request->file('photo');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'photo-user/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($photo));

        $properti = new Properti;
        $properti->Jenis_Properti = $request->jenis_properti;
        $properti->Alamat = $request->alamat;
        $properti->Luas_Bangunan = $request->luas_bangunan;
        $properti->Jumlah_Kamar_Tidur = $request->jumlah_kamar_tidur;
        $properti->Jumlah_Kamar_Mandi = $request->jumlah_kamar_mandi;
        $properti->Fasilitas = $request->fasilitas;
        $properti->Harga_Sewa_Harian = $request->harga_sewa_harian;
        $properti->Harga_Sewa_Bulanan = $request->harga_sewa_bulanan;
        $properti->Harga_Sewa_Tahunan = $request->harga_sewa_tahunan;
        $properti->Status = $request->status;
        $properti->Image = $filename;

        $properti->save();

        return redirect()->route('properti.index');
    }

    public function edit(Properti $properti)
    {
        return view('properti.edit', compact('properti'));
    }

    public function show(Properti $properti)
    {
        return view('properti.show', compact('properti'));
    }

    public function update(Request $request, Properti $properti)
{
    $request->validate([
        'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
        'jenis_properti' => 'required',
        'alamat' => 'required',
        'luas_bangunan' => 'required',
        'jumlah_kamar_tidur' => 'required|numeric',
        'jumlah_kamar_mandi' => 'required|numeric',
        'fasilitas' => 'required',
        'harga_sewa_harian' => 'required|numeric',
        'harga_sewa_bulanan' => 'required|numeric',
        'harga_sewa_tahunan' => 'required|numeric',
        'status' => 'required',
    ]);

        $properti->Jenis_Properti = $request->jenis_properti;
        $properti->Alamat = $request->alamat;
        $properti->Luas_Bangunan = $request->luas_bangunan;
        $properti->Jumlah_Kamar_Tidur = $request->jumlah_kamar_tidur;
        $properti->Jumlah_Kamar_Mandi = $request->jumlah_kamar_mandi;
        $properti->Fasilitas = $request->fasilitas;
        $properti->Harga_Sewa_Harian = $request->harga_sewa_harian;
        $properti->Harga_Sewa_Bulanan = $request->harga_sewa_bulanan;
        $properti->Harga_Sewa_Tahunan = $request->harga_sewa_tahunan;
        $properti->Status = $request->status;

        $properti->save();

        return redirect()->route('properti.index');
   }  
   
   public function destroy(Properti $properti)
   {
      $properti->delete();

      return redirect()->route('properti.index');
   }
   
}