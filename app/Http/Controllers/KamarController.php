<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KamarController extends Controller
{

    public function index(): View
    {
       $kamar = Kamar::latest()->paginate(10);
       return view('kamar.index',compact('kamar'));
    }

    public function create(): View
    {
        return view('kamar.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'nama_kamar'    => 'required|min:5|unique:kamar,nama_kamar',
            'jenis_kamar'   => 'required',
            'ukuran_kamar'  => 'required|min:1',
            'harga'         => 'required|min:5'
        ]);

        Kamar::create([
            'nama_kamar'        => $request->nama_kamar,
            'jenis_kamar'       => $request->jenis_kamar,
            'ukuran_kamar'      => $request->ukuran_kamar,
            'harga'             => $request->harga,
        ]);
        //redirect to index
        return redirect()->route('kamar.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $data_kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('data_kamar'));
    }

    public function show(string $id): View
    {
        $kamar = Kamar::findOrFail($id);

        return view('kamar.show', compact('kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        // $request->validate([
        //     'nama_kamar'    => 'required|min:5|unique:kamar,nama_kamar',
        //     'jenis_kamar'   => 'required',
        //     'ukuran_kamar'  => 'required|min:1',
        //     'harga'         =>'required|min:5'
        // ]);

        $data_kamar = Kamar::findOrFail($id);
        $data_kamar->update([
            'nama_kamar'        => $request->nama_kamar,
            'jenis_kamar'       => $request->jenis_kamar,
            'ukuran_kamar'      => $request->ukuran_kamar,
            'harga'             => $request->harga
            ]);

        return redirect()->route('kamar.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
        return redirect()->route('kamar.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}