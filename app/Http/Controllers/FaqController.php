<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('backend.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('backend.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required'
        ]);

        Faq::create([
            'question' => $request->question
        ]);

        return redirect()->route('faq.index')
            ->with('success', 'Pertanyaan berhasil dikirim');
    }

    public function edit(Faq $faq)
    {
        return view('backend.faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'answer' => 'required'
        ]);

        $faq->update([
            'answer' => $request->answer,
            'status' => 'answered'
        ]);

        return redirect()->route('faq.index')
            ->with('success', 'Jawaban berhasil disimpan');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faq.index')
            ->with('success', 'FAQ berhasil dihapus');
    }
}
