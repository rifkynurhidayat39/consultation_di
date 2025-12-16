@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Title -->
    <div class="mb-4">
        <h3 class="fw-bold mb-0">Tambah Banner</h3>
        <small class="text-muted">Tambahkan banner baru untuk ditampilkan di website</small>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Teks Banner -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Deskripsi
                    </label>
                    <textarea 
                        name="text" 
                        class="form-control"
                        rows="3"
                        placeholder="Masukkan Deskripsi Banner..."
                        required
                    >{{ old('text') }}</textarea>
                </div>

                <!-- Upload Gambar -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Gambar 
                    </label>
                    <input 
                        type="file" 
                        name="image" 
                        class="form-control"
                        id="image-input"
                        accept="image/*"
                        required
                    >
    
                </div>

                <!-- Preview Gambar -->
                <div class="mb-4 text-center">
                    <img 
                        id="image-preview"
                        src="#"
                        class="img-thumbnail shadow-sm"
                        style="display:none; max-width: 180px; height: auto;"
                        alt="Preview Banner"
                    >
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Banner
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

{{-- Script Preview Gambar --}}
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
