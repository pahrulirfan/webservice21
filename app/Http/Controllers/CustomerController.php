<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('pelanggan.index', compact('customers'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect('customer');
    }

    public function destroy(Customer $id)
    {
        $id->delete();
        return redirect('customer');
    }
}
