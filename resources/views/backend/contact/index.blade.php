@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Contact</h3>
            <small class="text-muted">Daftar alamat & kontak</small>
        </div>
    </div>

    <!-- Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped align-middle mb-0">

                    <thead class="table-light">
                        <tr class="text-center text-uppercase small fw-semibold">
                            <th width="5%">No</th>
                            <th width="20%">Email</th>
                            <th width="15%">No Telepon</th>
                            <th width="35%">Alamat</th>
                            <th width="10%">Primary</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($contacts as $index => $contact)
                            <tr>
                                <td class="text-center fw-semibold">
                                    {{ $index + 1 }}
                                </td>

                                <td>
                                    {{ $contact->email ?? '-' }}
                                </td>

                                <td>
                                    {{ $contact->phone ?? '-' }}
                                </td>

                                <td>
                                    <div>{{ $contact->address }}</div>

                                    @if($contact->google_maps_link)
                                        <a 
                                            href="{{ $contact->google_maps_link }}" 
                                            target="_blank"
                                            class="small text-primary"
                                        >
                                            Lihat di Google Maps
                                        </a>
                                    @endif
                                </td>

                                <td class="text-center">
                                    @if($contact->is_primary)
                                        <span class="badge bg-success">Utama</span>
                                    @else
                                        <span class="badge bg-secondary">Cabang</span>
                                    @endif
                                </td>

                                <!-- Aksi -->
                                <td class="text-center">
                                    <a 
                                        href="{{ route('contact.edit', $contact) }}" 
                                        class="btn btn-outline-warning btn-sm"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    Belum ada data contact
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<style>
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover {
        background-color: #eef2f6;
    }
</style>
@endsection
