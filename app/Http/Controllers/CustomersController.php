<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{

    public function index(): View
    {
        $customers = DB::table('customers')
        ->join('users', 'users.id', '=', 'customers.customer_id')
        ->select('users.email', 'customers.*')
        ->get();

       return view('customers.index',compact('customers'));
    }

    public function create(): View
    {
        $user = User::where('level','customer')->get();
        return view('customers.create', compact('user'));
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'customer_id'   => 'required',
            'NIK'           => 'required|min:5|unique:customers,NIK',
            'nama_customer' => 'required|min:5',
            'country'       =>'required|min:5'
        ]);

        Customers::create([
            'customer_id'       => $request->customer_id,
            'NIK'               => $request->NIK,
            'nama_customer'     => $request->nama_customer,
            'country'           => $request->country
        ]);
        //redirect to index
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $user = User::where('level','customer')->get();
        $data_customers = Customers::findOrFail($id);
        return view('customers.edit', compact('data_customers', 'user'));
    }

    public function show(string $id): View
    {
        $customers = Customers::findOrFail($id);

        return view('customers.show', compact('customers'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // validate form
        // $request->validate([
        // 'customer_id'   => 'required',
        //     'NIK'           => 'required|min:5|unique:customers,NIK',
        //     'nama_customer' => 'required|min:5|unique:customers,nama_customer',
        //     'country'       =>'required|min:5'
        // ]);

        $data_customers = Customers::findOrFail($id);
        $data_customers->update([
            'customer_id'       => $request->customer_id,
            'NIK'               => $request->NIK,
            'nama_customer'     => $request->nama_customer,
            'country'           => $request->country
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