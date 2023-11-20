<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksis.index', compact('transaksis'));
    }

    public function create()
    {
        $propertis = Properti::all();
        $penyewas = Penyewa::all();

        return view('transaksis.create', compact('propertis', 'penyewas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Properti' => 'required|exists:propertis,ID_Properti',
            'ID_Penyewa' => 'required|exists:penyewas,ID_Penyewa',
            'Tanggal_Mulai_Sewa' => 'required|date',
            'Tanggal_Akhir_Sewa' => 'required|date|after_or_equal:Tanggal_Mulai_Sewa',
            'Durasi_Sewa' => 'required',
            'Total_Biaya' => 'required|numeric',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksis.index')
            ->with('success', 'Transaksi berhasil ditambahkan');
    }

}
