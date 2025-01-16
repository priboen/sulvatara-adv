<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SuperProductController extends Controller
{
    public function index()
    {
        $products = Product::where('name', 'like', '%' . request('name') . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.super-product.index', compact('products'));
    }

    public function toggleSuperProduct($id, Request $request)
    {
        // Validasi input
        logger("Toggle super product ID: $id, Status: " . $request->input('is_super_product'));

        $request->validate([
            'is_super_product' => 'required|boolean',
        ]);

        logger('Validation Passed: ' . $request->input('is_super_product'));


        $product = Product::find($id);
        if (!$product) {
            logger("Product with ID $id not found");
            return response()->json(['success' => false, 'message' => 'Product not found'], 404);
        }

        // Perbarui nilai is_super_product
        $product->is_super_product = $request->input('is_super_product');
        $product->save();

        // Kirim respons sukses
        return response()->json([
            'success' => true,
            'message' => 'Status produk berhasil diperbarui'
        ]);
    }
}
