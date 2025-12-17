@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Edit Vision & Mission</h2>
        <a href="{{ route('vision-mission.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Alert Error -->
    @if ($errors->any())
        <div class="alert alert-danger shadow-sm">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form method="POST"
                  action="{{ route('vision-mission.update', $data->id) }}">
                @csrf
                @method('PUT')

                <!-- Vision -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Vision</label>
                    <textarea
                        name="vision"
                        class="form-control"
                        rows="4"
                        required>{{ old('vision', $data->vision) }}</textarea>
                </div>

                <!-- Mission -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Mission</label>
                    <textarea
                        name="mission"
                        class="form-control"
                        rows="5"
                        required>{{ old('mission', $data->mission) }}</textarea>
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('vision-mission.index') }}" class="btn btn-outline-secondary">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
