@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Edit Sambutan</h3>
        <a href="{{ route('sambutan.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form method="POST"
                  action="{{ route('sambutan.update') }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Judul -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Sambutan</label>
                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        value="{{ old('title', $sambutan->title) }}"
                        required
                    >
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi</label>
                    <textarea
                        name="description"
                        rows="4"
                        class="form-control"
                        required
                    >{{ old('description', $sambutan->description) }}</textarea>
                </div>

                <!-- Preview -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Foto Saat Ini</label><br>
                    @if($sambutan->image)
                        <img src="{{ asset('storage/'.$sambutan->image) }}"
                             style="width:80px"
                             class="img-thumbnail">
                    @else
                        <span class="text-muted small">Belum ada foto</span>
                    @endif
                </div>

                <!-- Upload -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Ganti Foto</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="text-end">
                    <button class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
