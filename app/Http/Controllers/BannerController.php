<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('backend.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $image = $request->file('image')->store('banners', 'public');

        Banner::create([
            'text' => $request->text,
            'image' => $image,
        ]);

        return redirect()
            ->route('banner.index')
            ->with('success', 'Banner berhasil ditambahkan');
    }

    public function edit(Banner $banner)
    {
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'text' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($banner->image);
            $banner->image = $request->file('image')->store('banners', 'public');
        }

        $banner->update([
            'text' => $request->text,
            'image' => $banner->image,
        ]);

        return redirect()
            ->route('banner.index')
            ->with('success', 'Banner berhasil diupdate');
    }

    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->image);
        $banner->delete();

        return redirect()
            ->route('banner.index')
            ->with('success', 'Banner berhasil dihapus');
    }
}
