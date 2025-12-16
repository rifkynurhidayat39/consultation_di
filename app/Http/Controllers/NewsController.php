<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('backend.news.index', compact('news'));
    }

    public function create()
    {
        return view('backend.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'author' => 'nullable|string|max:100',
            'category' => 'nullable|string|max:100',
            'published_at' => 'nullable|date',
            'status' => 'nullable|in:draft,published',
        ]);

        $data = [
            'title'        => $request->title,
            'slug'         => Str::slug($request->title),
            'content'      => $request->content,
            'author'       => $request->author,
            'category'     => $request->category,
            'published_at' => $request->published_at,
            'status'       => $request->status ?? 'published',
        ];

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('news', 'public');
        }

        News::create($data);

        return redirect()
            ->route('news.index')
            ->with('success', 'News berhasil ditambahkan');
    }

    public function edit(News $news)
    {
        return view('backend.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'author' => 'nullable|string|max:100',
            'category' => 'nullable|string|max:100',
            'published_at' => 'nullable|date',
            'status' => 'nullable|in:draft,published',
        ]);

        $data = [
            'title'        => $request->title,
            'slug'         => Str::slug($request->title),
            'content'      => $request->content,
            'author'       => $request->author,
            'category'     => $request->category,
            'published_at' => $request->published_at,
            'status'       => $request->status,
        ];

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('news', 'public');
        }

        $news->update($data);

        return redirect()
            ->route('news.index')
            ->with('success', 'News berhasil diupdate');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()
            ->route('news.index')
            ->with('success', 'News berhasil dihapus');
    }
}
