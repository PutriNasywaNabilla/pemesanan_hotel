<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CustomersController extends Controller
{

    public function index(): View
    {
       $customers = Customers::latest()->paginate(10);
       return view('customers.index',compact('customers'));
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'NIK'           => 'required|min:5|unique:customers,NIK',
            'nama_customer' => 'required|min:5',
            'email'         => 'required|min:5|unique:customers,email|email',
            'country'       =>'required|min:5'
        ]);

        Customers::create([
            'NIK'               => $request->NIK,
            'nama_customer'     => $request->nama_customer,
            'email'             => $request->email,
            'country'           => $request->country,
        ]);
        //redirect to index
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dataCustomers = Customers::findOrFail($id);
        return view('customers.edit', compact('dataCustomers'));
    }

    public function show(string $id): View
    {
        $customers = Customers::findOrFail($id);

        return view('customers.show', compact('customers'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        // $request->validate([
        //     'NIK'           => 'required|min:5|unique:customers,NIK',
        //     'nama_customer' => 'required|min:5|unique:customers,nama_customer',
        //     'email'         => 'required|min:5|unique:customers,email|email',
        //     'country'       =>'required|min:5'
        // ]);

        $dataCustomers = Customers::findOrFail($id);
        $dataCustomers->update([
            'NIK'               => $request->NIK,
            'nama_customer'     => $request->nama_customer,
            'email'             => $request->email,
            'country'           => $request->country,
            ]);

        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $customers = Customers::findOrFail($id);
        $customers->delete();
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}