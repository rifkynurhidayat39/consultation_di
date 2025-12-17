@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Edit Contact</h2>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form method="POST"
                  action="{{ route('contact.update', $contact) }}">
                @csrf
                @method('PUT')

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email', $contact->email) }}">
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">No Telepon</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           value="{{ old('phone', $contact->phone) }}">
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Alamat</label>
                    <textarea name="address"
                              class="form-control"
                              rows="3"
                              required>{{ old('address', $contact->address) }}</textarea>
                </div>

                <!-- Google Maps -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Link Google Maps</label>
                    <input type="url"
                           name="google_maps_link"
                           class="form-control"
                           value="{{ old('google_maps_link', $contact->google_maps_link) }}">
                </div>

                <!-- Primary -->
                <div class="form-check mb-4">
                    <input class="form-check-input"
                           type="checkbox"
                           name="is_primary"
                           value="1"
                           {{ $contact->is_primary ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Jadikan lokasi utama
                    </label>
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>
@endsection
