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

    public function edit(Customer $customer)
    {
        return view('pelanggan.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect('customer');
    }
}
