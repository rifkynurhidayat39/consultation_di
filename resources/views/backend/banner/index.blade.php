@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Banner</h3>
            
        </div>

        <a href="{{ route('banner.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Banner
        </a>
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
                            <th width="5%" class="border-end">No</th>
                            <th width="15%" class="border-end">Gambar</th>
                            <th width="40%" class="border-end">Teks Banner</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($banners as $index => $banner)
                            <tr class="text-center">
                                <td class="fw-semibold border-end">
                                    {{ $index + 1 }}
                                </td>

                                <!-- Gambar kecil -->
                                <td class="border-end">
                                    <img 
                                        src="{{ asset('storage/'.$banner->image) }}"
                                        class="img-thumbnail shadow-sm"
                                        style="width: 50px;"
                                        alt="Banner"
                                    >
                                </td>

                                <!-- Text banner tengah -->
                                <td class="align-middle border-end">
                                    <span class="fw-medium d-block">
                                        {{ $banner->text }}
                                    </span>
                                </td>

                                <!-- Aksi -->
                                <td>
                                    <a 
                                        href="{{ route('banner.edit', $banner) }}" 
                                        class="btn btn-outline-warning btn-sm me-1"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form 
                                        action="{{ route('banner.destroy', $banner) }}" 
                                        method="POST" 
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin hapus banner ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            class="btn btn-outline-danger btn-sm"
                                            title="Hapus"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    Belum ada data banner
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<!-- Custom CSS -->
<style>
    /* Zebra table abu-abu & putih */
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-striped > tbody > tr:nth-of-type(even) {
        background-color: #ffffff;
    }

    /* Hover effect */
    .table-hover tbody tr:hover {
        background-color: #eef2f6;
    }
</style>
@endsection
