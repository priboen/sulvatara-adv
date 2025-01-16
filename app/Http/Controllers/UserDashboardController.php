<?php

namespace App\Http\Controllers;

use App\Models\OpenTrip;
use App\Models\Product;
use App\Models\Promo;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $superProducts = Product::where('is_super_product', true)->limit(10)->get();
        $latestProducts = Product::orderBy('created_at', 'DESC')->limit(10)->get();
        $openTrip = OpenTrip::orderBy('created_at', 'DESC')->limit(10)->get();
        $promos = Promo::all();
        return view('pages.user.dashboard', compact(['promos', 'superProducts', 'latestProducts', 'openTrip']))
            ->with('openTrip', $openTrip);
    }

    public function getArticle($id)
    {
        $trip = OpenTrip::findOrFail($id); // Ambil data berdasarkan ID
        return view('pages.user.open-trips.open-trips', compact('trip')); // Kirim data ke view detail
    }
}
