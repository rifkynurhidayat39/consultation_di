<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SambutanController extends Controller
{
    /**
     * Ambil data sambutan TUNGGAL
     * Jika belum ada → otomatis dibuat
     */
    private function sambutan()
    {
        return Sambutan::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Judul Sambutan',
                'description' => 'Isi sambutan...',
                'image' => '', // WAJIB string, jangan null
            ]
        );
    }

    /**
     * Halaman index (tabel sambutan)
     */
    public function index()
    {
        $sambutan = $this->sambutan();
        return view('backend.sambutan.index', compact('sambutan'));
    }

    /**
     * Form edit
     */
    public function edit()
    {
        $sambutan = $this->sambutan();
        return view('backend.sambutan.edit', compact('sambutan'));
    }

    /**
     * Update data
     */
    public function update(Request $request)
    {
        $sambutan = $this->sambutan();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5020',
        ]);

        if ($request->hasFile('image')) {
            if ($sambutan->image && Storage::disk('public')->exists($sambutan->image)) {
                Storage::disk('public')->delete($sambutan->image);
            }

            $sambutan->image = $request->file('image')->store('sambutan', 'public');
        }

        $sambutan->title = $request->title;
        $sambutan->description = $request->description;
        $sambutan->save();

        return redirect()
            ->route('sambutan.index')
            ->with('success', 'Sambutan berhasil diperbarui');
    }
}
