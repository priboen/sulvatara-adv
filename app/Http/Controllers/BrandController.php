<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::where('name', 'like', '%' . request('name') . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('pages.admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Brand::create($request->all());
        return redirect()->route('brands.index')->with('success', 'Brand berhasil ditambah');
    }

    public function edit(Brand $brand)
    {
        return view('pages.admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $brand->update($request->all());
        return redirect()->route('brands.index')->with('success', 'Brand berhasil diubah');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand berhasil dihapus');
    }
}
