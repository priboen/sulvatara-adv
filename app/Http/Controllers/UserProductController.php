<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Usage;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function productsByCategory(Request $request, $slug)
    {
        $usages = Usage::all();
        $brands = Brand::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $query = Product::where('category_id', $category->id);

        $activeFilters = []; // Array untuk menyimpan filter yang aktif

        // Filter berdasarkan merk
        if ($request->filled('brand')) {
            $query->where('brand_id', $request->brand);
            $activeFilters['brand'] = Brand::find($request->brand)->name ?? 'Unknown Brand';
        }

        // Filter berdasarkan penggunaan
        if ($request->filled('usage')) {
            $query->whereHas('usages', function ($query) use ($request) {
                $query->where('usages.id', $request->usage);
            });
            $activeFilters['usage'] = Usage::find($request->usage)->name ?? 'Unknown Usage';
        }

        // Sorting berdasarkan harga
        if ($request->filled('sort') && in_array($request->sort, ['price_asc', 'price_desc'])) {
            $query->orderBy('price', $request->sort === 'price_asc' ? 'asc' : 'desc');
            $activeFilters['sort'] = $request->sort === 'price_asc' ? 'Harga: Terendah ke Terbesar' : 'Harga: Terbesar ke Terendah';
        }

        // Sorting berdasarkan tanggal
        if ($request->filled('order') && in_array($request->order, ['latest', 'oldest'])) {
            $query->orderBy('created_at', $request->order === 'latest' ? 'desc' : 'asc');
            $activeFilters['order'] = $request->order === 'latest' ? 'Terbaru' : 'Terlama';
        }

        $products = $query->paginate(10);

        return view('pages.user.product.index', compact(['products', 'category', 'usages', 'brands', 'activeFilters']));
    }


    public function show($slug)
    {
        // Cari produk berdasarkan slug
        $product = Product::with(['brand', 'category', 'usages'])->where('slug', $slug)->firstOrFail();

        // Kirim data produk ke view
        return view('pages.user.product.show', compact('product'));
    }
}
