<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::all();
        return view('suppliers.index', ['suppliers' => $suppliers]);
    }

    public function create() {
        return view('suppliers.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $newCategory = Supplier::create($data);

        return redirect()->route('supplier.index');
    }

    public function edit(Supplier $supplier) {
        return view('suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, Supplier $supplier) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $supplier->update($data);

        return redirect()->route('supplier.index');
    }

    public function destroy(Supplier $supplier) {
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
