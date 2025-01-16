<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Usage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('name', 'like', '%' . request('name') . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.products.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $category = Category::all();
        $usage = Usage::all();
        return view('pages.admin.products.create', compact(['brands', 'category', 'usage']));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'category_id' => 'required',
    //         'brand_id' => 'required'
    //     ]);

    //     Product::create($request->all());
    //     return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'price' => 'required|numeric',
    //         'category_id' => 'required|exists:categories,id',
    //         'brand_id' => 'required|exists:brands,id',
    //         'usage_id' => 'array',
    //         'usage_id.*' => 'exists:usages,id',
    //     ]);
    //     $product = Product::create([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'price' => $request->price,
    //         'category_id' => $request->category_id,
    //         'brand_id' => $request->brand_id,
    //     ]);
    //     if ($request->has('usage_id')) {
    //         $product->usages()->attach($request->usage_id);
    //     }

    //     return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'usage_id' => 'array',
            'usage_id.*' => 'exists:usages,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
        ]);

        if ($request->has('usage_id')) {
            $product->usages()->attach($request->usage_id);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
            $product->save();
        }

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        $brands = Brand::all();
        $category = Category::all();
        $usage = Usage::all();
        return view('pages.admin.products.edit', compact(['product', 'brands', 'category', 'usage']));
    }

    public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
        'brand_id' => 'required|exists:brands,id',
        'usage_id' => 'array',
        'usage_id.*' => 'exists:usages,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    // Perbarui data produk
    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'category_id' => $request->category_id,
        'brand_id' => $request->brand_id,
    ]);

    // Periksa apakah file gambar baru diunggah
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }

        // Simpan gambar baru
        $imagePath = $request->file('image')->store('products', 'public');
        $product->update(['image' => $imagePath]);
    }

    // Sinkronkan relasi di tabel pivot untuk usage_id
    if ($request->has('usage_id')) {
        $product->usages()->sync($request->usage_id);
    } else {
        $product->usages()->detach();
    }

    return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui');
}


    public function show(Product $product)
    {
        $brands = Brand::all();
        $category = Category::all();
        $usage = Usage::all();
        $product->load('usages');

        return view('pages.admin.products.show', compact(['product', 'brands', 'category', 'usage']));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
    }
}
