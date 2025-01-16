<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::where('name', 'like', '%' . request('name') . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.promos.index', compact('promos'));
    }

    public function create()
    {
        return view('pages.admin.promos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5048',
        ]);

        $data = ['name' => $request->name];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('promo/images', 'public');
        }

        Promo::create($data);

        return redirect()->route('promos.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    public function show($id)
    {
        $promo = Promo::findOrFail($id);
        return view('pages.admin.promos.show', compact('promo'));
    }

    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();
        return redirect()->route('promos.index')->with('success', 'Promo berhasil dihapus.');
    }
}
