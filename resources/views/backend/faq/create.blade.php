@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Title -->
    <div class="mb-4">
        <h3 class="fw-bold mb-0">Tambah FAQ</h3>
        <small class="text-muted">Tambahkan pertanyaan dan jawaban untuk FAQ</small>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form method="POST" action="{{ route('faq.store') }}">
                @csrf

                <!-- Pertanyaan -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Pertanyaan
                    </label>
                    <input 
                        type="text"
                        name="question"
                        class="form-control"
                        placeholder="Masukkan pertanyaan..."
                        value="{{ old('question') }}"
                        required
                    >
                </div>

                <!-- Jawaban -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Jawaban
                    </label>
                    <textarea 
                        name="answer"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan jawaban..."
                        required
                    >{{ old('answer') }}</textarea>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('faq.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan FAQ
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
