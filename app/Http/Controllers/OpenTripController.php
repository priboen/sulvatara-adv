<?php

namespace App\Http\Controllers;

use App\Models\OpenTrip;
use App\Models\OpenTripImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OpenTripController extends Controller
{
    public function index()
    {
        $openTrips = OpenTrip::where('title', 'like', '%' . request('title') . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('pages.admin.trips.index', compact('openTrips'));
    }

    public function create()
    {
        return view('pages.admin.trips.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post = OpenTrip::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Simpan thumbnail
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('open-trips/thumbnails', 'public');
            $post->update(['thumbnail' => $thumbnailPath]);
        }

        return redirect()->route('trips.index')->with('success', 'Postingan berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Pastikan data diambil berdasarkan ID
        $openTrip = OpenTrip::findOrFail($id);

        // Kembalikan view dengan data
        return view('pages.admin.trips.show', compact('openTrip'));
    }


    public function edit($id)
    {
        $openTrip = OpenTrip::findOrFail($id);
        return view('pages.admin.trips.edit', compact('openTrip'));
    }

    // public function update(Request $request, $id)
    // {
    //     $openTrip = OpenTrip::findOrFail($id);
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required',
    //         'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     // Update judul dan konten
    //     $openTrip->update([
    //         'title' => $request->title,
    //         'content' => $request->content,
    //     ]);

    //     // Hapus thumbnail sebelumnya jika ada thumbnail baru
    //     if ($request->hasFile('thumbnail')) {
    //         if ($openTrip->thumbnail && Storage::exists('public/' . $openTrip->thumbnail)) {
    //             Storage::delete('public/' . $openTrip->thumbnail);
    //         }
    //         $thumbnailPath = $request->file('thumbnail')->store('open-trips/thumbnails', 'public');
    //         $openTrip->update(['thumbnail' => $thumbnailPath]);
    //     }

    //     return redirect()->route('trips.index')->with('success', 'Postingan berhasil diperbarui.');
    // }

    public function update(Request $request, $id)
    {
        // Debug input request
        // dd($request->all());

        // Ambil data OpenTrip
        $openTrip = OpenTrip::findOrFail($id);

        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update data
        $openTrip->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Update thumbnail jika ada file baru
        if ($request->hasFile('thumbnail')) {
            if ($openTrip->thumbnail && Storage::disk('public')->exists($openTrip->thumbnail)) {
                Storage::disk('public')->delete($openTrip->thumbnail);
            }
            $thumbnailPath = $request->file('thumbnail')->store('open-trips/thumbnails', 'public');
            $openTrip->update(['thumbnail' => $thumbnailPath]);
        }

        // Redirect dengan pesan sukses
        return redirect()->route('trips.index')->with('success', 'Postingan berhasil diperbarui.');
    }


    public function destroy($id)
    {

        $post = OpenTrip::findOrFail($id);
        // Hapus thumbnail
        if ($post->thumbnail && Storage::exists('public/' . $post->thumbnail)) {
            Storage::delete('public/' . $post->thumbnail);
        }
        $post->delete();
        return redirect()->route('trips.index')->with('success', 'Postingan berhasil dihapus.');
    }
}
