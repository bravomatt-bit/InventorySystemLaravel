<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{

    public function index() {
        $warehouses = Warehouse::all();
        return view('warehouses.index', ['warehouses' => $warehouses]);
    }

    public function create() {
        return view('warehouses.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        $newWarehouse = Warehouse::create($data);

        return redirect()->route('warehouse.index');
    }

    public function edit(Warehouse $warehouse) {
        return view('warehouses.edit', ['warehouse' => $warehouse]);
    }

    public function update(Request $request, Warehouse $warehouse) {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        $warehouse->update($data);

        return redirect()->route('warehouse.index');
    }

    public function destroy(Warehouse $warehouse) {
        $warehouse->delete();
        return redirect()->route('warehouse.index');
    }

}
