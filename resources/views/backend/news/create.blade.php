@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Title -->
    <div class="mb-4">
        <h3 class="fw-bold mb-0">Tambah News</h3>
        <small class="text-muted">Tambahkan berita baru untuk ditampilkan di website</small>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Judul -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul News
                    </label>
                    <input 
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Masukkan judul berita..."
                        value="{{ old('title') }}"
                        required
                    >
                </div>

                <!-- Kategori & Author -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Kategori
                        </label>
                        <input 
                            type="text"
                            name="category"
                            class="form-control"
                            placeholder="Contoh: Prestasi Siswa"
                            value="{{ old('category') }}"
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Author
                        </label>
                        <input 
                            type="text"
                            name="author"
                            class="form-control"
                            placeholder="Nama penulis"
                            value="{{ old('author') }}"
                        >
                    </div>
                </div>

                <!-- Konten -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Isi News
                    </label>
                    <textarea 
                        name="content"
                        class="form-control"
                        rows="6"
                        placeholder="Masukkan isi berita..."
                        required
                    >{{ old('content') }}</textarea>
                </div>

                <!-- Upload Thumbnail -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Thumbnail
                    </label>
                    <input 
                        type="file"
                        name="thumbnail"
                        class="form-control"
                        id="image-input"
                        accept="image/*"
                    >
                </div>

                <!-- Preview Thumbnail -->
                <div class="mb-4 text-center">
                    <img 
                        id="image-preview"
                        src="#"
                        class="img-thumbnail shadow-sm"
                        style="display:none; max-width: 220px;"
                        alt="Preview Thumbnail"
                    >
                </div>

                <!-- Publish Date & Status -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Tanggal Publish
                        </label>
                        <input 
                            type="date"
                            name="published_at"
                            class="form-control"
                            value="{{ old('published_at') }}"
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Status
                        </label>
                        <select name="status" class="form-select">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan News
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

{{-- Preview Thumbnail --}}
<script>
document.getElementById('image-input').addEventListener('change', function(e) {
    const preview = document.getElementById('image-preview');
    const file = e.target.files[0];

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
});
</script>
@endsection
