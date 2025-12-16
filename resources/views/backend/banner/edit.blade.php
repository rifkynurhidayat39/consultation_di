@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Edit Banner</h2>
        <a href="{{ route('banner.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form method="POST"
                  action="{{ route('banner.update', $banner) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Teks Banner -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Teks Banner</label>
                    <textarea
                        name="text"
                        class="form-control"
                        rows="4"
                        required
                    >{{ old('text', $banner->text) }}</textarea>
                </div>

                <!-- Preview Sebelum & Sesudah -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Preview Gambar</label>

                    <div class="row">
                        <!-- Sebelum -->
                        <div class="col-md-6 text-center">
                            <small class="text-muted d-block mb-1">
                                Gambar Saat Ini
                            </small>
                            <img
                                src="{{ asset('storage/'.$banner->image) }}"
                                class="img-thumbnail banner-img-small"
                                id="old-image"
                            >
                        </div>

                        <!-- Sesudah -->
                        <div class="col-md-6 text-center">
                            <small class="text-muted d-block mb-1">
                                Gambar Baru
                            </small>
                            <img
                                id="image-preview"
                                class="img-thumbnail banner-img-small"
                                style="display:none;"
                            >
                            <div id="no-preview" class="text-muted small mt-3">
                                Belum ada gambar baru
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Gambar Baru -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Ganti Gambar (Opsional)
                    </label>
                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        id="image-input"
                        accept="image/*"
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

{{-- Script Preview --}}
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

{{-- STYLE GAMBAR --}}
@push('styles')
<style>
    .banner-img-small {
        width: 110px;
        height: 65px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #ddd;
    }
</style>
@endpush
