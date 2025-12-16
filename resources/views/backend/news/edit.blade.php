@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Edit News</h2>
        <a href="{{ route('news.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form method="POST"
                  action="{{ route('news.update', $news) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Judul -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Berita</label>
                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        value="{{ old('title', $news->title) }}"
                        required
                    >
                </div>

                <!-- Penulis & Kategori -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Penulis</label>
                        <input
                            type="text"
                            name="author"
                            class="form-control"
                            value="{{ old('author', $news->author) }}"
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Kategori</label>
                        <input
                            type="text"
                            name="category"
                            class="form-control"
                            value="{{ old('category', $news->category) }}"
                        >
                    </div>
                </div>

                <!-- Konten -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Isi Berita</label>
                    <textarea
                        name="content"
                        class="form-control"
                        rows="6"
                        required
                    >{{ old('content', $news->content) }}</textarea>
                </div>

                <!-- Preview Thumbnail -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Preview Thumbnail</label>

                    <div class="row">
                        <!-- Lama -->
                        <div class="col-md-6 text-center">
                            <small class="text-muted d-block mb-1">Thumbnail Saat Ini</small>
                            @if($news->thumbnail)
                                <img
                                    src="{{ asset('storage/'.$news->thumbnail) }}"
                                    class="img-thumbnail news-img"
                                >
                            @else
                                <div class="text-muted">Tidak ada gambar</div>
                            @endif
                        </div>

                        <!-- Baru -->
                        <div class="col-md-6 text-center">
                            <small class="text-muted d-block mb-1">Thumbnail Baru</small>
                            <img
                                id="image-preview"
                                class="img-thumbnail news-img"
                                style="display:none;"
                            >
                            <div id="no-preview" class="text-muted small mt-3">
                                Belum ada gambar baru
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Thumbnail -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Ganti Thumbnail (Opsional)
                    </label>
                    <input
                        type="file"
                        name="thumbnail"
                        class="form-control"
                        id="image-input"
                        accept="image/*"
                    >
                </div>

                <!-- Tanggal & Status -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Tanggal Publish</label>
                        <input
                            type="date"
                            name="published_at"
                            class="form-control"
                            value="{{ old('published_at', $news->published_at) }}"
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="published" {{ $news->status == 'published' ? 'selected' : '' }}>
                                Published
                            </option>
                            <option value="draft" {{ $news->status == 'draft' ? 'selected' : '' }}>
                                Draft
                            </option>
                        </select>
                    </div>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

{{-- Preview Thumbnail --}}
<script>
document.getElementById('image-input').addEventListener('change', function(e){
    const preview = document.getElementById('image-preview');
    const noPreview = document.getElementById('no-preview');
    const file = e.target.files[0];

    if(file){
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'inline-block';
        noPreview.style.display = 'none';
    }
});
</script>
@endsection

@push('styles')
<style>
    .news-img {
        width: 150px;
        height: 90px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #ddd;
    }
</style>
@endpush
