@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between mb-3">
        <h3 class="fw-bold">Edit FAQ</h3>
        <a href="{{ route('faq.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form method="POST" action="{{ route('faq.update', $faq) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Pertanyaan</label>
                    <textarea name="question"
                              class="form-control"
                              rows="2"
                              required>{{ old('question', $faq->question) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Jawaban</label>
                    <textarea name="answer"
                              class="form-control"
                              rows="4"
                              required>{{ old('answer', $faq->answer) }}</textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('faq.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button class="btn btn-primary">
                        <i class="bi bi-save"></i> Update FAQ
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
