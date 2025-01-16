<?php

namespace App\Http\Controllers;

use App\Models\Usage;
use Illuminate\Http\Request;

class UsageController extends Controller
{
    public function index()
    {
        $usages = Usage::where('name', 'like', '%' . request('name') . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.usage.index', compact('usages'));
    }

    public function create()
    {
        return view('pages.admin.usage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Usage::create($request->all());
        return redirect()->route('usage.index')->with('success', 'Penggunaan produk berhasil ditambah');
    }

    public function edit(Usage $usage)
    {
        return view('pages.admin.usage.edit', compact('usage'));
    }

    public function update(Request $request, Usage $usage){
        $request->validate([
            'name' => 'required'
        ]);

        $usage->update($request->all());
        return redirect()->route('usage.index')->with('success', 'Penggunaan produk berhasil diubah');
    }

    public function destroy(Usage $usage)
    {
        $usage->delete();
        return redirect()->route('usage.index')->with('success', 'Penggunaan produk berhasil dihapus');
    }
}
