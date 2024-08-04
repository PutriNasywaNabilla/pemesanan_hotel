<?php

namespace App\Http\Controllers;

use App\Models\Harga_Hari_Ini;
use App\Models\Kamar;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Harga_Hari_IniController extends Controller
{

    public function index(): View
    {
        $harga_hari_ini = DB::table('harga_hari_ini')
        ->join('kamar', 'kamar.id_kamar', '=', 'harga_hari_ini.id_kamar')
        ->select('kamar.nama_kamar', 'harga_hari_ini.*')
        ->get();

       return view('harga_hari_ini.index',compact('harga_hari_ini'));
    }

    public function create(): View
    {
        $kamar = Kamar::all();
        return view('harga_hari_ini.create', compact('kamar'));
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'harga'             => 'required|min:5',
            'available_room'    => 'required|min:1',
            'tanggal'           => 'required',
            'nama_kamar'        => 'required| min:5'
        ]);

       Harga_Hari_Ini::create([
            'harga'             => $request->harga,
            'available_room'    => $request->available_room,
            'tanggal'           => $request->tanggal,
        ]);
        //redirect to index
        return redirect()->route('harga_hari_ini.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $kamar = Kamar::all();
        $data_harga_hari_ini = Harga_Hari_Ini::findOrFail($id);
        return view('harga_hari_ini.edit', compact('data_harga_hari_ini', 'kamar'));
    }

    public function show(string $id): View
    {
        $harga_hari_ini = Harga_Hari_Ini::findOrFail($id);

        return view('harga_hari_ini.show', compact('harga_hari_ini'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        // $request->validate([
           // 'harga'             => 'required|min:5',
           // 'available_room'    => 'required|min:1',
           // 'tanggal'           => 'required',
        // ]);

        $data_harga_hari_ini = Harga_Hari_Ini::findOrFail($id);
        $data_harga_hari_ini->update([
            'harga'             => $request->harga,
            'available_room'    => $request->available_room,
            'tanggal'           => $request->tanggal,
            ]);

        return redirect()->route('harga_hari_ini.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $harga_hari_ini = Harga_Hari_Ini::findOrFail($id);
        $harga_hari_ini->delete();
        return redirect()->route('harga_hari_ini.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}